<?php

function persistReservation ($reservation) {
    session_start();
   
    $pdo = connectToDB();  // récupération instance classe PDO connectée à BDD du projet

    $startDateFormatted = $reservation->startDate->format('d-m-y');      // les dates sont formatés pour les insérer dans la table, afin de correspondrent au bon format
    $endDateFormatted = $reservation->endDate->format('d-m-y');     //  ""      ""
    $bookedAtFormatted = $reservation->bookedAt->format('d-m-y');   //  ""      ""


// permet d'insérer une réservation dans une base de données
    
    $query = "INSERT INTO reservation
    (name, place, start_date, end_date, cleaning_option, night_price, total_price, booked_at, status)
    VALUES
    (
        '$reservation->name',
        '$reservation->place',
        '$startDateFormatted',
        '$endDateFormatted',
        $reservation->cleaningOption,
        $reservation->nightPrice,
        $reservation->totalPrice,
        '$bookedAtFormatted',
        '$reservation->status'
        )";
        $pdo->query($query);
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