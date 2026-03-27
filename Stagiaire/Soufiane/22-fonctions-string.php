<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22-fonctions-string.php</title>
</head>
<body>
    <h1>22-fonctions-string.php</h1>
    <p>Créez 22-fonctions-string.php : créez une fonction inverserMot($mot) qui retourne le mot à l'envers sans utiliser strrev(). Testez avec "Bonjour" → "ruojnoB".</p>
    <?php

function inverserMot($mot) {
    $vide = "";

    for ($i = strlen($mot) - 1; $i >= 0; $i--) {
        $vide .= $mot[$i];
    }

    return $vide;
}
echo inverserMot("Bonjour");

?>
    
</body>
</html>