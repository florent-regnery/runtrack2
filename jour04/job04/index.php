<?php


if( $_POST == true ){


// echo $_POST ["prenom"];
// echo $_POST ["nom"];

}

var_dump($_POST);


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
        
                    <td><?php echo $_POST ["prenom"]; ?></td>
                    <td><?php echo $_POST ["nom"] ; ?></td>

                </tr>

                <tr>
                   

                </tr>


            </tbody>

        </table>



      <!-- formulaire -->


    <h1>Formulaire</h1>

    <form method="POST" , action="index.php" >
        <input type="text" name="prenom" placeholder="Prenom">
        <input type="text" name="nom" placeholder="Nom">
        <input type="submit" name="" value="Valider">

    </br>
       
    </form>

    <body>

</html>