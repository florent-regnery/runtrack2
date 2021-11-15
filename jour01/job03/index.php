<?php

$bool = true ; 
$num = 2 ;
$str = " Hello all ";
$a = 1.5 ;

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Infos salles</title>
    </head>

    <body>
    
        <table>
            <thead>

                <tr>
                    
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                    
                </tr>

            </thead>

            <tbody>
                <tr>
                
                    <td>Booléen</td>
                    <td>$bool</td>
                    <td><?php echo $bool ?></td>

                </tr>

                <tr>

                    <td>Entier</td>
                    <td>$num</td>
                    <td><?php echo $num ?></td>

                </tr>

                <tr>
                    <td>Chaine de caractère</td>
                    <td>$str</td>
                    <td><?php echo $str ?></td>

                </tr>

                <tr>
                    
                    <td>Nombres à virgules flottantes </td>
                    <td>$a</td>
                    <td><?php echo $a ?></td>


                </tr>


            </tbody>

        </table>

    </body>
</html>