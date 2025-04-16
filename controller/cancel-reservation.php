<?php 

require_once('../config.php');
require_once('../model/reservation.model.php');
require_once('../model/reservation.repository.php');


$reservationForUser = findReservationForUser(); // Récupérer la réservation de l'utilisateur et stocker dans la variable $reservationForUser

require_once('../view/cancel-reservation.view.php');