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
            if (($hal[$i] >= "a" && $hal[$i] <= "z") && ($hal[$i] >= "A" && $hal[$i] <= "Z"))
                echo $hal[$i];
        }
    ?>
    
</body>
</html>