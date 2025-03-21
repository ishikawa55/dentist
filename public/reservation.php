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
    <title>予約</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <h2>予約ページ</h2>
    <form method="POST" action="reserve_action.php">
        <input type="date" name="date" required>
        <select name="category">
            <option value="定期検診">定期検診</option>
            <option value="虫歯、歯周病">虫歯、歯周病</option>
            <option value="マウスピース">マウスピース</option>
        </select>
        <button type="submit">予約する</button>
    </form>
</body>
</html>
