<?php
$prenom = ['Bryan', 'Ines', 'Laeti', 'Raph', 'Souff', 'Badr', 'Yuliia', 'Robin', 'Meidhy', 'Bruce'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17 - for each</title>
</head>
<body>
<h1>17- boucle- foreach</h1>
<p>La liste for each permets de lister tous les éléments d'un tableau ou d'un object</p>

<ul>
    <?php

foreach ($prenom as $item){
    echo "<li>$item</li>";
}

?>
</ul>

</body>
</html>