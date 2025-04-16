<?php 

require_once('../config.php');
require_once('../model/reservation.model.php');
require_once('../model/reservation.repository.php');


$reservationForUser = findReservationForUser(); // Récupérer la réservation de l'utilisateur et stocker dans la variable $reservationForUser
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // vérification formulaire bien envoyé
   
        
        $reservationForUser->cancel(); // annule la résa
        persistReservation($reservationForUser); // sauvegarde la réservation annulée
$message = "Réservation annulée avec succès !";
        
}
$reservation = $reservationForUser;
require_once('../view/cancel-reservation.view.php');