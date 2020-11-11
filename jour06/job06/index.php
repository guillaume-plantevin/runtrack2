<?php
    $styleChoice = 'style';
    if (isset($_POST['valider'])) {
        if (isset($_POST['style'])) {
            if ($_POST['style'] == 'sOne')
                $styleChoice .= '1.css';
            else if ($_POST['style'] == 'sTwo')
                $styleChoice .= '2.css';
            else 
                $styleChoice .= '3.css';
            }
        }
        setcookie('style', $styleChoice, time() - 10 );
        echo $styleChoice;
        setcookie('style', $styleChoice);
        var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style/$_COOKIE['style']">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour06: job06</title>
    </head>
    <body>

        <form action="" method="post">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" placeholder="Jean"><br />

            <label for="nom">Nom:</label>
            <input type="text" name="nom" placeholder="Dupont"><br />

            <label for="sexe">Sexe:</label><br />
            <input type="radio" name="sexe" value="homme">Homme
            <input type="radio" name="sexe" value="femme">Femme
            <br />

            <h4>Sujets favoris:</h4>
            <input type="radio" name="style" id="sOne" value="sOne" default>
            <label for="algo">premier style</label><br />
            <input type="radio" name="style" id="sTwo" value="sTwo">
            <label for="algo">deuxieme style</label><br />
            <input type="radio" name="style" id="sThree" value="sThree">
            <label for="algo">troisieme style</label><br />

            <input type="submit" name="valider" id="send" value="Envoyer">     
        </form>
        
        
    </body>
</html>