<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour03: job07</title>
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
            $matrix = "Certaines choses changent, et d'autres ne changeront jamais.";
            $length = strlen_copycat($matrix);

            // Remercions la magie du modulo
            for ($i = 0; $i < $length; ++$i)
                echo $matrix[($i + 1) % $length];
        ?>
    </body>
</html>