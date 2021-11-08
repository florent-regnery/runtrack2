
  
<?php     
   

    // variables

    $variables['string']['type'] = 'Chaîne de caractères';
    $variables['string']['nom'] = 'string';
    $variables['string']['valeur'] = 'texte..';

    $variables['int']['type'] = 'nombres entiers';
    $variables['int']['nom'] = 'int';
    $variables['int']['valeur'] = '1,2,3..';

    $variables['float']['type'] = 'nombres décimals';
    $variables['float']['nom'] = 'float';
    $variables['float']['valeur'] = '12.3,14.667..';

    $variables['bool']['type'] = 'booléens';
    $variables['bool']['nom'] = 'bool';
    $variables['bool']['valeur'] = 'true/false';

    
    // echo $variables['string']['type']['nom']['valeur'];
    // echo $variables['int']['type']['nom']['valeur'];
    // echo $variables['float']['type']['nom']['valeur'];
    // echo $variables['bool']['type']['nom']['valeur'];

    var_dump($variables);
    


?>
