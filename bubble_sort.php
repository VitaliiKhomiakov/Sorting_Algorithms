<?php
  $array = [0, 10, 3, 2];

  $arrayLen = count($array);

  for ($i = 0; $i < $arrayLen; ++$i) {
      $nestedArrayLen = $arrayLen - 1;
      for ($j = 1; $j < $nestedArrayLen; ++$j) {
          if ($array[$j] > $array[$j - 1]) {
              $tmp = $array[$j];
              $array[$j] = $array[$j + 1];
              $array[$j + 1] = $tmp;
          }
      }
  }

  var_dump($array);

?>
