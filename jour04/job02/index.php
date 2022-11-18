<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 2</title>
    </head>


    <body>
        
        <!-- ---------------------------------------Consignes----------------------------------------------
        Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
        arguments $_GET et les valeurs associées.
        Il doit y avoir deux colonnes : argument et valeur.
        Tips :
        Pour tester votre code, créez un formulaire html <form> de type GET avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
        --------------------------------------------------------------------------------------------------->

        <form>
            <input type="texte" id="prenom" name="prenom" placeholder="Prénom" required><br>
            <input type="text" id="nom" name="nom" placeholder="Nom" required><br>
            <input type="submit" value="Envoyer" id="buton"><br>
        </form>
        <!-- Si rien est inscrit dans from ca prendra par défaut GET -->

        <!-- tableau -->

        <style>
            table, tr, th {
                padding: 10px;
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style> 

       
            <table>
                <thead>
                                         
                        <tr>                    
                            <th>Argument</th>       
                            <th>Valeur</th>
                        </tr>  
                        
                </thead>
                    
            
    
                <tbody>

                    <?php
                        foreach($_GET as $value => $key){
                            echo "<tr><th>$value</th><th>$key</th></tr>";
                        }
                    
                    ?>

                </tbody>
            </table>

    </body>
    

</html>