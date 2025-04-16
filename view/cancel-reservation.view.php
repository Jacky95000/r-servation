<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Annulation réservation</h1>

<?php require_once('../view/partials/_resume-reservation.view.php'); ?>

        <form method="POST">
            <button type="submit">Annuler la réservation</button>
            </form>
<p><?php echo $message; ?></p>
        
</body>
</html>