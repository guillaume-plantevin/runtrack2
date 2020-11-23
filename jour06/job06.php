<?php
    $styleChoisi = null;

    if (isset($_GET['stylechoice'])) {
        if ($_GET['stylechoice'] === '')
            $styleChoisi = 'sans style';
        elseif ($_GET['stylechoice'] === 'style1')
            $styleChoisi = 'style 01';
        elseif ($_GET['stylechoice'] === 'style2')
            $styleChoisi = 'style 02';
        else
            $styleChoisi = 'style 03';
    }
?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <link rel="stylesheet" href="styles/<?php echo($_GET['stylechoice']);?>.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jour06: job06</title>
    </head>
    <body>
        <header>
            <h1>Jour06: job06</h1>
            <h3>...Avoir le choix...</h3>
        </header>
        <main>
            <section id="introSection">
                <h2>...du CSS par formulaire</h2>
                <p>
                    Actuellement, vous utiliser le style: <span class="choice"><?php echo $styleChoisi?></span>
                </p>
                <p>
                    Le formulaire suivant vous permet d'avoir le choix entre trois styles distincts.<br />
                    Chacun aura une influence sur les choix esthétiques et de positionnements.<br />
                    Si vous souhaitez revenir au style <em>brut</em>, vous pouvez choisir l'option <em>sans style</em>.
                </p>
            </section>

            <hr>

            <section id="formSection">
                <!-- choix du GET, car il n'y a aucune donnée sensible -->
                <form action="" method="GET">
                    <label for="style">Choississez votre style dans le menu:</label><br />
                    <select name="stylechoice" id="style">
                        <option value="">choix du style</option>
                        <option value="">sans style</option>
                        <option value="style1">Style 01</option>
                        <option value="style2">Style 02</option>
                        <option value="style3">Style 03</option>
                    </select>
                    <input type="submit" value="Valider">
                </form>
            </section>

            <hr>

        </main>
        <footer>
            <p>
                Guillaume Plantevin, Coding School 2020 @ LaPlateforme_
            </p>
        </footer>
    </body>
</html>
<!-- ca marche tres bien, suffit juste de faire un theme en consequence. Cette apres-midi par exemple -->