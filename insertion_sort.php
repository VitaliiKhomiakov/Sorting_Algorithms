<?php
  $array = [1, 4, 9, 0, 1, 3, 6];
  $arrayLen = count($array);

  for ($i = 1; $i < $arrayLen; ++$i) {
      $current = $array[$i];
      $j = $i - 1;
      while ($j >= 0 && $array[$j] > $current) {
          $array[$j + 1] = $array[$j];
          --$j;
      }

      $array[$j + 1] = $current;
  }

  var_dump($array);
?>
