<?php
// Project Configuration
define('SITE_TITLE', 'World Health Organization - INDIA');
define('PRODUCT_NAME', 'Horse Fire Tablets');
define('PRODUCT_PRICE', 899);
define('CURRENCY', '₹');

// Google Sheet Webhook Integration (Paste your Google Apps Script Web App URL here)
define('GOOGLE_SHEET_WEBHOOK_URL', '');

define('DB_FILE', __DIR__ . '/orders.db');
define('CSV_FILE', __DIR__ . '/orders.csv');

// Initialize Database & CSV storage
function init_storage() {
    if (!file_exists(DB_FILE)) {
        try {
            $db = new PDO('sqlite:' . DB_FILE);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec("CREATE TABLE IF NOT EXISTS orders (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                mobile TEXT NOT NULL,
                address TEXT NOT NULL,
                source TEXT DEFAULT 'website',
                ip_address TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )");
        } catch (Exception $e) {
            error_log('DB Init Error: ' . $e->getMessage());
        }
    }

    if (!file_exists(CSV_FILE)) {
        $fp = fopen(CSV_FILE, 'w');
        fputcsv($fp, ['ID', 'Name', 'Mobile', 'Address', 'Source', 'IP Address', 'Created At']);
        fclose($fp);
    }
}

init_storage();
?>