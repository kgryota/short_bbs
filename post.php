<?php
session_start();
$_SESSION['id'] = '1';
$_SESSION['name'] = 'テストユーザー';

$name = htmlspecialchars($_POST['name'] ?? '名無し');
$comment = htmlspecialchars($_POST['comment'] ?? '');
$time = date('Y-m-d H:i:s');
$user_id = $_SESSION['id'];
// データベース接続情報
$host = 'mysql321.phy.lolipop.lan';
$dbname = 'LAA1554899-shortbbs';
$user = 'LAA1554899';
$pass = 'teamproject';
$charset = 'utf8mb4';

// DSN（接続文字列）
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

try {
    // PDOでデータベースに接続
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // エラー時に例外を投げる
    ]);

    // SQL文を準備して実行
    $sql = "INSERT INTO comment (user_id, content) VALUES (:user_id, :comment)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':user_id' => $user_id,
        ':comment' => $comment,
    ]);

    echo "投稿が成功しました。";

} catch (PDOException $e) {
    echo "データベースエラー: " . htmlspecialchars($e->getMessage());
}



// if (trim($comment) === '') {
//     header("Location: form.php");
//     exit;
// }

// $entry = "$time\t$name\t$comment\n";
// file_put_contents('comments.txt', $entry, FILE_APPEND);
header("Location: view.php");
exit;
?>
