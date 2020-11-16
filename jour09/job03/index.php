<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = 'jour08';

    // creer la connexion, retour negatif = false
    $connexion = mysqli_connect($servername, $username, $password, $database);

    // verifier la connexion
    if (!$connexion)
        die("probleme de connexion: " . mysqli_connect_error());
        
    $requete = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe='femme'";
    $premconn = mysqli_query($connexion, $requete);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour09: job02</title>
        <style>
            table, th, td {
                border: 2px solid black;
            }
            table {
                border-collapse: collapse;
            }
            th {
                text-transform: uppercase;
            }
            th, td {
                padding: 1em;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>nom</th>
                    <th>capacite</th>
                    <th>naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($premconn)) {
                        echo '<tr>';
                        for ($i = 0; isset($row[$i]); ++$i) {
                            echo '<td>' . $row[$i] . '</td>';
                        }
                        echo '</tr>';
                    }

                    mysqli_close($connexion);
                ?>
            </tbody>
        </table>
    </body>
</html>
<!-- 
    En utilisant php et mysqli, connectez-vous à la base de données “jour08”. A
    l’aide d’une requête SQL, récupérez le prenom, le nom et la date de
    naissance des étudiants de sexe féminin. Affichez le résultat de cette
    requête dans un tableau html. La première ligne de votre tableau html doit
    contenir le nom des champs. Les suivantes doivent contenir les données
    présentes dans votre base de données.
 -->