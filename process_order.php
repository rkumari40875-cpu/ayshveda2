<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

$raw_input = file_get_contents('php://input');
$json_data = json_decode($raw_input, true);

$name = trim($_POST['name'] ?? $json_data['name'] ?? '');
$mobile = trim($_POST['mobile'] ?? $_POST['phone'] ?? $json_data['mobile'] ?? $json_data['phone'] ?? '');
$address = trim($_POST['address'] ?? $json_data['address'] ?? '');
$source = trim($_POST['source'] ?? $json_data['source'] ?? 'website');

if (empty($name) || empty($mobile) || empty($address)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields (Name, Mobile, Address).']);
    exit;
}

if (!preg_match('/^\d{10}$/', $mobile)) {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid 10-digit mobile number.']);
    exit;
}

$order_id = 'HF-' . date('ymd') . rand(100, 999);
$created_at = date('Y-m-d H:i:s');
$full_address = $name . ' - ' . $address;

try {
    if (defined('GOOGLE_SHEET_WEBHOOK_URL') && !empty(GOOGLE_SHEET_WEBHOOK_URL)) {
        $sheet_payload = json_encode([
            'order_id' => $order_id,
            'created_at' => $created_at,
            'mobile' => $mobile,
            'address' => $full_address,
            'product' => PRODUCT_NAME
        ]);

        $ch = curl_init(GOOGLE_SHEET_WEBHOOK_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $sheet_payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_exec($ch);
        curl_close($ch);
    }

    echo json_encode([
        'success' => true,
        'message' => 'Order placed successfully!',
        'order_id' => $order_id,
        'data' => [
            'name' => $name,
            'mobile' => $mobile,
            'address' => $address,
            'product' => PRODUCT_NAME,
            'price' => PRODUCT_PRICE,
            'created_at' => $created_at
        ]
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server Error: ' . $e->getMessage()]);
}
?>