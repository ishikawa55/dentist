<?php
require '../config/db.php';

class RecordController {
    public static function getRecords($user_id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM records WHERE user_id = ? ORDER BY visit_date DESC");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }
}
?>
