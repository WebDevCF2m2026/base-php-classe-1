<?php
$randNumber = mt_rand(1, 20);

if ($randNumber %2 == 0) {
    echo "Le nombre {$randNumber} est pair";
} else {
    echo "Le nombre {$randNumber} est impair";
}