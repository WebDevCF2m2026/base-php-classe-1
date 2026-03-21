<?php
function formatPrenom($nom){
    $nom = strtolower($nom);
    $nomReformate = ucfirst($nom);
    return $nomReformate;
}
$prenomFormate = "";
if (isset($_GET['nom'])) {
    $prenomFormate = formatPrenom($_GET["nom"]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23-strings.php</title>
</head>
<body>
    <h1>Exercice 23 strings</h1>
    <h2>Créez 23-strings.php : demandez un prénom via $_GET et affichez-le avec la première lettre en majuscule et le reste en minuscule, même si l'utilisateur tape "jEaN".</h2>
    <form action="23-strings.php" method="GET">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">
    <button type="submit">Envoyer</button>
    <p>Voici votre nom reformater : <?= $prenomFormate ?></p>
</form>
</body>
</html>