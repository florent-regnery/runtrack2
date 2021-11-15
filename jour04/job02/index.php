<?php


if( $_GET == true ){


// echo $_GET ["prenom"];
// echo $_GET ["nom"];
       

}

var_dump($_GET);



?>


        <!-- Tableau Html -->

        
<!DOCTYPE html>
<html>
    <html lang="fr">
    <head> 
        <meta charset="UTF-8">
        <title>Formulaire</title>
    </head>

<body>
        <table>

        <thead>
                <tr>
                    
                    <th>Argument</th>
                    <th>Valeur</th>
                    
                </tr>

            </thead>

            <tbody>
                <tr>
        
                    <td><?php echo $_GET ["prenom"]; ?></td>
                    <td><?php echo $_GET ["nom"] ; ?></td>

                </tr>

                <tr>
                   

                </tr>


            </tbody>

        </table>


      <!-- formulaire -->


    <h1>Formulaire</h1>

    <form method="GET" , action="index.php" >
        <input type="text" name="prenom" placeholder="Prenom">
        <input type="text" name="nom" placeholder="Nom">
        <input type="submit" name="" value="Valider">

    </br>
       
    </form>

    <body>

</html>