<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 5</title>
    </head>

    <body>
        
        <!------------------------------------------Consignes----------------------------------------------
        Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
        ayant deux champs <input> nommés username et password.
        Après validation du formulaire :
        ● si le username est “John” ET le password est “Rambo” afficher :
          “C’est pas ma guerre”
        ● sinon afficher : “Votre pire cauchemar”.
        --------------------------------------------------------------------------------------------------->


        <form action="" method="POST" id="from" class="bref" >
            <input type="text" id="username" name="username" placeholder="Prénom" ><br>
            <input type="text" id="password" name="password" placeholder="Mot de passe" ><br>
            <input type="submit" value="Envoyer" id="buton">
        </form>


        <?php 
           // On utilise POST à la place de GET car on ne veut pas afficher les informations de l'utilisateur dans l'url.


                // Préciser à $_POST la case qu'on souhaite invoquer 
                // Exemple ici On précise que $_POST doit vérifier que l'id username est égale à John et que l'id password est égal à Rambo
                // Si c'est le cas afficher ca sinon affiche ceci
                if ($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
                    echo "C’est pas ma guerre";
                }
                else
                    echo "Votre pire cauchemar";
                
                
            


        ?>

    </body>
</html>