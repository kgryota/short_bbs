<?php
session_start();

// セッション変数をすべて解除
$_SESSION = array();

// セッションを完全に破棄
session_destroy();

// ログインページへリダイレクト
header("Location: index.html");
exit;
?>
