<?php

function fn_count($arr){

    $i=0;
    while ($arr[$i] != '') {
        $i++;
    }

    return $i;

}

var_dump(fn_count(array('pomme', 'poire', 'banane')));

?>