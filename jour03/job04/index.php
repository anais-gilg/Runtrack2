<?php 
    /* ---------------------------------------Consignes----------------------------------------------
    Créez une variable de type string nommée $str et affectez y le texte :
    “Dans l'espace, personne ne vous entend crier”.
    Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
    dans cette chaîne.
    -------------------------------------------------------------------------------------------------*/

    $str = "Dans l'espace, personne ne vous entend crier";
    $count = 0;

    for($i=0; isset($str[$i]); $i++){   // La variable i va parcourir la variable str
            if ($str[$i]){ 
                $count +=1;
            }
        }
        
    echo $count


    /* En fr ca donne : 

    Pour la 1er ligne
    La variable i à une valeur de 0
    $str represente la chaine de caractère et 
    [i] indique qu'à partir de l'index 0 nous allons parcourir cette chaine jusqu'à la fin
    c'est donc pour cela qu'il est écrit $i++ car on va incrémenter i pour qu'il parcour l'index de chaque caractère de la chaine 
    
    Pour la 2eme ligne
    Si $i en parcourant la variable str trouve un caractère

    Ligne 3
    Alors affiche la variable $count = $count + 1 
    qui veut dire incrémente $count de 1 a chaque caractère trouvé

    Dernière ligne 
    Affiche le résultat final de $count 
    */

?>