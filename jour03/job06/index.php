<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03: job 06</title>
</head>
<body>
    <?php
        $fightclub = "Les choses que l'on possede finissent par nous posseder.";
        $str_len = strlen($fightclub);
        for ($i = $str_len - 1; $i >= 0; --$i)
            echo $fightclub[$i];


    ?>
    
</body>
</html>