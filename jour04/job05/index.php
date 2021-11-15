<?php


if( $_POST['username'] == "John" && $_POST['password'] == "Rambo"){ 

    echo "C'est pas ma guerre";

}

else{

    echo "Votre pire cauchemard";
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


      <!-- formulaire -->


    <h1>Formulaire</h1>

    <form method="POST" , action="index.php" >
        <input type="text" name='username' placeholder="Utilisateur">
        <input type="text" name='password' placeholder="Motdepasse">
        <input type="submit" name="" value="Valider">

    </br>
       
    </form>

    <body>

</html>