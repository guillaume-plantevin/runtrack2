<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job01</title>
        <style>
            label {
                display: inline-block;
                width: 13%;
                margin-bottom: 1.3em;
            }
            #send {
                margin: 2em auto;
            }
        </style>
    </head>
    <body>
        <form action="" method="get">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" placeholder="Jean"><br />

            <label for="nom">Nom:</label>
            <input type="text" name="nom" placeholder="Dupont"><br />

            <h4>Sujets favoris:</h4>
            <input type="checkbox" name="suj" id="algo" value="ALGO">
            <label for="algo">Algorithme</label><br />
            <input type="checkbox" name="suj" id="html" value="HTML">
            <label for="html">HTML</label><br />
            <input type="checkbox" name="suj" id="css" value="CSS">
            <label for="css">CSS</label><br />
            <input type="checkbox" name="suj" id="php" value="PHP">
            <label for="php">PHP</label><br />


            <label for="sexe">Sexe:</label><br />
            <input type="radio" name="sexe" value="homme">Homme
            <input type="radio" name="sexe" value="femme">Femme
            <br />

            <input type="submit" name="submit" id="send" value="Envoyer">     
        </form>

        <?php
           if (isset($_GET['submit']))
                echo "Il y a " . count($_GET) . " arguments.<br />";
        ?>
        
    </body>
</html>