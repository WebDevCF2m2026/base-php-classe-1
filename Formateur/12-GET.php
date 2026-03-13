<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>Variable superglobale $_GET</h1>
    <nav>
        <a href="?">Accueil</a>
        <a href="?section=about">A propos</a>
        <a href="?section=portfolio">Mon Portfolio</a>
        <a href="?section=works">Mes Travaux</a>
        <a href="?section=contact">Contactez-moi</a>
        <a href="?section=demo&pg=5&choix[]=service&choix[]=contact">Pourquoi le PHP</a> est tableau... parce que le web l'est depuis longtemps !
    </nav>
    <?php
if(isset($_GET['section'])&&$_GET['section']==="demo"){
    ?>
    <h3>Concaténation avec . pour afficher $_GET['section']</h3>    
<   pre><code>echo "&lt;hr>Section : ". $_GET['section'] . " | Page : ".$_GET['pg']. " | Choix : " .$_GET['choix'][1]."&lt;hr>";</code></pre>
    <?php
    echo "<hr>Section : ". $_GET['section'] . " | Page : ".$_GET['pg']. " | Choix : " .$_GET['choix'][1]."<hr>";
    ?>
     <h3>Concaténation sans . pour afficher $_GET[section] sans ' dans des " (Anciens depuis le début du web). Actuel : Les {} protègent aussi les variables entre ""</h3>    
<pre><code>echo "&lt;hr>Section : $_GET[section]  | Page : $_GET[pg] | Choix : {$_GET['choix'][1]} &lt;hr>";</code></pre>
    <?php
    echo "<hr>Section : $_GET[section]  | Page : $_GET[pg] | Choix : {$_GET['choix'][1]} <hr>";

}


var_dump($_GET);
    ?>
</body>
</html> 