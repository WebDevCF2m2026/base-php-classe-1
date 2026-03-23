<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>État de l'eau</h1>
    <?php
$temp = rand(-100, 200);

if ($temp <= 0) {
    echo "L'eau est solide à {$temp}°";
} elseif ($temp < 100) {
    echo "L'eau est liquide à {$temp}°";
} else {
    echo "L'eau est gazeuse à {$temp}°";
}    
    ?>
</body>
</html>
