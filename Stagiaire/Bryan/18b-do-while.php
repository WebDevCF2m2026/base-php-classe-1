<?php
$page = 1;
$n= mt_rand(1, 10);

echo "Pages : ";
do {
    echo "$page ";
    $page++;
} while ($page <= $n);