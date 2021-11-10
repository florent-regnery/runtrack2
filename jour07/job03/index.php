<?php

session_start();

if(isset($_POST["reset"])){

    session_destroy();
}

elseif(isset($_POST["prénom"])){

    $_SESSION["prénoms"][] = $_POST["prénom"];

    foreach((array)$_SESSION["prénoms"] as $_SESSION["prénom"]){

        if(isset($_POST["prénom"])){

            echo "$_SESSION[prénom]<br />";
        }
    }

}


?>


<form action="" method="post">
    <input type="text" id="prénom" name='prénom' placeholder="Votre prénom">
    <button name="submit">Valider</button><br>
    <button name="reset" value="reset">Reset</button>
</form>

