<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour05: job07</title>
</head>
<body>
    <!-- 
        Créez un formulaire qui contient un input nommé “str” de type text, 
        une liste déroulante (select) nommée “fonction” et un bouton submit. 
        Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” 
        en fonction de l’option choisie dans la liste déroulante. Les choix possibles sont :
        -   “gras” : une fonction qui prend en paramètre “str”. 
            Elle écrit “str” en mettant en gras (<b>) les mots commençant par une lettre majuscule.
        -   “cesar” : une fonction qui prend en paramètre “str” et un nombre “decalage” 
            (qui vaut 2 par défaut). La chaine est affichée en décalant chaque caractère 
            d’un nombre égal à “decalage”.
            ex : si decalage vaut 1, e devient f. Si décalage vaut 3, z devient c.
        -   “plateforme”, une fonction qui prend en paramètre “str”. Elle écrit “str” en ajoutant un “_” aux mots finissant par “me”. 
    -->

    <form action = "" method = "get">
        Ecrivez votre message: <br />
        <input type = "text" name = "txt" value = "Jean">
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


    <form action="" method=""></form>

    <?php
        $input = 's';
        $sec = (int)$input;
        echo $sec;

    ?>
    
</body>
</html>