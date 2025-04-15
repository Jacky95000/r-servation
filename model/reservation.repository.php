<?php

function persistReservation ($reservation) {
    session_start();
    $_SESSION["reservation"] = $reservation; // la réservation est stockée dans la session
}

function findReservationForUser () {
    session_start();
    return $_SESSION["reservation"]; // la réservation est récupérée de la session
}

?>