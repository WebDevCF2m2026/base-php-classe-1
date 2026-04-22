<?php 
$totalPages=mt_rand(1,10);
$page = 1;
echo "Pages : ";
do {
    echo "$page ";
    $page++;
} while ($page <= $totalPages);