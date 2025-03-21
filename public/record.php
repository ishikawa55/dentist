<?php
session_start();
require '../controllers/RecordController.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$records = RecordController::getRecords($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>通院記録</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <h2>通院記録</h2>
    <table>
        <tr>
            <th>来院日</th>
            <th>施術内容</th>
            <th>次回検診まで</th>
        </tr>
        <?php foreach ($records as $record): ?>
        <tr>
            <td><?= $record['visit_date'] ?></td>
            <td><?= $record['treatment'] ?></td>
            <td><?= $record['next_checkup_days'] ?>日</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
