<?php
function inverserMot($mot){
    $motInverser = "";
        for ($i=0;$i<strlen($mot);$i++){
            $motInverser = $mot[$i] . $motInverser;
        }   
    return $motInverser;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22-fonctions-string.php</title>
</head>
<body>
    <h1>Exercice 22 Fonctions-string</h1>
    <h2>Créez 22-fonctions-string.php : créez une fonction inverserMot($mot) qui retourne le mot à l'envers sans utiliser strrev(). Testez avec "Bonjour" → "ruojnoB".</h2>
    <h3>Voici "Bonjour" inversé par ma fonction : <?=inverserMot("Bonjour")?> .</h3>
</body>
</html>