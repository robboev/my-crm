
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'u591017192_crmdb');
define('DB_USER', 'u591017192_crmdb');
define('DB_PASS', 'Rob6937640');

try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
