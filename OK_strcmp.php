<?php

//fonction strcmp
function fn_strcmp ($str1, $str2){

    //si leur taille est identique ...
    if(strlen($str1) == strlen($str2)){
        //et les caractères aussi :
        for($i=0; $i < strlen($str1); $i++){
            for($j=0; $j < strlen($str2); $j++){
                if ($str1[$i] == $str2[$j]){
                    //on affiche 0
                    $result = 0;
        // et qu'un caractère minimum n'est pas identique à l'autre :
                } else if ($str1[$i] !== $str2[$j]){
                    // on affiche 1
                    $result = 1;
                }
            }
        }
    // si les tailles sont différentes, on affiche la différence entre le 1er et le deuxième argument
    } else{
        $result = strlen($str1)-strlen($str2);
    }
    

    return $result;

}

echo(fn_strcmp('bonjour', 'bonJouR'));

?>