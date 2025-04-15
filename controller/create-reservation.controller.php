<?php

require_once("../config.php");
require_once("../model/reservation.model.php");
require_once("../view/create-reservation.view.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {      //vérif si form envoyé
 
    $name = $_POST['name'];    // récupération des données envoyées par l'utilisateur
    $lieux = $_POST['lieux'];   // " "
    $startDate = new DateTime($_POST['start-date']);   
    $endDate = new DateTime($_POST['end-date']);

    if ($_POST['clean-option'] === "on") {
        $cleaningOption = true;  // si la case est cochée, on met true
    } else {
        $cleaningOption = false;  // sinon false
    }

    $reservation = new Reservation($name, $lieux, $startDate, $endDate, $cleaningOption);  // création de la classe Reservation envoie des données
    $message = "Réservation créée avec succès, au prix de". $reservation->totalPrice;
}











require_once("../view/create-reservation.view.php");