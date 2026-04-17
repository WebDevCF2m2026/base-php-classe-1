<?php
function calculSimple($a,$operateur,$b) {
    if ($operateur === "+") {
        return $res = ($a + $b);
    } elseif ($operateur === "-") {
        return $res = ($a - $b);
    } elseif ($operateur === "*") {
        return $res = ($a * $b);
    } elseif ($operateur === "/") { 
        if ($a == 0 || $b == 0)
            return $res = "Vous ne pouvez pas divisez par 0";
        return $res = ($a / $b); 
    } else {
        return $res = "Il y a un probleme";
    }
}


$res = "";
$premiereValeur = rand(1,10000);
$deuxiemeValeur = rand(1,10000);
$opera = "+";
// if (calculSimple(2,"+",6)) {
    $res .= calculSimple($premiereValeur,$opera,$deuxiemeValeur);
    echo "{$premiereValeur} {$opera} {$deuxiemeValeur} = {$res}";
//}
