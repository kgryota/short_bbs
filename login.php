<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="view.php" method="post">
        <label for="username">ユーザー名：</label>
        <input type="text" id="username" name="username" value=テストメンバー required><br><br>

        <label for="password">パスワード：</label>
        <input type="password" id="password" name="password" value=test required><br><br>

        <button type="submit">ログイン</button>
    </form>
</body>
</html>
