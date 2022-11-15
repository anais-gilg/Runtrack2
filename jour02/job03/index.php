<?php 
/* ---------------------------------------Consignes----------------------------------------------
Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre (<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), 
Si le nombre est compris entre 25 et 50 : souligner.
Afficher “La Plateforme_” à la place de 42.
-------------------------------------------------------------------------------------------------*/

for($i=0; $i<=100; $i++){
    if ($i <= 20){
        echo '<i>' .$i. '</i><br>'; // mettre des points autour de la variable comme effet point de colle 
    }
    else if ($i == 42){
        echo 'La Plateforme_<br>';
    }
    else if ($i >= 25 && $i <=50){ // si $i est supérieur ou égal à 25 ET qu'il est inférrieur à 50 
        echo '<u>' .$i. '</u><br>'; 
    }
    else{
        echo $i. '<br>';
    }
}




?>