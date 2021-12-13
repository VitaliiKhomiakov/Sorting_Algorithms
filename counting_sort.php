<?php

  $array = [1, 4, 9, 0, 1, 3, 6, 9];

  $min = min($array);
  $max = max($array);
  $countsArray = [];
  
  for($i = $min; $i <= $max; $i++) {
      $count[$i] = 0;
  }

  foreach($array as $number) {
      if (!isset($countsArray[$number])) {
          $countsArray[$number] = 0;
      }
      $countsArray[$number]++; 
  }
  
  $j = 0;

  for($i = $min; $i <= $max; $i++) {
      while(isset($countsArray[$i]) && $countsArray[$i]-- > 0 ) {
        $array[$j++] = $i;
      }
  }
  
  var_dump($array);
  
?>
