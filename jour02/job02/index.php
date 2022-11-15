<?php 

/* ---------------------------------------Consignes----------------------------------------------
Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />).
-------------------------------------------------------------------------------------------------*/

for($i = 0; $i <=1337; $i++)
    if($i != 26 && $i != 37 && $i != 88 && $i != 1111) 
        echo $i. '<br>'


/* Si $i n'est pas égal à 26 et qu'il n'est pas égale à 37 etc... 
   Afficher la suite avec un retour à la ligne */
?>