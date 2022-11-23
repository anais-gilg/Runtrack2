

<!---------------------------------------------------------------------------------------
    Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
    visitée, ajoutez 1. Afficher le contenu de cette variable.
    Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
---------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>day 8 - job 1</title>
    </head>

    <body>
        <header>
            <?php 

                session_start();

                $_SESSION ['nbvisites'];

                if (!isset($_SESSION['nbvisites'])){
                    $_SESSION['nbvisites'] = 0;
                }
                if (isset($_POST['reset'])){
                    $_SESSION['nbvisites'] = 0;
                }
                $_SESSION['nbvisites']++;

                echo 'Vous avez visité ' . $_SESSION['nbvisites'] . ' fois notre site.' ; 

            ?>
        </header>

        <form action="" method="post" id="from" class="bref" >
            <input type="submit" name="reset" value="Reset" id="buton">
        </form>

    </body>

</html>
