<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job03</title>
        <style>
                label {
                    display: inline-block;
                    width: 13%;
                    margin-bottom: 1.3em;
                }
                #send {
                    margin: 2em auto;
                }
                table, th, td {
                    border: 2px solid black;
                    font-size: 1.3em;
                }
                table {
                    border-collapse: collapse;
                }
                th, td {
                    padding: .5em 1em;
                }
            </style>
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
        if (isset($_POST['valider']))
            echo "<br/> Il y a " . count($_POST) . " arguments.<br />";
    ?>
    
</body>
</html>