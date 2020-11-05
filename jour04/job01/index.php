<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job01</title>
        <style>
            fieldset {
                font-size: 1.3em;
                border: 4px solid black;
            }
            p {
                text-align: center;
            }
            fieldset input {
                height: 2em;
                margin-top: 2em;
            }
            label {
                display: inline-block;
                width: 200px;
            }
            fieldset {
                margin: 5% auto;
                width: 50%;
            }
            #sub{
                border-radius: 15px;
                margin-top: 1em;
                font-size: .7em;
                height: 2.5em;
                background: pink;
            }
        </style>
    </head>
    <body>
        <form action="index.php" method="get">
            <fieldset>
            <legend>Formulaire GET</legend>
            <label for="name">Nom:</label>
            <input type="text" name="name"><br>
            <label for="email">Email:</label>
            <input type="text" name="email"><br>
            <input id= "sub" type="submit">
            </fieldset>
        </form>
        <?php
        $arr = ["bonjour", "au revoir", "salut"];
        $int = sizeof($arr);
            var_dump($arr);
            echo "<br> nombre d'entrée de \$int: " . $int . "<br />";
            // foreach ()
            // echo "<p> your name is " . 
            // echo "<p> your email is " . $_GET["email"] . "</p>";
        ?>
        
    </body>
</html>