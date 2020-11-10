<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour05: job07</title>
    <style>
        label {
            display: inline-block;
            width: 200px;
            margin-top: 30px;
        }
        input {
            background: pink;
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
            <option name="fonction" value="caesar">cesar</option>
            <option name="fonction" value="plateforme">plateforme</option>
        </select>

        <br />
        <input type="submit" name="submit" value="envoyer">     
    </form>
    <?php
        // strlen2, le retour de la copy
        function strlen2($input_string) {
            $i = 0;
            while (isset($input_string[$i])) {
                ++$i;
            }
            return $i;
        }
        // protoype fonction gras2
        function gras2($str) {
            $dic = [
                'lower' => ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"],
                'upper' => ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
                'ponct' => [' ', ',', '.', '?', '!', ':', ';', '(', ')', '\<', '\>']
            ];
            $st_gras = "<b>";
            $end_gras = "</b>";
            $copy = $str;

            for ($i = 0; isset($str[$i]); ++$i) {
                // echo $str[$i] . "<br>";
                // if (in_array($str[$i], $dic['ponct'])) {
                //     $str[$i] = '&nbsp';
                //     echo $str[$i] . ': inside ponct<br>';
                // }
                if (in_array($str[$i], $dic['upper'])) {
                    while ()
                }

                else
                   echo $str[$i] . "<br>";

                // if (in_array($str[$i], $maj) && $insideW)  {
                //     while (!in_array($str[$i], $ponct))


                    
                    
                //     echo $str[$i] . ': je suis une majuscule<br>';
                // }
                // else
                //     $str_copy[$i] = $str[$i]
               
            }
            
        }
        // fonction gras
        function gras($str) {
            $dic = [
                'lower' => ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"],
                'upper' => ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
                'ponct' => [' ', ',', '.', '?', '!', ':', ';', '(', ')', '\<', '\>']
            ];
            $st_gras = "<b>";
            $end_gras = "</b>";
            $str_copy = $str;
            $insideW = true;

            for ($i = 0; isset($str[$i]); ++$i) {
                // echo $str[$i] . "<br>";
                if (in_array($str[$i], $dic['ponct'])) {
                    $insideW = false;
                    $str[$i] = '&nbsp';
                    echo $str[$i] . ': inside ponct<br>';
                }
                else if (in_array($str[$i], $dic['upper'])) {
                    echo $str[$i] . ": je suis une majuscule<br>";
                }

                else
                   echo $str[$i] . "<br>";

                // if (in_array($str[$i], $maj) && $insideW)  {
                //     while (!in_array($str[$i], $ponct))


                    
                    
                //     echo $str[$i] . ': je suis une majuscule<br>';
                // }
                // else
                //     $str_copy[$i] = $str[$i]
               
            }
            echo $str;
        }
        // fonction caesar



        if (isset($_GET['submit'])) {
            print_r ($_GET);
            echo "<br /> Output: <br />";

            if ($_GET['fonction'] =='gras')
                echo gras2($_GET['str']);
            // else if ($_POST['fonction'] =='caesar')
            //     echo "<br /> fonction cesar";
            // else if ($_POST['fonction'] =='plateforme')
            //     echo "<br /> fonction plateforme";
        }
        

    ?>
</body>
</html>