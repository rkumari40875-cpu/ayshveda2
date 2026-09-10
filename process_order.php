<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Support both FormData (POST) and JSON body payloads
$raw_input = file_get_contents('php://input');
$json_data = json_decode($raw_input, true);

$name = trim($_POST['name'] ?? $json_data['name'] ?? '');
$mobile = trim($_POST['mobile'] ?? $_POST['phone'] ?? $json_data['mobile'] ?? $json_data['phone'] ?? '');
$address = trim($_POST['address'] ?? $json_data['address'] ?? '');
$source = trim($_POST['source'] ?? $json_data['source'] ?? 'website');
$ip_address = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';

// Validation
if (empty($name) || empty($mobile) || empty($address)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields (Name, Mobile, Address).']);
    exit;
}

if (!preg_match('/^\d{10}$/', $mobile)) {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid 10-digit mobile number.']);
    exit;
}

$order_id = null;
$created_at = date('Y-m-d H:i:s');

try {
    // 1. Insert into SQLite Database
    $db = new PDO('sqlite:' . DB_FILE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $db->prepare("INSERT INTO orders (name, mobile, address, source, ip_address, created_at) VALUES (:name, :mobile, :address, :source, :ip, :created_at)");
    $stmt->execute([
        ':name' => $name,
        ':mobile' => $mobile,
        ':address' => $address,
        ':source' => $source,
        ':ip' => $ip_address,
        ':created_at' => $created_at
    ]);
    
    $order_id = $db->lastInsertId();

    // 2. Append to CSV file
    $fp = fopen(CSV_FILE, 'a');
    fputcsv($fp, [$order_id, $name, $mobile, $address, $source, $ip_address, $created_at]);
    fclose($fp);

    echo json_encode([
        'success' => true,
        'message' => 'Order placed successfully!',
        'order_id' => $order_id,
        'data' => [
            'name' => $name,
            'mobile' => $mobile,
            'address' => $address,
            'price' => PRODUCT_PRICE,
            'created_at' => $created_at
        ]
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server Error: ' . $e->getMessage()]);
}
?>