<?php

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

$reservation = new Reservation ();

$reservation->name = "Jacky Bonnot";
$reservation->place = "Paris";
$reservation->startDate = new DateTime("25-04-15");
$reservation->endDate = new DateTime("25-05-17");
$reservation->cleaningOption = true;
$reservation->nightPrice = 1000;

$totalPrice = (($reservation->endDate->getTimestamp() - $reservation->startDate->getTimestamp()) / (3600 * 24) * $reservation->nightPrice) + 5000;

$reservation->totalPrice = $totalPrice;
$reservation->bookedAt = new DateTime();
$reservation->status = "CART";

var_dump($reservation);