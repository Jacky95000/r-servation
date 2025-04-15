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
                <select name="lieux">
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


    </main>
</body>
</html>