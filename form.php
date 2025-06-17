<?php 
session_start();
$_SESSION['id'] = '1';
$_SESSION['name'] = 'テストユーザー';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>一言掲示板 - 投稿</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>💬 一言掲示板</h1>
    <form action="post.php" method="post">
        <!-- <p>名前：<input type="text" name="name" required></p> -->
        <p><?php  echo $_SESSION['name']; ?>さんこんにちは</p>
        <p>コメント：<br>
        <textarea name="comment" rows="4" cols="40" required></textarea></p>
        <p><button type="submit">投稿する</button></p>
    </form>
    <p><a href="view.php">▶ 投稿一覧を見る</a></p>
</body>
</html>
