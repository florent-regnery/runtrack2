<?php

echo '<br><u>Compteur de Get </u></br>';

    $compteur = 0;
if( $_GET == true ){

// echo $_GET ["prenom"];
// echo $_GET ["nom"];

    // compteur de Get + echo

        $compteur ++;
        echo $compteur;
}

var_dump($_GET);



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
    <form method="GET" , action="index.php" >
        <input type="text" name="prenom" placeholder="Prenom">
        <input type="text" name="nom" placeholder="Nom">
        <input type="submit" name="" value="Valider">

    </br>
       
    </form>

    <body>

</html>