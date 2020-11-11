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
            // les fonctions doivent altérer l'input $str
            
            // Declararion des variables
            $decalage = 2;

            // strlen2, le retour de la copy
            // a virer si non utiliser
            function strlen2($input_string) {
                $i = 0;
                while (isset($input_string[$i])) {
                    ++$i;
                }
                return $i;
            }
            // fonction gras
            function plateforme($str) {
                $dic = [
                    'lower' => ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"],
                    'upper' => ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
                    'ponct' => [' ', ',', '.', '?', '!', ':', ';', '(', ')', '\<', '\>']
                ];
                $bold = ["<b>", "</b>"];
                $st_gras = "<b>";
                $end_gras = "</b>";
                $strArray = explode(' ', $str);
                // foreach 
                // print_r($strArray);
                echo '<br/>';
                // rien ne marche...
                // foreach($strArray as $value) {
                    // if (in_array($value[0], $dic['upper'])) {
                        // $value = $bold[0] . $value . $bold[1];
                        // echo 'ça marche<br>';
                        // $strArray[$value] = "change";
                        // str_replace($value, "<b>", $value);
                    // }
                // }
                $value = str_replace('me', 'me_', $strArray);
                // print_r($strArray);

                $str = implode(' ', $strArray);
                return $str;

            }
            // fonction cesar
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

            if (isset($_GET['submit'])) {
                // print_r ($_GET);
                // echo "<p>En sortie: ";

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
