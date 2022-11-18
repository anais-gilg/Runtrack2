<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 3</title>
    </head>

    <body>
        
        <!------------------------------------------Consignes----------------------------------------------
        Développez un algorithme qui affiche le nombre d’arguments $_POST.
        Tips :
        Pour tester votre code, créez un formulaire html <form> de type POST avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
        Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
        “Le nombre d’argument POST envoyé est : “
        --------------------------------------------------------------------------------------------------->


        <form action="" method="POST" id="from" class="bref" >
            <input type="texte" id="prenom" name="prenom" placeholder="Prénom" ><br>
            <input type="text" id="nom" name="nom" placeholder="Nom" ><br>
            <input type="submit" value="Envoyer" id="buton">
        </form>


        <?php 
           

            $count = 0;

            foreach($_POST as $key => $value){
                if ($value){
                    $count += 1;
                    echo "$key is $value";
                }
                
            }
            echo "Le nombre d’argument POST envoyé est : $count";
        ?>

    </body>
</html>