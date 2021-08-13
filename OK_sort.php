<?php

function fn_sort($array){

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
return $array;
}

print_r(fn_sort(array(9, 2, 18, 34, 3, 10, 15)));