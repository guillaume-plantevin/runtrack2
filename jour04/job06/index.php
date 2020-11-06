<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour04: job06</title>
    </head>
    <body>
        <form action = "" method = "get">
                <label for="nombre">Nombre:</label>
                <input type="number" name="nombre" id="nombre">
                <input type = "submit" name="validate" value = "Envoyer">     
            </form>

            <?php
            if (isset($_GET['validate'])) {
                if ($_GET['nombre'] === '0' ) 
                    echo "zero";
                else if ($_GET['nombre'] % 2 == 0 ) 
                    echo "Nombre pair";
                else
                    echo "Nombre impair";
            }
            ?>
        
    </body>
</html>