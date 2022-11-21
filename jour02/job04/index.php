<?php 

/* ---------------------------------------Consignes----------------------------------------------
Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
(“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
● Si le nombre est un multiple de 3, affichez “Fizz”.
● Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.
-------------------------------------------------------------------------------------------------*/

for($i=0; $i<=100; $i++){
    if ($i%3 == 0 && $i%5 == 0){ // Si i est un multiple de 3 et de 5 remplace le nombre par FizzBuzz
        echo 'FizzBuzz<br>';  
    }
    else if ($i%3 == 0){ // Sinon Si i est un multiple de 3 remplace le nombre par Fizz
        echo 'Fizz<br>';
    }
    else if ($i%5 == 0){  // Sinon Si i est un multiple de 5 remplace le nombre par Buzz
        echo 'Buzz<br>'; 
    }
    else{
        echo $i. '<br>'; // Et sinon, si ce n'est ni un multiple de 3 ou de 5 et bien tu affiche le nombre
    }
}


// Ne pas oublier de toujours mettre un ; a la fin de chque phrase
?>