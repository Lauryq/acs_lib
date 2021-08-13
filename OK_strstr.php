<?php

//$opt : 'true' ou 'false' 
function fn_strstr ($str, $needle, $opt){

    $result = null;
    // si $opt = true, on affiche ce qu'il y a avant le $needle
    if ($opt == true){

        for($i=0; $i < strlen($str); $i++){
            $result = $result . $str[$i];
            //dès que $i = $needle on arrête la boucle
            if ($str[$i] == $needle){
                // on retire un caractère au résultat obtenu (le $needle)
                $res = substr($result, 0, -1);
                return $res;
            }
        }

    // si $opt = false, on affiche ce qu'il y a après le needle
    } else {

        for($i=0; $i < strlen($str); $i++){

            // converti string en array
            $arr = str_split($str);
            // inverse l'ordre de l'array
            $arrReverse = array_reverse($arr);
            // converti l'array en string
            $strNew = implode($arrReverse);

            for($i=0; $i < strlen($strNew); $i++){
            $result = $result . $strNew[$i];
            //dès que $i = $needle on arrête la boucle
            if ($strNew[$i] == $needle){
                // on retire un caractère au résultat obtenu (le $needle)
                $res = substr($result, 0, -1);
                $arrRes = str_split($res);
                $ResReverse = array_reverse($arrRes);
                $ResFinal = implode($ResReverse);
                return $ResFinal;
            }
        }

        }

    }
    
}

//préciser "true" ou "false" 
echo(fn_strstr('coucou@gmail', '@'));

?>