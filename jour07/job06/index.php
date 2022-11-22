<?php 
    /*------------------------------------------------------------------
    Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
    chaîne de caractères nommée “$str”.
    Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
    qu’elle doit la modifier de sorte à ce que :
    ● les “A” deviennent des “4”,
    ● les “B” des “8”,
    ● les “E” des “3”,
    ● les “G” des “6”,
    ● les “L” des “1”,
    ● les “S” des “5”
    ● les “T” des “7”.
    Cela est valable que l’on crie ou non (majuscules et minuscules).
    ----------------------------------------------------------------- */

    $str = 'Quand les poules auront des dents';

    function leetSpeak($str){

        for($i=0; isset($str[$i]); $i++){ 
            if ($str[$i] == 'A' || $str[$i] == 'a'){ // Si l'index du caractère de str est égal à ... ou ...
                $str[$i] = '4'; // Remplace le par ...
            }
            elseif ($str[$i] == 'B' || $str[$i] == 'b'){
                $str[$i] = '8';
            }
            elseif ($str[$i] == 'E' || $str[$i] == 'e'){
                $str[$i] = '3';
            }
            elseif ($str[$i] == 'G' || $str[$i] == 'g'){
                $str[$i] = '6';
            }
            elseif ($str[$i] == 'L' || $str[$i] == 'l'){
                $str[$i] = '1';
            }
            elseif ($str[$i] == 'S' || $str[$i] == 's'){
                $str[$i] = '5';
            }
            elseif ($str[$i] == 'T' || $str[$i] == 't'){
                $str[$i] = '7';
            }
        }
        return $str;
    }

    echo leetSpeak($str);

?>