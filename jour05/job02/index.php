<?php

function bonjour($jour){


    if($jour === true){ 

        echo "bonjour";
    }

    elseif($jour === false){
        echo "bonsoir";
    }

}
    
    bonjour(true);
    bonjour(false);


?>