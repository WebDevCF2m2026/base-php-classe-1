<?php

function estPair($n) {
    if ($n % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$tests = [2, 5, 10, 13, 18];

foreach ($tests as $nombre) {
    if (estPair($nombre)) {
        echo $nombre . " est pair<br>";
    } else {
        echo $nombre . " est impair<br>";
    }
}

?>