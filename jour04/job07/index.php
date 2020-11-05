<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job07</title>
    </head>
    <body>
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
            // changer le $width en nombre pair uniquement
            $width = 30;
            $height = $width / 2;
            drawHouse($width, $height);
        ?>    
    </body>
</html>