<?php
$page = 1;
$n = rand(1,10);

echo "Pages : ";
do {
    echo "$page ";
    $page++;
} while ($page <= $n);
