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
        
    $requete = "SELECT * FROM `etudiants` WHERE YEAR(NOW()) - YEAR(naissance) < 18";
    $premconn = mysqli_query($connexion, $requete);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour09: job01</title>
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
                    <th>ID</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Naissance</th>
                    <th>Sexe</th>
                    <th>Email</th>
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