<?php
$temp = mt_rand(-100, 200);

if ($temp <= 0) {
    echo "L'eau est solide à {$temp}°";
} elseif ($temp < 100) {
    echo "L'eau est liquide à {$temp}°";
} else {
    echo "L'est est gazeuse à {$temp}°";
}    