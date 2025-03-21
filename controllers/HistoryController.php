<?php
require '../config/db.php';

class HistoryController {
    public static function getHistory($user_id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM appointments WHERE user_id = ? ORDER BY appointment_date DESC");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }
}
?>
