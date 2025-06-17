<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>一言掲示板 - 投稿一覧（テスト）</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>📜 投稿一覧</h1>
    <p><a href="form.php">← 投稿フォームへ戻る</a></p>
    <hr>

    <?php
        // データベース接続情報
        $host = 'mysql321.phy.lolipop.lan';
        $dbname = 'LAA1554899-shortbbs';
        $user = 'LAA1554899';
        $pass = 'teamproject';
        $charset = 'utf8mb4';

        // DSN（接続文字列）
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";


        // 接続とクエリ実行
        $pdo = new PDO($dsn, $user, $pass);
        foreach ($pdo->query('SELECT user.id, comment.content,username FROM comment JOIN user ON comment.user_id = user.id;') as $row) {
            echo "<div class='post'>";
            echo "<p><strong> ". $row['username'] . "</p>";
            echo "<p>" . $row['content'] . "</p>";
            echo "</div><hr>";
        }




    ?>
</body>
</html>
