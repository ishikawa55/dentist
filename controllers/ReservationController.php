<?php
require '../config/db.php';

class ReservationController {
    public static function createReservation($user_id, $date, $category) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO appointments (user_id, appointment_date, category) VALUES (?, ?, ?)");
        return $stmt->execute([$user_id, $date, $category]);
    }
}
?>
