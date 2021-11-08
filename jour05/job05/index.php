<?php 


function occurrences($str, $char){

    for($i = 0 ; isset($str[$i]) ; $i++ ){

        for($x = 0; isset($char[$x]) ; $x++){
            
            if( $str[$i] == $char[$x] )

            echo $str[$i] ;
        }


    }

    
}

occurrences(" hello how are you harry ", "h")


?>