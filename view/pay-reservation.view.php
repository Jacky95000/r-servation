<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once('partials/header.view.php'); ?>
    <h2>Paiement de la réservation</h2>

    <?php require_once("../view/partials/_resume-reservation.view.php"); ?>

    <form method="POST">
        <div>
            <button type="submit">Paiement de la réservation</button>
        </div>
    </form> 
    <p><? echo $message; ?></p>
</body>
</html>