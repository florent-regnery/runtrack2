<?php

    //  définir les paramètres de sa fonction setcookie ( optionnel/ peut être défini dans les conditions )
    $cookie_name = "nbvisites";
    $cookie_value = 0 ;

    // Si fermeture de cookies, actualiser la page

    if ( isset ($_POST["reset"] ) ){

        setcookie("nbvisites");

        unset($_COOKIE["nbvisites"]);
        
        header("Location: index.php");
    }

    // définir le temps de vie du cookie

    if ( !isset( $_COOKIE['nbvisites'] ) ){

        setcookie( $cookie_name,$cookie_value, time() + ( 3600 )) ;
    }   

    // compter le nombre de cookies
    else{
        
        setcookie( $cookie_name,$_COOKIE['nbvisites'] + 1 ) ;
    }
?>
            <!-- Affichage du nombres de cookies et bouton reset -->

<p>Nombres de cookies <?php echo( $_COOKIE['nbvisites'] ); ?></p>
    <form action="#" method="post">
    <input type = "submit" name = "reset" value="reset">
    </form>