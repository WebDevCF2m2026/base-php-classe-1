<?php 

function calculSimple($a, $operateur, $b) {
    if ($operateur === "+") {
        return $res = ($a + $b);
    }
    elseif ($operateur === "-") {
        return $res = ($a - $b);
    }
    elseif ($operateur === "*") {
        return $res = ($a * $b);
    }
    elseif ($operateur === "/") {
        if ($b == 0)
            return $res = "Division par 0 impossible";
        return $res = ($a / $b); 
    } else {
        return $res = "Erreur système";
    }
   
}

$res = "";
$premiereValeur = 3641;
$operateur = "/";
$deuxiemeValeur = 0;


    $res .= calculSimple($premiereValeur,$operateur,$deuxiemeValeur);
    echo "{$premiereValeur} {$operateur} {$deuxiemeValeur} = {$res}";


?>