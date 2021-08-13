<?php

function fn_strlen ($str){

  $i=0;
  while ($str[$i] != '') {
    $i++;
  }

  return $i;

}

echo(fn_strLen('coucou tu'))

?>
