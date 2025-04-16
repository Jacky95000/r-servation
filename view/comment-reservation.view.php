<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Commentaire sur la réservation</h2>

<?php require_once('../view/partials/_resume-reservation.view.php'); ?>

<form method="POST">

    <div>
        <button type="submit">Commentaire sur la réservation</button>
    </div>

    <div>
        <label for="comment">Commentaire :
            <textarea name="comment" id="comment" placeholder="Entrez votre commentaire..."></textarea>
        </label>
    </div>

</form>



<?php if (isset($reservationForUser->comment)) { ?>
   
    <div>
        <h3>Votre commentaire :</h3>
        <p><?php echo $reservationForUser->comment; ?></p> // affichage un commentaire
    </div>
<?php } ?>

<?php if (isset($errorMessage)) { ?> // affichage d'un message d'erreur si la réservation n'existe pas
    <div>
        <h3><?php echo $errorMessage; ?></h3> // 
    </div>
<?php } ?>

</body>
</html>