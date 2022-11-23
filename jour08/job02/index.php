
<!---------------------------------------------------------------------------------------
    Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
    Afficher le contenu du cookie.
    Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
---------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>day 8 - job 2</title>
    </head>

    <body>
        <header>
            <?php 

                setcookie('nbvisites', '0', time()+365 * 60 * 60);

                //---------For the buton-------------// 
                if (isset($_POST['reset'])){
                    $_COOKIE['nbvisites'] = 0;
                }
                //-----------------------------------//
                
                if (isset($_COOKIE['nbvisites'])) {
                    setCookie('nbvisites', $_COOKIE['nbvisites'] +1 );
                }

                echo 'Vous avez visité ' . $_COOKIE['nbvisites'] . ' fois notre site.' ;
                
            ?>
        </header>

        <form action="" method="post" id="from" class="bref" >
            <input type="submit" name="reset" value="Reset" id="buton">
        </form>

    </body>

</html>