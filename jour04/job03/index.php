<?php

echo '<br><u>Compteur de Post </u></br>';

    $compteur = 0;
if( $_POST == true ){

// echo $_POST ["prenom"];
// echo $_POST ["nom"];

    // compteur de POST + echo

        $compteur ++;
        echo $compteur;
}

var_dump($_POST);



?>


        <!-- formulaire -->


<!DOCTYPE html>
<html>
    <html lang="fr">
    <head> 
        <meta charset="UTF-8">
        <title>Formulaire</title>
    </head>
<body>
    <h1>Formulaire</h1>
    <form method="POST" , action="index.php" >
        <input type="text" name="prenom" placeholder="Prenom">
        <input type="text" name="nom" placeholder="Nom">
        <input type="submit" name="" value="Valider">

    </br>
       
    </form>

    <body>

</html>