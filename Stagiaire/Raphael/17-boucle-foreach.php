<?php
$classe = ['Jean-Claude', 'Jam-Bon', 'Jean-Marc', 'Jean-Jacques', 'Jean-Phillip','Jean-Christophe','Jean-Luc','Jean-Jules','Jean-Pierre','Jean-Louis'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 17 Boucle Foreach</title>
</head>
<body>
    <h1>Exo 17 Boucle Foreach</h1>
        <?php   echo '<ul>';
                    foreach ($classe as $classe) {
                        echo '<li>' . $classe . '</li>';
                    }
                echo '</ul>';
        ?>
</body>
</html>