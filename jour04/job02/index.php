<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job02</title>
    </head>
    <body>
        <form action = "" method = "get">
        <!--<form action = "" method = "post">-->
                prenom: <br />
                <input type = "text" name = "prenom" value = "Jean">
                <br /><br />
                Nom: <br />
                <input type = "text" name = "nom" value = "Dupont">
                <br /><br />
                Sujet favori:<br />          
                <input type = "radio" name = "suj" value = "ALGO">Algorithme
                <input type = "radio" name = "suj" value = "HTML">HTML
                <input type = "radio" name = "suj" value = "CSS">CSS
                <input type = "radio" name = "suj" value = "PHP">PHP
                <br /><br />
                Sexe: <br />
                <input type = "radio" name = "gender" value = "M">Homme
                <input type = "radio" name = "gender" value = "F">Femme
                <br /><br />
                <input type = "submit" name="valider" value = "Envoyer">     
            </form>

            <?php
            if (isset($_GET['valider'])) {
                $argNum = count($_GET);
                echo "<table><tr><th>arguments</th><th>valeurs</th>";
                foreach($_GET as $key => $value) {
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