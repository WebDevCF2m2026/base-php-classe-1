<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18-boucle-while.php</title>
</head>
<body>
    <p>Créez 18-boucle-while.php : utilisez une boucle while pour afficher les nombres de 1 à 20, en mettant en gras les nombres divisibles par 3.</p>

    <?php
        $i=0
        while($i<=20){
            if ($i%3===0){
                echo "$i";
            }
        $i++;
        }

    ?>
</body>
</html>