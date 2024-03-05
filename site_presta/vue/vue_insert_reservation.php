<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'insertion de réservation</title>
</head>
<body>
    
    <h1>Formulaire d'insertion de réservation</h1>
    <form method="post">
        <input type="hidden" name="idclient" value="<?= isset($_SESSION['iduser']) ? $_SESSION['iduser'] : '' ?>">

        <label for="idprestataire">Prestataire associé :</label>
        <select name="idprestataire" id="idprestataire">
            <?php foreach ($lesPrestataires as $unPrestataire): ?>
                <?php $selected = ($unPrestataire['idprestataire'] == $_GET['idprestataire']) ? 'selected' : ''; ?>
                <option value="<?= $unPrestataire['idprestataire'] ?>" <?= $selected ?>>
                    <?= $unPrestataire['nomprestataire'] ?>
                </option>

            <?php endforeach; ?>
        </select>
        
        <label for="idservice">Service associé :</label>
        <select name="idservice" id="idservice">
            <?php foreach ($lesServices as $unService): ?>
                <?php $selected = ($unService['idservice'] == $_GET['idservice']) ? 'selected' : ''; ?>
                <option value="<?= $unService['idservice'] ?>" <?= $selected ?>>
                    <?= $unService['libelleservice'] ?>
                </option>
            <?php endforeach; ?>



            <label for="idprestation">Prestation associée :</label>
<select name="idprestation" id="idprestation">
    <?php 
    if (isset($_GET['idservice'])) {
        foreach ($lesPrestations as $unePrestation):
            if (isset($unePrestation['idservice']) && $unePrestation['idservice'] == $_GET['idservice']): 
                $selected = (isset($_GET['idprestation']) && $unePrestation['idprestation'] == $_GET['idprestation']) ? 'selected' : ''; 
    ?>
                <option value="<?= $unePrestation['idprestation'] ?>" <?= $selected ?>>
                    <?= $unePrestation['libelleprestation'] ?>
                </option>
    <?php 


            endif;
        endforeach;
    } 
    ?>
</select>


        
        <label for="date_reservation">Date de réservation :</label>
        <input type="date" name="date_reservation" id="date_reservation" value="<?= ($laReservation != null) ? $laReservation['date_reservation'] : '' ?>" required><br><br>
        
        <label for="heure_reservation">Heure de réservation :</label>
        <input type="time" name="heure_reservation" id="heure_reservation" value="<?= ($laReservation != null) ? $laReservation['heure_reservation'] : '' ?>" required><br><br>
        
        <label for="commentaire">Commentaire :</label><br>
        <textarea name="commentaire" id="commentaire" rows="4" cols="50"><?= ($laReservation != null) ? $laReservation['commentaire'] : '' ?></textarea><br><br>
        
        <input type="submit" name="<?= ($laReservation != null) ? 'Modifier' : 'Soumettre' ?>" value="<?= ($laReservation != null) ? 'Modifier' : 'Soumettre' ?>">
    </form>


</body>
</html>












<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* Couleur de fond blanc */
            color: #333; /* Couleur de texte */
        }

        h1 {
            color: #257CFF; /* Couleur bleue */
        }

        form {
            width: 50%; /* Largeur du formulaire */
            margin: auto; /* Centrer le formulaire */
            padding: 20px; /* Espacement intérieur */
            background-color: #f4f4f4; /* Couleur de fond gris clair */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
        }

        label {
            font-weight: bold; /* Texte en gras */
            color: #257CFF; /* Couleur bleue */
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select,
        textarea {
            width: 100%; /* Largeur à 100% */
            padding: 10px; /* Espacement intérieur */
            margin-bottom: 10px; /* Marge en bas */
            border: 1px solid #ddd; /* Bordure gris clair */
            border-radius: 5px; /* Coins arrondis */
            box-sizing: border-box; /* Boîte de modèle */
        }

        textarea {
            height: 100px; /* Hauteur du champ de texte */
        }

        input[type="submit"] {
            background-color: #257CFF; /* Couleur de fond bleue */
            color: #fff; /* Couleur de texte blanc */
            border: none; /* Pas de bordure */
            padding: 10px 20px; /* Espacement intérieur */
            border-radius: 5px; /* Coins arrondis */
            cursor: pointer; /* Curseur de type pointer */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Couleur de fond bleue foncée au survol */
        }
    </style>


    <script>



    </script>