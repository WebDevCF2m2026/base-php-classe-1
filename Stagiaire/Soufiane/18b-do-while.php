<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18b-do-while.php</title>
</head>
<body>
    <h1>18b-do-while.php</h1>
    <?php
$page = 1;
$totalPages = random_int(0,200)


do {
    echo "$page ";
    $page++;
} while ($page <= $totalPages);

    
</body>
</html>