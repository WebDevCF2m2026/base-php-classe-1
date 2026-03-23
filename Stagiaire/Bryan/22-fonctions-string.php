<?php

function inverserMot($mot) {
    $motInverse = "";
    
    for ($i = strlen($mot) - 1; $i >= 0; $i--) {
        $motInverse .= $mot[$i];
    }

    return $motInverse;
}

// Test
$mot = "Bonjour";
echo inverserMot($mot);

?>