<?php
// DB接続
define('DB_DATABASE', 'lesson');
define('DB_USERNAME', 'user01');
define('DB_PASSWORD', 'vagrant');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname='.DB_DATABASE);

try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

// 入力データ
$content = $_POST["content"];

// DB挿入
try {
    $sql  = "INSERT INTO bbs (content, updated_at) VALUES (?, ?);";
    $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(":content", $content, PDO::PARAM_STR);
    $stmt->execute([$content, date("Y/m/d H:i:s")]);
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

$sql = "SELECT * FROM bbs ORDER BY updated_at;";
$stmt = $pdo->prepare($sql);
$stmt -> execute();
