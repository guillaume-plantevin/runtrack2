<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour03: job02</title>
    </head>
    <body>
        <?php
            function strlen_copycat($input_string) {
                $i = 0;
                while (isset($input_string[$i])) {
                    ++$i;
                }
                return $i;
            }
        
            $batty = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
            //    recuparation de la longueur de la chaine
            $i = strlen_copycat($batty);
        
            //    utilisation $i pour fixer la limite de la for-loop
            for ($j = 0; $j < $i; $j += 2) 
                echo $batty[$j];
        ?>
    </body>
</html>

