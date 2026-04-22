<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu de Navigation</h1>
    
    <ul>
        <li><a href="12-GET.php?section=accueil&page=1">Accueil</a></li>
        <li><a href="12-GET.php?section=services&page=2">Services</a></li>
        <li><a href="12-GET.php?section=portfolio&page=3">Portfolio</a></li>
        <li><a href="12-GET.php?section=contact&page=4">Contact</a></li>
    </ul>


    <h2>Contenu de la variable $_GET :</h2>
    
    <pre>
<?php
    
    var_dump($_GET);
?>
    </pre>
</body>
</html>