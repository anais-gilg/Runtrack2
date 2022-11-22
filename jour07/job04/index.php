<?php 

/*------------------------------------------------------------------
Créez une fonction nommée “calcule()” qui prend 3 paramètres :

● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération (+, -, *, /, %),
● le troisième, “$b”, est un nombre.

La fonction doit retourner le résultat de l’opération.
----------------------------------------------------------------- */

// On donne une valeur au variable que nous allons utiliser comme argument dans la fonction
$a = 7;
$operation = '+';
$b = 3;

function calcule($a, $operation, $b){
    switch ($operation){     
        case "+" :             // Dans le cas où $oprération est égal à ...
            $cal = $a + $b;    // Création de la variable $cal avec comme valeur l'opération $a ... $b
            break;             // On ajoute break car sa fait parti de la syntaxe switch case
        case "-" :
            $cal = $a - $b;
            break; 
        case "*" :
            $cal = $a * $b;
            break; 
        case "/" :
            $cal = $a / $b;
            break; 
    }

    return $cal; 

}

echo calcule($a, $operation, $b);
// Suivant la valeur attribuée à $opération le résultat sera différent 





?>