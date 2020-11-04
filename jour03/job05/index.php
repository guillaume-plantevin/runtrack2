<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jour03: job 05</title>
    </head>
    <body>
        <?php
            function strlen2($input_string) {
                $i = 0;
                while (isset($input_string[$i])) {
                    ++$i;
                }
                return $i;
            }

            $dic = [
                "consonnes" => ["b", "B", "c", "C", "d", "D", "f", "F", "g", "G", "h", "H", "j", "J", "k", "K", "l", "L", "m", "M", "n", "N", "p", "P", "q", "Q", "r", "R", "s", "S", "t", "T", "v", "V", "w", "W", "x", "X", "z", "Z"],
                "voyelles" => ["a", "A", "e", "E", "i", "I", "o", "O", "u", "U", "y", "Y"]
            ];
            $str = "On n est pas le meilleur quand on le croit mais quand on le sait";
            $len = strlen2($str);
            $cons = 0;
            $vow = 0;

            for ($i = 0; $i < $len; $i++) {
                if (in_array($str[$i], $dic["consonnes"]))
                    ++$cons;
                if (in_array($str[$i], $dic["voyelles"]))
                    ++$vow;
            }

            echo "<table>";
            echo "<tr><th>Consonnes</th><th>Voyelles</th></tr>";
            echo "<tr><td>" . $cons . "</td>";
            echo "<td>" . $vow . "</td></tr>";
            echo "</table>";
        ?>  
    </body>
</html>