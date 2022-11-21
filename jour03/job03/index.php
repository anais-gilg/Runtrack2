<?php 
/* ---------------------------------------Consignes----------------------------------------------
Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
-------------------------------------------------------------------------------------------------*/
$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';

$voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y'];


for($i=0; isset($str[$i]); $i++){ 
    // On utilise la boucle foreach pour parcourir le tableau
    foreach ($voyelles as $value){ 
        if ($value === $str[$i]){ 
            echo $str[$i];
        }
    }
    
}

    /* En fr ca donne : 
    Pour la 1er ligne
    La variable i à une valeur de 0
    $str represente la chaine de caractère et 
    [i] indique d'apartir de l'index 0 nous allons parcourir cette chaine jusqu'à la fin
    c'est donc pour cela qu'il est écrit $i++ car on va incrémenter i pour qu'il parcour l'index de chaque caractère de la chaine 
    
    Pour la 2eme ligne
    On utilise la boucle foreach pour parcourir le tableau
    puis entre parenthèse ont indique les valeurs de la variable tableau 

    Ligne 3
    Si les valeurs du tableau sont identique à la variable str 
    Alors affiche les 
    */


?>