<?php
function calculSimple($a, $b, $operateur){
  return $operateur($a ,$b);
}
$add=function($a,$b){
    return 'Addition: '."$a + $b = ".$a+$b;
};

$mul=function($a,$b){
    return 'Multiplication: '."$a x $b = ".$a*$b;
};
$dev=function($a,$b){
    if($b===0){
        echo "Exuse me cant devise on 0";
    }
    else{
    return 'Devision: '."$a / $b = ".$a/$b;
    }
};
$sub=function($a,$b){
    return 'Subtraction: '."$a - $b = ".$a-$b;
};

echo calculSimple(5, 10, $add)."<br>";
echo calculSimple(5, 10, $mul)."<br>";
echo calculSimple(7, 0, $dev)."<br>";
echo calculSimple(10,3 , $dev)."<br>";
echo calculSimple(5, 11, $sub)."<br>";
