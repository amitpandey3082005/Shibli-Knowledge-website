<?php
// db.php - move this file outside the webroot if possible.
// sql312.infinityfree.com // ye hai hmara infinity free the host hai DB
// Database credentials from your InfinityFree panel
$DB_HOST = 'sql312.infinityfree.com';
$DB_PORT = '3306'; // optional but explicit
$DB_USER = 'if0_40256254';
$DB_PASS = 'H4Kdjlpj1v';
$DB_NAME = 'if0_40256254_shibli';

$dsn = "mysql:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME};charset=utf8mb4";

try {
    $pdo = new PDO(
        $dsn,
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    // success (remove or comment out in production)
    // echo "Connected to DB";
} catch (PDOException $e) {
    // don't expose full error message in production
    http_response_code(500);
    echo "Database connection failed: " . htmlspecialchars($e->getMessage());
    exit;
}
