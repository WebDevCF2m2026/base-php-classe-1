<?php
$number = mt_rand(1,10);
switch($number){
    case 1:
    case 2:
    case 3:
    echo "{$number}: Nul, étudie la prochaine fois";
    break;
 case 4:
case 5:
    echo "{$number}: Peut mieux faire";
break;
case 6:
case 7:
    echo "{$number}: Bien";
break;
default:
    echo "{$number}: Très bien";
}