<?php 
/* ---------------------------------------Consignes----------------------------------------------
Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
-------------------------------------------------------------------------------------------------*/
$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';

$voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y'];

for($i=0; isset($str[$i]); $i++){
    foreach ($voyelles as $value){
        if ($value === $str[$i]){ 
            echo $str[$i];
        }
    }
    
}


?>