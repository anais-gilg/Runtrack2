<?php 

/* ---------------------------------------Consignes----------------------------------------------
Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre
chaque nombre (<br />).
Le nombre 42 doit être en gras et souligné (<b><u>...).
-------------------------------------------------------------------------------------------------*/

$i=0;

for($i=0; $i<=1337; $i++){
    if ($i == 42){
        echo '<b><u>' .$i. '</b></u><br>'; // mettre des points autour de la variable comme effet point de colle 
    }
    else{
        echo $i. '<br>';
    }
}




?>