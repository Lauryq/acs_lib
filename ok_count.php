<?php

function fn_count($arr){

    $i=0;
    while ($arr[$i] != '') {
        $i++;
    }

    return $i;

}

echo(fn_count(array('pomme', 'poire', 'banane')));

?>