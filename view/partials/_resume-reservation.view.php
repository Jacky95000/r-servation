<?php if (!is_null($reservationForUser)) { ?>


<div>
    <h3>Récapitulatif de votre réservation</h3>
    <p>Nom : <?php echo $reservationForUser->name; ?></p>
    <p>Lieux : <?php echo $reservationForUser->place; ?></p>
    <p>Dates : <?php echo $reservationForUser->startDate->format('d-m-y'); ?> / <?php echo $reservationForUser->endDate->format('d-m-y'); ?></p>
    <p>Prix Total : <?php echo $reservationForUser->totalPrice; ?></p>
    <p>Options de ménages :
        <?php                                    //  <?php echo $reservation->cleaningOption ? "oui" : "non"; 
        if ($reservationForUser->cleaningOption) {
            echo "oui";
        } else {
            echo "non";
        }
        ?>
    </p>
    <p>Statut : <?php echo $reservationForUser->status; ?></p>
</div>
<?php }  ?>