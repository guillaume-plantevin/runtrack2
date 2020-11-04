<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03: job 04</title>
</head>
<body>
    <?php
        $alien = "Dans l'espace, personne ne vous entend crier" . "\0";
        $i = 0;
        while ($alien[$i] != NULL) {
            echo $alien[$i] . "<br />";
            ++$i;
        }

    ?>
    
</body>
</html>