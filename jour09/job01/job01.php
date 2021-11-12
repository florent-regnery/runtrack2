<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT * FROM etudiants");

$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

// var_dump($etudiants);

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Infos étudiants</title>
    </head>

    <body>
    
        <table>
            <thead>

                <tr>
                    <th>prénom</th>
                    <th>nom</th>
                    <th>naissance</th>
                    <th>sexe</th>
                    <th>email</th>
                </tr>

            </thead>

            <tbody>
                
                <?php
                

                foreach($etudiants as $etudiant) {

                
                echo '<tr><td>' .$etudiant['prenom'].'</td>';
                echo '<td>' .$etudiant['nom'].'</td>';
                echo '<td>' .$etudiant['naissance']. '</td>';
                echo '<td>' .$etudiant['sexe']. '</td>';
                echo '<td>' .$etudiant['email']. '</td></tr>';
                

                }

                ?>

            
            </tbody>

        </table>

    </body>
</html>
