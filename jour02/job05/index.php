<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>job 05</title>
    </head>
    <body>
        <?php
            for ($i = 2; $i < 1000; $i++) {
                $prime = true;
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $prime = false;
                    }    
                }
                if ($prime)
                    echo $i ."<br/>";
            }
        ?>
    </body>
</html>