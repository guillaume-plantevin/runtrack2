<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job07</title>
    </head>
    <body>
        <form action = "" method = "get">
            <label for="width">Largeur:</label>
            <input type="text" name="width" id="width">
            <label for="height">hauteur:</label>
            <input type="text" name="height" id="height">
            <input type = "submit" name="validate" value = "Envoyer">     
        </form>
        <?php
            function drawHouse($width, $height) {
                // vertical
                for ($y = 0; $y < $width; ++$y) {
                    // horizontal
                    for ($x = 0; $x < $width; ++$x) {
                        // premiere ligne
                        if ($y == 0) {
                            if (($x + $y) == ($height - 1))
                                echo '/';
                            else if (($x - $y == $height) && ($x > ($height - 1)))
                                echo '\\';
                            else
                                // echo '_';
                                echo '&nbsp&nbsp';
                        }
                        // toit
                        else if ($y < $width / 2 - 1) {
                            if (($x + $y) == ($height - 1))
                                echo '/';
                            else if ((($x + $y) > ($height - 1)) && ($x < $height))
                                echo '_';
                            else if (($x - $y == $height) && ($x > ($height - 1)))
                                echo '\\';
                            else if (($x - $y < $height) && ($x > ($height - 1)))
                                echo '_';
                            else
                                // echo '_';
                                echo '&nbsp&nbsp';
                        }
                        // le milieu
                        else if ($y == $height - 1) {
                            if ($x == 0)
                                echo '/';
                            else if ($x == $width - 1)
                                echo '\\';
                            else
                                echo '_';
                        }
                        // derniere ligne
                        else if ($y == $width -1) {
                            if ($x == 0 || $x == $width - 1)
                                echo '|';
                            else
                                echo '_';
                        }
                        // bas de la maison
                        else {
                            if ($x == 0 || $x == $width - 1)
                            echo '|';
                            else
                            // echo $x;
                            echo '&nbsp&nbsp';
                        }
                    }
                    echo '<br>';
                }
            }
            if (isset($_GET['validate'])) {
                if ($_GET['width'] % 2 != 0 ) 
                    echo "Vous devez entrer un nombre pair pour la largeur.";
                else if ($_GET['height'] != $_GET['width'] / 2 ) 
                    echo "Vous devez entrer une hauteur égale à la largeur divisée par 2.";
                else {
                    $width = $_GET['width'];
                    $height = $_GET['height'];
                    drawHouse($width, $height);
                }
            }
        ?>    
    </body>
</html>