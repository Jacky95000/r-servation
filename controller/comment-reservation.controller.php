<?php

require_once("../config.php");
require_once("../model/reservation.model.php");
require_once("../model/reservation.repository.php");

$reservationForUser = findReservationForUser();  // récupération de la réservation
if ($_SERVER["REQUEST_METHOD"] === "POST") {  
    try {

        if ($reservationForUser && $reservationForUser instanceof Reservation) {
            
            $comment = $_POST['comment'];
            
            $reservationForUser->leaveComment($comment);
            persistReservation($reservationForUser);

        }
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}
require_once("../view/comment-reservation.view.php");