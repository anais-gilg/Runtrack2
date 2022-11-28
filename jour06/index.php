<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="<?php if (isset($_POST['style'])){echo $_POST['style'];} ?>"> <!-- on ajoute la balise php dans le href pour invoquer la fiche css lié au choix de l'utilisateur -->
        <title>jour6 - job5</title>
    </head>



    <body>


            <form action="" method="post" id="from" class="bref">
                <select name="style" id="style">
                    <option value="style1.css">Style 1</option>
                    <option value="style2.css">Style 2</option>
                    <option value="style3.css">Style 3</option>
                </select>
                <input type="submit" value="Envoyer" id="buton">
            </form>


    </body>

</html>