<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
  
<?php     
        //    variables

    $variable[] = 'string';
    $variable[] = 'int';
    $variable[] = 'float';
    $variable[] = 'bool';

    // echo $variable[];

    // string

    $string['type'] = 'Chaîne de caractères';
    $string['nom'] = '\\string\\';
    $string['valeur'] = 'texte..';

    // variables

    $variables['string']['type'] = 'Chaîne de caractères';
    $variables['string']['nom'] = '\\string\\';
    $variables['string']['valeur'] = 'texte..';

    $variables['int']['type'] = 'nombres entiers';
    $variables['int']['nom'] = '\\int\\';
    $variables['int']['valeur'] = '1,2,3..';

    $variables['float']['type'] = 'nombres décimals';
    $variables['float']['nom'] = '\\float\\';
    $variables['float']['valeur'] = '12.3,14.667..';

    $variables['bool']['type'] = 'booléens';
    $variables['bool']['nom'] = '\\bool\\';
    $variables['bool']['valeur'] = 'true/false';

    echo $variables['string']['type']['nom']['valeur'];
    echo $variables['int']['type']['nom']['valeur'];
    echo $variables['float']['type']['nom']['valeur'];
    echo $variables['bool']['type']['nom']['valeur'];

    


?>

</body>
</html>