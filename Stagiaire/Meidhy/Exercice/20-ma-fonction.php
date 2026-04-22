<?php

$nombre = rand(1,10000);

function estPair($nombre){
    return $nombre % 2 === 0; 
}

if (estPair($nombre)){
    echo "$nombre Le resultat est pair"; 
} else {
    echo "$nombre le resultat est impair";
}