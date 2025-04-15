<?php

function persistReservation ($reservation) {
    session_start();
    $_SESSION["reservation"] = $reservation; // la réservation est stockée dans la session
}

function findReservationForUser () {
    session_start();

    if (array_key_exists('reservation', $_SESSION)) {
        return $_SESSION["reservation"]; // la réservation est récupérée de la session
    } else {
        return null; // réservation n'existe pas dans la session
    }
}

?>