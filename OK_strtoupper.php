<?php


function fn_strtoupper ($str){

//création variable temporaire
    $tempStr = "";

    for ($i = 0; $i < strlen($str); $i++) {

        //conversion lettres en code ASCII
        $charCode = ord($str[$i]);

        //Si lettres entre 64 et 91 on retire 32
        if ($charCode > 97 && $charCode < 123) {
            $tempStr = $tempStr . chr($charCode - 32);

            //sinon on affiche le caractère tel quel
        } else {
            $tempStr = $tempStr . $str[$i];
        }
    }
    
    return $tempStr;
}

echo(fn_strToUpper('test'));

?>