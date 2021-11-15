<?php


$str = "On nest pas le meilleur quand on le croit mais quand on le sait.";
$voy = "aeiouy";
$cons = "bcdfghjklmnpqrstvwxz";

        echo '<br><u>Affichage de voyelles </u></br>';

    // compteur de voyelles

    $cpt_voyelle = 0 ;

    for($i = 0; isset($str[$i]) ; $i++){

        // boucle de voyelles


        for($x = 0; isset($voy[$x]) ; $x++){
            
            if( $str[$i] == $voy[$x] ){

            $cpt_voyelle ++ ;
    
             echo $str[$i] ;

            }

        }
    
    }
            echo '<br><u>Affichage de consonnes </u></br>';


        $cpt_consonnes = 0 ;

        // boucle de consonnes

    for($f = 0; isset($str[$f]) ; $f++){


        for($j = 0; isset($cons[$j]); $j++){

            
            if( $str[$f] == $cons[$j] ){

                // compteur de consonnes

            $cpt_consonnes ++ ;
        
            echo $str[$f] ;

            }
        }

    }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>
<body>
<table>
            <thead>


                <tr>
                    
                    <th>Compteur Consonnes</th>
                    <th>Compteur Voyelles</th>
                    
                </tr>

            </thead>

            <tbody>
                <tr>
            
                    <td><?php echo $cpt_voyelle ; ?></td>
                    <td><?php echo $cpt_consonnes ; ?></td>

                </tr>

                <tr>
                   

                </tr>


            </tbody>

        </table>

</body>
</html>