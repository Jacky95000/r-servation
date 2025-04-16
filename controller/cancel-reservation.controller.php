<?php 

require_once('../config.php');
require_once('../model/reservation.model.php');
require_once('../model/reservation.repository.php');


$reservationForUser = findReservationForUser(); // Récupérer la réservation de l'utilisateur et stocker dans la variable $reservationForUser

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // vérification formulaire bien envoyé

    $reservationForUser = findReservationForUser(); // récupération de la réservation

    if ($reservationForUser) {
        
        $reservationForUser->cancel(); // annule la résa
        persistReservation($reservationForUser); // sauvegarde la réservation annulée


echo "Réservation annulée avec succès !";
} else { 
    echo "Aucune réservation à annuler !";
 }
}

require_once('../view/cancel-reservation.view.php');