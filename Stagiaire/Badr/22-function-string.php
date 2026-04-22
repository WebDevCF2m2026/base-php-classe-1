<?php 
function inverserMot($mot){
    $str=" ";
    for($lettre=strlen($mot)-1;$lettre>=0;$lettre--){
        $str.=$mot[$lettre];
    }
    return $str;
}
echo inverserMot("Hello")."<br>";
echo inverserMot("Bonjour")."<br>";
