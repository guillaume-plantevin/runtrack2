<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour05: job07</title>
        <style>
            * {
                font-size: 1em;
            }
            body>p{
                padding: 1em 3em;
            }
            label {
                display: inline-block;
                width: 200px;
                margin-top: 30px;
            }
            form {
                padding: 1em 2em;
                margin: 2em 3em;
                border: 3px solid black;
            }
            #submitbutton {
                margin-top: 2em;
                font-size: 1.1em;
                background: pink;
                height: 1.5em;
            }
        </style>
    </head>
    <body>
        <form action="" method="GET">
            <label for="input_str">str:</label>
            <input type="text" name="str" id="str"><br>

            <label for="fonction">Fonction choisie:</label>
            <select name=fonction id="fonction">
                <option name="fonction" value="gras">gras</option>
                <option name="fonction" value="cesar">cesar</option>
                <option name="fonction" value="plateforme">plateforme</option>
            </select>

            <br />
            <input type="submit" id="submitbutton" name="submit" value="envoyer">     
        </form>
        <?php
            // Declararion de la variable decalage pour cesar
            $decalage = 2;
            
            // Utilisation d'un pointeur pour alterer l'input $str, peut-etre pas indispensable
            function gras($str) {
                $dic = [
                    'lower' => ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"],
                    'upper' => ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
                    'ponct' => [' ', ',', '.', '?', '!', ':', ';', '(', ')', '\<', '\>']
                ];
                $array = explode(' ', $str);

                foreach ($array as &$value) {

                    if (in_array($value[0], $dic['upper'])) {
                        $value = '<b>' . $value;

                        if (in_array($value[strlen($value) - 1], $dic['ponct'])) {
                            $lastChar = $value[strlen($value) -1];
                            $value = substr_replace($value, '</b>', -1, 4);
                            $value .= $lastChar;
                        }
                        else
                            $value .= '</b>';
                    }
                }
                $str = implode(' ', $array);
                return $str;
            }

            function cesar($str, $decalage) {
                for ($i = 0; isset($str[$i]); ++$i) {
                    $var = ord($str[$i]);
                    // majuscule
                    if (ord($str[$i]) >= ord('A') && ord($str[$i]) <= ord('Z')) {
                        $var = (((($var - ord('A')) + $decalage) % 26) + ord('A'));
                        $var = chr($var);
                        $str[$i] = $var;
                    }
                    // minuscule
                    else if (ord($str[$i]) >= ord('a') && ord($str[$i]) <= ord('z')) {
                        $var = (((($var - ord('a')) + $decalage) % 26) + ord('a'));
                        $var = chr($var);
                        $str[$i] = $var;
                    }
                }
                return $str;
            }
            function plateforme(&$str) {
                $dic = [
                    'lower' => ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"],
                    'upper' => ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
                    'ponct' => [' ', ',', '.', '?', '!', ':', ';', '(', ')', '\<', '\>']
                ];
                for ($i = 0; isset($str[$i]); ++$i) {
                    if (in_array($str[$i], $dic['ponct'])) {
                        if ($str[$i - 1]  == 'e' && $str[$i - 2] == 'm')
                            $str = substr_replace($str, '_', $i, 0);
                    }
                }
                return $str;
            }

            if (isset($_GET['submit'])) {
                if ($_GET['fonction'] == 'gras')
                    echo gras($_GET['str']);
                else if ($_GET['fonction'] == 'cesar')
                    echo cesar($_GET['str'], $decalage);
                else if ($_GET['fonction'] == 'plateforme')
                    echo plateforme($_GET['str']);
            }
        ?>
    </body>
</html>
