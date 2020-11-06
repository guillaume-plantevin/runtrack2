<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job05</title>
    </head>
    <body>
        <form action = "" method = "post">
                <label for="username">Nom:</label>
                <input type = "text" name="username" value = "John">
                <label for="password">password:</label>
                <input type="password" name="password" id="password">
                <input type = "submit" name="validate" value = "Envoyer">     
            </form>

            <?php
            if (isset($_POST['validate'])) {
                if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo') 
                    echo "C'est pas ma guerre";
                else
                    echo "Votre pire cauchemar";
            }
            ?>
    </body>
</html>