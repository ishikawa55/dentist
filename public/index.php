<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ホーム</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <h1>ようこそ、歯科予約システムへ</h1>
    <p>以下のメニューから選択してください。</p>
    <?php include '../includes/footer.php'; ?>
</body>
</html>

