<?php

    session_start() ;  

    // Si fermeture de session, actualiser la page

    if ( isset ($_POST["reset"] ) ){

        session_destroy();

        header("Location: index.php");
    }
    //  Si session ouverte rajouter +1 pour chaque nouvelles sessions

    if ( !isset( $_SESSION['nbvisites'] ) ){

        $_SESSION['nbvisites'] = 0 ;
    }   
    else ( $_SESSION['nbvisites']++ );
?>
     <!-- Affichage du nombre de sessions et bouton reset -->

<p>Nombres de visites <?php echo( $_SESSION['nbvisites'] ); ?></p>
    <form action="#" method="post">
    <input type = "submit" name = "reset" value="reset">
    </form>


