<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Créez 21-calculette.php : créez une fonction calculSimple($a, $b, $operateur) qui calcule +, -, *, / selon l'opérateur passé en paramètre. Gérez le cas de la division par zéro.</p>
    <?php
    function soustraction($a,$b) {
        return $a - $b;
    }
    function multiplication($a,$b){
        return $a*$b;
    }
    function division($a,$b){
        return $a/$b;

    }
    function addition($a,$b){
        return $a+$b;
    }
    


    
    
    ?>



    <h2>ou ca ???
    </h2>
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

// Exemples d'utilisation
echo calculSimple(10, 5, '+') . "<br>";
echo calculSimple(10, 5, '-') . "<br>";
echo calculSimple(10, 5, '*') . "<br>";
echo calculSimple(10, 5, '/') . "<br>";
echo calculSimple(10, 0, '/') . "<br>";

?>
</body>
</html>