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

public function __construct() {
// valeurs pour créer l'objet
$this->name = "Jacky Bonnot";
$this->place = "Paris";
$this->startDate = new DateTime("25-04-15");
$this->endDate = new DateTime("25-05-17");
$this->cleaningOption = true;
$this->nightPrice = 1000;

// Calcul qui va permettre de connaitre le prix par nuit
$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

$this->totalPrice = $totalPrice;
$this->bookedAt = new DateTime();
$this->status = "CART";
}
}

$reservation = new Reservation ();