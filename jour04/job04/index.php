<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job04</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" placeholder="Jean"><br />

            <label for="nom">Nom:</label>
            <input type="text" name="nom" placeholder="Dupont"><br />
            
            <label for="mail">Email:</label>
            <input type="email" name="mail" id="mail"><br />

            <label for="sexe">Sexe:</label><br />
            <input type="radio" name="sexe" value="homme">Homme
            <input type="radio" name="sexe" value="femme">Femme
            <br />

            <input type="submit" name="valider" id="send" value="Envoyer">     
        </form>

            <?php
            if (isset($_POST['valider'])) {
                $argNum = count($_POST);
                echo "<table><tr><th>arguments</th><th>valeurs</th>";
                foreach($_POST as $key => $value) {
                    echo "<tr>";
                    echo "<td> {$key} </td>";
                    echo "<td> {$value} </td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
    </body>
</html>