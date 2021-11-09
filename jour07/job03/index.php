<?php

    session_start();

    // Si fermeture de session, actualiser la page

    if(isset($_POST["reset"])){

        session_destroy();

        header("Location: index.php");
    }
        // Definir session en post

    elseif(isset($_POST["prenom"])){

        $_SESSION["prenoms"] = $_POST["prénom"];

        // parcours du tableau

    foreach((array)$_SESSION["prenoms"] as $_SESSION["prenom"]){

        if(isset($_POST["prenom"])){

            // affichage

            echo "$_SESSION[prenom]<br />";
        }
    }

}


?>
        <!-- formulaire + boutons -->

<form action="#" method="post">
    <input type="text" name='prenom' value="prenom">
    <button name="submit">Valider</button><br>
    <button name="reset" value="reset">Reset</button>
</form>

