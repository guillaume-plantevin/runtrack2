<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour03: job01</title>
    </head>
    <body>
        <?php
            $tab = array(200, 204, 173, 98, 171, 404, 459);
            $tab_size = count($tab);
            
            for ($i = 0; $i < $tab_size; $i++)
            {
                if ($tab[$i] % 2 == 0)
                    echo $tab[$i] . " est pair<br />";
                else
                    echo $tab[$i] . " est impair<br />";
            }
        ?>
    </body>
</html>