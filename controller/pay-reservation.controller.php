<?php

require_once("../config.php");
require_once("../model/reservation.model.php");
require_once("../model/reservation.repository.php");

$reservationForUser =findReservationForUser();
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {  // vérification si le formulaire à bien été envoyé

    if ($reservationForUser) { 
        $reservationForUser->pay();  //paiement de la résa

        persistReservation($reservationForUser); // sauvegarde la résa payée

        $message = "Réservation payée avec succès !"; 
    } else { 
        $message = "Aucune réservation à payer."; 
     }
    }


require_once("../view/pay-reservation.view.php");