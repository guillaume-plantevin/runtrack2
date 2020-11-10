
<?php
    $visible = true;
    if (isset($_POST['connexion'])) 
        if (isset($_POST['prenom'])) {
            setcookie('prenom', $_POST['prenom']);
            $visible = false;
        }
    if (!empty($_POST['deconnexion'])) {
        setcookie($_COOKIE['prenom'], null);
        unset($_POST);
        $visible = true;
    }
    // fonctionnement avec un tour de retard, incapable de solutionner le probleme
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour07: job04</title>
    </head>
    <body>
        <?php

            if ($visible):
        ?>
            <form action="" method="POST">
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" value="john">
                <input type="submit" name="connexion" value="connexion">
            </form>
        <?php
            else:
        ?>
                <p>Bonjour, <?php echo $_COOKIE['prenom']?>!</p>
                <form action="" method="POST">
                    <input type="submit" name="deconnexion" value="deconnexion">
                </form>
        <?php endif;?>
        <?php
            var_dump($_COOKIE);
            var_dump($_POST);
        ?>
    </body>
</html>