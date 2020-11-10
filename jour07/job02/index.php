<?php
    if (!isset($_COOKIE['nbvisites'])) 
        $_COOKIE['nbvisites'] = 0;
    $nbvisites = $_COOKIE['nbvisites'] + 1;

    setcookie('nbvisites',$nbvisites);
    
    if (isset($_POST['reset']))
        setcookie('nbvisites', '');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour07: job02</title>
    </head>
    <body>
        <?php
        ?>
        <p>Nombre de visites: <?php echo $nbvisites;?>
        </p>
        <form action="index.php" method="post">
            <input type="submit" name='reset' value="reset">
        </form>
        <?php
            echo '<br />$_COOKIE<br />';
            print_r($_COOKIE);
        ?>
    </body>
</html>
