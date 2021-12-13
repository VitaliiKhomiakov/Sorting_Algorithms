<?php

  $array = [0, 10, 3, 2];

  $arrayLen = count($array);

  for ($i = 0; $i < $arrayLen; ++$i) {
      $min = $i;
      for($j = $i + 1; $j < $arrayLen; ++$j) {
          if ($array[$j] < $array[$min]) {
              $min = $j; 
          }
      }

      if ($min !== $i) {
          $tmp = $array[$i]; 
          $array[$i] = $array[$min];
          $array[$min] = $tmp;      
      }
  }

  var_dump($array);

?>
