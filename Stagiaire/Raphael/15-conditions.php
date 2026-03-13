<?php
$randNumber = mt_rand(0, 10);
if ($randNumber <= 3) {
    echo "{$randNumber} : Nul, étudie la prochaine fois";
} elseif ($randNumber <= 5) {
    echo "{$randNumber} : Peut mieux faire";
} elseif ($randNumber <= 7) {
    echo "{$randNumber} : Bien";
} else {
    echo "{$randNumber} : Très bien";
}