<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour03: job04</title>
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

            $alien = "Dans l'espace, personne ne vous entend crier";
            echo strlen_copycat($alien);
        ?>
    </body>
</html>