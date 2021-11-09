<?php $str = "KEBab";

function leetspeak($str) {
  
  $array_leetspeak = array ("A" => 4, "a" => 4, "B" => 8, "b" => 8, "E" => 3, "e" => 3, "G" => 6, "g" => 6, "L" => 1, "l" => 1, "S" => 5, "s" => 5, "T" => 7, "t" => 7);
  
  for ($x = 0; $str[$x]; $x++) {
    if (isset($array_leetspeak[$str[$x]])) {
      
    $str[$x] = $array_leetspeak[$str[$x]];
      }
    
  }
  
  return $str;
  
}

echo leetspeak($str);

?>