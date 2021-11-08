<?php


$str = "I'm sorry Dave i'm afraid i can't do that";
$voy = "aeiouy";
var_dump($voy);

for($i = 0; isset($str[$i]) ; $i++){

        for($x = 0; isset($voy[$x]) ; $x++){
            
            if( $str[$i] == $voy[$x] )

            echo $str[$i] ;
        }

}


?>