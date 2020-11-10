<?php
    session_start();
    if (!empty($_POST['reset']))
        session_destroy();
    if (isset($_POST['prenom']))
        $_SESSION['utilisateur'] = $_POST['prenom'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
    <style>
        label {
            display: inline-block;
            width: 10%;
            margin-bottom: 1em;
        }
        #submitb {
            margin-top: 1.5em;
            /* margin-left: 15%; */
        }
        #resetb {
            margin: 2em 0;
        }
    </style>
</head>
<body>
    <p>Remplir le formulaire pour vous connecter:</p>
    <form action="" method="POST">
        <label for="prenom">Prenom:</label>
        <input type="text" name='prenom' id="prenom" placeholder="Sarah"><br />
        <label for='submitb'>Envoyer:</label>
        <input type="submit" name='valider' id="submitb" value="valider"><br>
        <input type="submit" name='reset' id='resetb' value="reset">
    </form>
    <?php print_r($_SESSION);?> 
</body>
</html>
