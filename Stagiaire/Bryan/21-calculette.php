<?php

function calculSimple($a, $b, $operateur) {

    switch ($operateur) {

        case '+':
            return $a + $b;

        case '-':
            return $a - $b;

        case '*':
            return $a * $b;

        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;

        default:
            return "Opérateur invalide";
    }
}

echo "10 + 5 = " . calculSimple(10, 5, '+') . "<br>";
echo "10 - 5 = " . calculSimple(10, 5, '-') . "<br>";
echo "10 * 5 = " . calculSimple(10, 5, '*') . "<br>";
echo "10 / 5 = " . calculSimple(10, 5, '/') . "<br>";
echo "10 / 0 = " . calculSimple(10, 0, '/') . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
