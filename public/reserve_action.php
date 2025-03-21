<?php
session_start();
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $date = $_POST['date'];
    $category = $_POST['category'];

    $stmt = $pdo->prepare("INSERT INTO appointments (user_id, appointment_date, category) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $date, $category]);

    header("Location: history.php");
    exit;
}
?>
