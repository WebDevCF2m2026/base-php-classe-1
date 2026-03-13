<?php

function estPair($n) {
    return $n % 2 === 0;
}

if (estPair(8)) {
    echo "8 est pair <br>";
}

if (estPair(9)) {
    echo "9 est impair <br>";
}
if (estPair(11)) {
    echo "11 est impair <br>";
}
if (estPair(16)) {
    echo "16 est pair <br>";
}
if (estPair(33)) {
    echo "33 est impair <br>";
}

if (estPair(32)) {
    echo "32 est pair <br>";
}