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
$user_name = $_POST["user_name"];
$content = $_POST["content"];
$delete_id = $_POST["delete_id"];

// DB挿入
$sql  = "INSERT INTO bbs (user_name, content, updated_at) VALUES (?, ?, ?);";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_name, $content, date("Y/m/d H:i:s")]);

// DB削除
// $sql = "DELETE FROM bbs WHERE id = delete_id;";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// DB取得
$sql = "SELECT * FROM bbs ORDER BY updated_at;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
