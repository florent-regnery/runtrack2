<?php

    for($x = 0; $x <=6; $x++)

    // tableau

    $i = array(
            200 => "200 est paire",
            204 => "204 est paire",
           173 => "173 est impaire",
           98 => "98 est paire",
           171 => "171 est impaire",
           404 => "404 est paire",
           459 => "459 est impaire",
    );

    //affichage boucle

    foreach($i as $val){
        echo $val.'<br/><br/>';};

        // vérif 
        echo'<pre>';
        print_r($i);
        echo'</pre>';
?>      