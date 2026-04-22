<?php 
$randNumber = mt_rand(-100,200);
function estPair($randNumber){
    if($randNumber%2===0){
        echo "{$randNumber} is odd <br>";
    }
    else{
         echo "{$randNumber} is even  <br>";
    }
    return $randNumber;
}
estPair($randNumber);
