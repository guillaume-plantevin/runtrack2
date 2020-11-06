<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour04: job03</title>
</head>
<body>
    <form action = "" method = "post">
        prenom: <br />
        <input type = "text" name = "firstname" value = "Jean">
        <br /><br />
        Nom: <br />
        <input type = "text" name = "lastname" value = "Dupont">
        <br /><br />
        Sujet favori<br />          
        <input type = "checkbox" name = "suj" value = "ALGO">Algorithme
        <input type = "checkbox" name = "suj" value = "HTML">HTML
        <input type = "checkbox" name = "suj" value = "CSS">CSS
        <input type = "checkbox" name = "suj" value = "PHP">PHP
        <br /><br />
        Sexe: <br />
        <input type = "radio" name = "gender" value = "M">Homme
        <input type = "radio" name = "gender" value = "F">Femme
        <br /><br />
        <input type = "submit" name="sm" value = "Envoyer">     
    </form>

    <?php
        if (isset($_POST['sm']))
            echo "<br/> Il y a " . count($_POST) . " arguments.<br /> Et les valeurs ne sont pas stockées dans l'adresse URL.";
    ?>
    
</body>
</html>