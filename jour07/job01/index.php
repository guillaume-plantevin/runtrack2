<?php
    // on demarre la session avant d'ecrire du code HTML 
    session_start();

    if (!empty($_POST['reset']))
    session_destroy();

    if (!isset($_SESSION['nbvisites']))
    $_SESSION['nbvisites'] = 1; 
    else
    $_SESSION['nbvisites']++; 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour07: job01</title>
    </head>
    <body>
        <p>Nombre de visites: <?php echo $_SESSION['nbvisites'];?></p>
        <form action="index.php" method="post">
            <input type="submit" name='reset' value="reset">
        </form>
        <?php print_r($_SESSION);?>
    </body>
</html>