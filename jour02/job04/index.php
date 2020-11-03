<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job 04</title>
</head>
<body>
    <?php
        for ($num = 1; $num <= 100; $num++) {
            if ($num % 3 == 0)
                if ($num % 5 == 0)
                    echo "FizzBuzz";
                else
                    echo "Fizz";
            else if ($num % 5 == 0)
                echo "Buzz";
            else
                echo $num;
            echo "<br />";
        }
    ?>
</body>
</html>