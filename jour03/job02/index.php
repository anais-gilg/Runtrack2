<?php 
    /* ---------------------------------------Consignes----------------------------------------------
    Créez une variable de type string nommée $str et affectez y le texte :
    “Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
    Parcourir cette chaîne en affichant seulement un caractère sur deux.
    -------------------------------------------------------------------------------------------------*/

    $str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
        /* 01234 5 678 etc...
        Chaque caractère y compris les espaces ont un index 
        Donc il faut simplement préciser à php que nous voulons parcourir cette chaine de caractère
        et suprimer une lettre sur deux donc que voulons suprimer (pourquoi pas) les lettres qui ont un index impaire. */

    for ($i=0; isset($str[$i]); $i++){  
        if ($i%2 == 0){ 
            echo $str[$i];
        }
    }

    /* En fr ca donne : 
    Pour la 1er ligne
    La variable i à une valeur de 0
    $str represente la chaine de caractère et 
    [i] indique d'apartir de l'index 0 nous allons parcourir cette chaine jusqu'à la fin
    c'est donc pour cela qu'il est écrit $i++ car on va incrémenter i pour qu'il parcour l'index de chaque caractère de la chaine 
    
    Pour la 2eme ligne
    Si l'index de i est un multiple de 2 modulo 0 

    Ligne 3
    Alors affiche que les caractères avec un index pair
    */


?>