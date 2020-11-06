<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour05: job04</title>
</head>
<body>
    <?php
        function calcule($a, $operation, $b) {

            switch ($operation) {
                case '+':
                    return ($a + $b);
                    break;
                case '-':
                    return ($a - $b);
                    break;
                case '*':
                    return ($a * $b);
                    break;
                case '*':
                    return ($a * $b);
                    break;
                case '%':
                    return ($a % $b);
                    break;
                default:
                    echo "ERREUR: operation invalide";
                    break;
            }
        }
        $a = 12;
        $b = 30;
        $c = calcule($a, '+', $b);
        echo $c;

    ?>
    
</body>
</html>