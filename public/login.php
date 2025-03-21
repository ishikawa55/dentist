<?php
session_start();
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
        exit;
    } else {
        $error = "ログイン失敗";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="ユーザー名" required>
    <input type="password" name="password" placeholder="パスワード" required>
    <button type="submit">ログイン</button>
</form>
