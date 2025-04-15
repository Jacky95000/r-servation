<?php

require_once("../config.php");
require_once("../model/reservation.model.php");
require_once("../model/reservation.repository.php");


$error = null; 
if ($_SERVER["REQUEST_METHOD"] === "POST") {      //vérif si form envoyé
 
    $name = $_POST['name'];    // récupération des données envoyées par l'utilisateur
    $place = $_POST['place'];   // " "
    $startDate = new DateTime($_POST['start-date']);   
    $endDate = new DateTime($_POST['end-date']);

    if ($_POST['clean-option'] === "on") {
        $cleaningOption = true;  // si la case est cochée, on met true
    } else {
        $cleaningOption = false;  // sinon false
    }
// Si il y a une erreur dans le formulaire, ça sera affiché
    try {
        $reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);
        
    } catch(Exception $e) {
        $error = $e->getMessage();
    }
}

$reservationForUser = findReservationForUser(); // on récupère la réservation de l'utilisateur
require_once("../view/create-reservation.view.php");
