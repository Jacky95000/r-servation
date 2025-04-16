<?php

require_once("../config.php");
require_once("../model/reservation.model.php");
require_once("../model/reservation.repository.php");

$reservationForUser = findReservationForUser();  // récupération de la réservation
if ($_SERVER["REQUEST_METHOD"] === "POST") {   
    try { 
  // Vérif si la résa existe 
        if ($reservationForUser && $reservationForUser instanceof Reservation) {
            
            $comment = $_POST['comment']; 

            $reservationForUser->leaveComment($comment);  // ajout du commentaire à la réservation
            persistReservation($reservationForUser);  // sauvegarde de la réservation avec le commentaire

        }
    } catch (Exception $e) {    
        $errorMessage = $e->getMessage(); 
    }
}
require_once("../view/comment-reservation.view.php");