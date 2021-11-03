<?php
for ( $var = 1 ; $var <=100 ; $var++ )

if ( $var%3 && $var%5){
    echo "FizzBuzz". '<br>' ;
}

elseif ( $var%3) {

    echo " Buzz ". '<br>' ;
}

elseif ( $var%5 ) {
   
    echo " Fizz" . '<br>' ; 

}

else {
    echo $var . '<br>' ;
}



?>