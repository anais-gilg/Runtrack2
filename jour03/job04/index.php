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

?>