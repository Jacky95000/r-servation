<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h1>Créer une réservation</h1>
        <form method="post">
            <label>Nom 
                <input type="text" name = "name">
            </label>

            
            <label>Lieu
                <select name="place">
                    <option value="bordeaux">Bordeaux</option>
                    <option value="martinique">Martinique</option>
                    <option value="île maurice">Île Maurice</option>
                    <option value="san-francisco">San-Francisco</option>
                </select>
            </label>

<label>Date de début 
    <input type="date" name="start-date">
</label>

<label>Date de fin
    <input type="date" name="end-date">
</label>

<label>Ménage   
    <input type="checkbox" name="clean-option">
</label>
<button type="submit">Réservé</button>
        </form>

<?php if (!is_null($error)) { ?>
    <p>La réservation n'a pas été effectuée : <?php echo $error; ?></p>
<?php } ?>




<?php if (!is_null($reservation)) { ?>

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

    </main>
</body>
</html>