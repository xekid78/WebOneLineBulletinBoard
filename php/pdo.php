<?php
define('DB_DATABASE', 'lesson');
define('DB_USERNAME', 'user01');
define('DB_PASSWORD', 'vagrant');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='.DB_DATABASE);

try {
    $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
