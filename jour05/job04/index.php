<?php


    function calcule($a, $op, $b){

      if ($op == "add"){

        return ($a + $b);
      }

      else if ($op == "mul"){

        return ($a * $b);
      }

      else if ($op == "div"){

        return ($a / $b);

    
      }
    } 

    echo calcule(10, "add" , 20);
    
    
?>