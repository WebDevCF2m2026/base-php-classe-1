<?php  
        $liste=["soufiane" , "bryan" , "mehdi" , "letitae" , "ines" , "robin" , "raphael" , "yuliia" , "badr" , "michael"] ;
         
    ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17-boucle-foreach.php</title>
</head>
<body>
    <h1>17-boucle-foreach.php</h1>
    <p>Créez 17-boucle-foreach.php : créez un tableau de 10 prénoms et affichez-les dans une liste HTML &lt;ul>&lt;li>.</p>
    
<ul>
<?php foreach ($liste as $prenom): ?>
    <li><?= $prenom ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>