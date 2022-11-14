<?php
$str = "Chaine de caractère";
$bool = true;
$int = 777;
$float = 21.7;
$primi = "Primitif";

echo "      <!-- pour afficher le tableau html -->
    <table>
        <tbody>                     <!-- <tbody> pour le corps du tableau -->
            <tr>                    <!-- <tr> pour définit une ligne de cellules dans un tableau -->
                <th>Type</th>       <!-- <th> pour les cellules d'en-têtes -->
                <th>Nom</th>
                <th>Valeur</th>
            </tr>  

            <tr>                    
                <td>$primi</td>            <!--Cellule 1 de la Colonne 1 - <td> pour les données des cellules -->
                <td>string</td>            <!--Cellule 2 de la Colonne 1-->
                <td>$str</td>              <!--Cellule 3 de la Colonne 1-->
            </tr>     


            <tr>
                <td>$primi</td>             <!--Cellule 1 de la Colonne 2-->
                <td>boolean</td>            <!--Cellule 2 de la Colonne 2-->
                <td>$bool</td>              <!--Cellule 3 de la Colonne 2-->
            </tr>


            <tr>
                <td>$primi</td>             <!--Cellule 1 de la Colonne 3-->
                <td>nombre entier</td>      <!--Cellule 2 de la Colonne 3-->
                <td>$int</td>               <!--Cellule 3 de la Colonne 3-->
            </tr>

            <tr>
                <td>$primi</td>             <!--Cellule 1 de la Colonne 4-->
                <td>nombre à virgule</td>   <!--Cellule 2 de la Colonne 4-->
                <td>$float</td>             <!--Cellule 3 de la Colonne 4-->
            </tr>
        </tbody>
    </table>
"

?>