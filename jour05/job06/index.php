<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour05: job06</title>
</head>
<body>
    <?php
        function leetspeak($str) {
            $i = 0;
            while (isset($str[$i])) {
                if ($str[$i] === 'a' || $str[$i] === 'A')
                    $str[$i] = '4';
                else if ($str[$i] === 'b' || $str[$i] === 'B')
                    $str[$i] = '8';
                else if ($str[$i] === 'e' || $str[$i] === 'E')
                    $str[$i] = '3';
                else if ($str[$i] === 'g' || $str[$i] === 'G')
                    $str[$i] = '6';
                else if ($str[$i] === 'l' || $str[$i] === 'L')
                    $str[$i] = '1';
                else if ($str[$i] === 's' || $str[$i] === 'S')
                    $str[$i] = '5';
                else if ($str[$i] === 't' || $str[$i] === 'T')
                $str[$i] = '7';
                ++$i;
            }
            return $str;
        }
        $str = "LA BEAUTE EST DANS LES YEUX DE CELUI QUI REGARDE";
        $str2 = "Ces âmes que tu rappelles, Mon coeur, ne reviennent pas. Pourquoi donc s'obstinent-elles, Hélas ! à rester là-bas ?";
        
        echo leetspeak($str2);
    ?>
</body>
</html>