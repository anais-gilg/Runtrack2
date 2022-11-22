<?php 

/*------------------------------------------------------------------
Créez une fonction nommée “occurrences($str, $char)”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.

Exemple : 
Si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
$str sera : 2
----------------------------------------------------------------- */

$str = 'Salut La Plateforme';
$char = 'a';

function occurrences($str, $char){
    $count = 0;
    for($i=0; isset($str[$i]); $i++){ 
        if ($str[$i] == $char){ // Si en parcourant $str un caractère est égale au caractère indiquer dans $char  
            $count +=1; // Alors compte le
        }
    }
    return $count;
}

echo occurrences($str, $char)



?>