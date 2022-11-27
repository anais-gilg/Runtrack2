<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$mysqli = new mysqli($servername, $username, $password, $database);

 
$connection_etudiant = $mysqli -> query ("SELECT * FROM salles ORDER BY capacite ASC");

$resultat = $connection_etudiant -> fetch_all();

echo '<pre>' ; var_dump($resultat) ; echo '</pre>'
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>day 10 - job 10</title>
    </head>

    <body>

        <h1>Base de données - Jour09</h1>

        <style>
            table, tr, th, td {
                padding: 10px;
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style> 

        <table>
            <tbody>                     
                <tr>                    
                    <th>Nom</th>       
                    <th>ID Etage</th>
                    <th>Capacité</th>
                </tr>  

                <?php 
                
                foreach($resultat as $personne){
                    echo 
                    "<tr>                    
                        <td>$personne[1]</td>       
                        <td>$personne[2]</td>
                        <td>$personne[3]</td>
                    </tr>";
                }
                ?>

                
            </tbody>
        </table>
    </body>

</html>