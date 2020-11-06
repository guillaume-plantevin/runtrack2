<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour05: job05</title>
    </head>
    <body>
        <?php
            function occurrences($str, $char) {
                $i = $count = 0;
                // $count = 0;
                while (isset($str[$i])) {
                    if ($str[$i] === $char)
                        ++$count;
                    ++$i;
                }
                return $count;
            }
            $string = " Il pleure dans mon coeur comme il pleut sur la ville";
            $key = 'e';
            $howmuch = occurrences($string, $key);
            echo $key . " = " . $howmuch;
        ?>
    </body>
</html>