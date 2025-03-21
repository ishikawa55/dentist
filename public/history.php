<?php
session_start();
require '../config/db.php';

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM appointments WHERE user_id = ?");
$stmt->execute([$user_id]);
$appointments = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>予約履歴</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <h2>予約履歴</h2>
    <table>
        <tr>
            <th>日付</th>
            <th>内容</th>
            <th>状態</th>
        </tr>
        <?php foreach ($appointments as $a): ?>
        <tr>
            <td><?= $a['appointment_date'] ?></td>
            <td><?= $a['category'] ?></td>
            <td><?= $a['status'] == '来院済' ? '✅' : ($a['status'] == 'キャンセル' ? '❌' : '⏳') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
