<?php

function fn_array_diff ($array1, $array2){

    $result = [];
    for($i=0; $i < count($array1); $i++){
        for($j=0; $j < count($array2); $j++){
            if($array1[$i] == $array2[$j]){
                array_push($result, $array1[$i]);
            } else {
                $test = $array1[$i];
            }
        }
        
    }
    // return $result;
    return $test;
    
}

$array1 = array("green", "red", "blue", "red");
$array2 = array("green", "yellow", "red");
print_r(fn_array_diff($array1, $array2));
?>