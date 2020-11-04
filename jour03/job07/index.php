<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour03: job 07</title>
    </head>
    <body>
        <?php
            $matrix = "Certaines choses changent, et d'autres ne changeront jamais.";
            $length = count(str_split($matrix));

            // Remercions la magie du modulo
            for ($i = 0; $i < $length; ++$i)
                echo $matrix[($i + 1) % $length];
        ?>
    </body>
</html>