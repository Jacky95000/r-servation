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
    public $cancel; 
    public $paid;
    public $comment;


// parametres pour ma fonction "construct"
    public function __construct($name, $place, $startDate, $endDate, $cleaningOption) {

$this->name = $name;
$this->place = $place;
$this->startDate = $startDate;
$this->endDate = $endDate;
$this->cleaningOption = $cleaningOption;

$this->nightPrice = 1000;

// calculs automatique de la valeur
$totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;

$this->totalPrice = $totalPrice;
$this->bookedAt = new DateTime();
$this->status = "CART";
}

// fonction créer pour annuler une commande passe de CART à CANCEL
public function cancel() {    //fonction pour annuler une commande
    if ($this->status === "CART") {     // status CART
        $this-> status = "CANCELED";    // status annuler
        $this->cancel = new DateTime();    //date d'annulation
    }
}
public function PAID() {     // 
    if ($this->status === "CART") {
        $this->status = "PAID";
        $this->paid = new DateTime();
    }
}
    public function leaveComment($comment) {
      if  ($this->status === "PAID") {      // status payer
            $this->comment = $comment;      // commentaire
            $this->comment = new DateTime();  // date de commentaire
        }
    }
}

$name = "Jacky Bonnot";
$place = "Bordeaux";
$start = new DateTime('2025-04-14');
$end = new DateTime('2025-05-14');
$cleaning = "true";

$reservation = new Reservation ($name, $place, $start, $end, $cleaning);

$reservation->cancel();