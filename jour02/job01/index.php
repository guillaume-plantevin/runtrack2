<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour02: job01</title>
    </head>
    <body>
        <?php
            $num = 0;

            while ($num < 1337) {
                if ($num == 42)
                    echo "<b><u>" . $num . "</u></b><br />";
                else
                    echo $num . "<br />";
                $num+=1;
            }
        ?>
    </body>
</html>