<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 6</title>
    </head>

    <body>
        
        <!------------------------------------------Consignes----------------------------------------------
        Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
        bouton submit.
        Après validation du formulaire :
        ● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
        ● si c’est un nombre impair, afficher “Nombre impair”.
        --------------------------------------------------------------------------------------------------->


        <form>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" ><br>
            <input type="submit" value="Envoyer" id="buton">
        </form>


        <?php 

            
                if ($_GET["nombre"]%2 == 0){ 
                    echo "Nombre pair";
                }
                else {
                    echo "Nombre impair";
                }
            
            
        ?>

    </body>
</html>