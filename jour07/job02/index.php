<?php 

$jour = TRUE;   
// La variable peut-être appeler comme argument dans la fonction 
// Mais ne peut pas être appeler à l'intérieur de la fonction (Nuance !)

// Il faut donc créer une varible $jour à l'exterrieur de la fonction
// pour l'utiliser comme argument de la fonction

function bonjour($jour){
    if ($jour == TRUE){
        echo 'Bonjour';
    }
    else{
        echo 'Bonsoir';
    }
}

bonjour($jour)

?>