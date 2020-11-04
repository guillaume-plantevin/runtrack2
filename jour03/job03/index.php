<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03: job 03</title>
</head>
<body>
    <?php
        $hal = "I'm sorry Dave I'm afraid I can't do that";
        $str_len = strlen($hal);
        echo $str_len . "<br />";

        for ($i = 0; $i < $str_len; ++$i) {
            switch($hal[$i]) {
                case "a":
                case "e":
                case "i":
                case "o":
                case "u":
                case "A":
                case "E":
                case "I":
                case "O":
                case "U":
                    echo $hal[$i];
                    break;
                default:
                break;
            }
        }
    ?>
    
</body>
</html>