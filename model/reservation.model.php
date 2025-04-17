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
    public $canceledAt; 
    public $paidAt;
    public $comment;
    public $commentedAt;


// parametres pour ma fonction "construct"
    public function __construct($name, $place, $startDate, $endDate, $cleaningOption) {

if (strlen($name) < 2 ) {
    throw new Exception("Le nom doit au minimum comporter 2 caractères");
}

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
        $this->canceledAt = new DateTime();    //date d'annulation
    }
}
public function pay() {     // 
    if ($this->status === "CART") {
        $this->status = "PAID";
        $this->paidAt = new DateTime();
    }
}
    public function leaveComment($userComment) {
      if  ($this->status === "PAID") {      // status payer
            $this->comment = $userComment;   
            $this->status = "COMMENTED";   // commentaire
            $this->commentedAt = new DateTime();  // date de commentaire
        }
    }
}