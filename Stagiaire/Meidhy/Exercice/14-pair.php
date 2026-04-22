<?php
$num = mt_rand(1, 20);

if ($num % 2 == 0) {
    echo "Le nombre {$num} est pair.";
} else {
    echo "Le nombre {$num} est impair.";
}