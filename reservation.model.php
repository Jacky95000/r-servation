<?php
// class pour la réservation
class Reservation {
    public $name;
    public $place;
    public $startDate;
    public $endDate;
    public $totalPrice;
    public $nightPrice;
    public $status;
    public $bookedAt;
    public $cleaningOption;
}
// création de l'objet
$reservation = new Reservation ();
// valeurs pour créer l'objet
$reservation->name = "Jacky Bonnot";
$reservation->place = "Paris";
$reservation->startDate = new DateTime("25-04-15");
$reservation->endDate = new DateTime("25-05-17");
$reservation->cleaningOption = true;
$reservation->nightPrice = 1000;

// Calcul qui va permettre de connaitre le prix par nuit
$totalPrice = (($reservation->endDate->getTimestamp() - $reservation->startDate->getTimestamp()) / (3600 * 24) * $reservation->nightPrice) + 5000;

$reservation->totalPrice = $totalPrice;
$reservation->bookedAt = new DateTime();
$reservation->status = "CART";

var_dump($reservation);