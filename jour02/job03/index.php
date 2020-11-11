<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02: job03</title>
</head>
<body>
    <?php
        for ($num = 0; $num <= 100; $num++) {
            if ($num > 0 && $num < 20)
                echo "<i>" . $num . "</i>";
            else if ($num >= 25 && $num <= 50) {
                if ($num == 42)
                    echo "La Plateforme_";
                else
                    echo "<u>" . $num . "</u>";
            }
            else
                echo $num;
            echo "<br />";
        }
    ?>
</body>
</html>