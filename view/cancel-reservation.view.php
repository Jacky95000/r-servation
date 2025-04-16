<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Annulation réservation</h1>

    <?php if (!is_null($reservationForUser)) { ?>


<div>
    <h3>Récapitulatif de votre réservation</h3>
    <p>Nom : <?php echo $reservation->name; ?></p>
    <p>Lieux : <?php echo $reservation->place; ?></p>
    <p>Dates : <?php echo $reservation->startDate->format('d-m-y'); ?> / <?php echo $reservation->endDate->format('d-m-y'); ?></p>
    <p>Prix Total : <?php echo $reservation->totalPrice; ?></p>
    <p>Options de ménages :
        <?php                                    //  <?php echo $reservation->cleaningOption ? "oui" : "non"; 
        if ($reservation->cleaningOption) {
            echo "oui";
        } else {
            echo "non";
        }
        ?>
    </p>
</div>
<?php } ?>
        <form method="POST">
            <button type="submit">Annuler la réservation</button>
            </form>


</body>
</html>