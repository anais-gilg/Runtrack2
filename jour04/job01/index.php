<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form>
    <h1>Contactez Nous </h1><br>
    <input type="texte" id="prenom" name="prenom" placeholder="Prénom" required><br>
    <input type="text" id="nom" name="nom" placeholder="Nom" required><br>
    <input type="email" id="email" name="email" placeholder="E-mail" required><br>
    <input type="submit" value="Envoyer" id="buton">
</form>

<!-- ---------------------------------------Consignes----------------------------------------------
Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “
--------------------------------------------------------------------------------------------------->


<?php 
echo var_dump($_GET);

$count = 0;

foreach($_GET as $key => $value){
    if ($value){
        $count += 1;
        echo "<p>$key is $value</p>";
    }
    
};

echo "Le nombre d’argument GET envoyé est : $count"





?>

</body>
</html>

