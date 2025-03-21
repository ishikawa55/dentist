<?php
session_start();
require '../config/db.php';

class AuthController {
    public static function login($username, $password) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../public/index.php");
            exit;
        } else {
            return "ログイン失敗";
        }
    }

    public static function logout() {
        session_destroy();
        header("Location: ../public/login.php");
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $error = AuthController::login($_POST['username'], $_POST['password']);
    }
}
?>
