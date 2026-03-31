<?php
$chiffreA=[""];
$chiffreb=[""];
$operateur=[""];
$messageResultat="";
if(isset($_POST["chiffreA"],$_POST["chiffreB"],$_POST["operateur"])){
    $chiffreA = $_POST["chiffreA"];
    $chiffreB = $_POST["chiffreB"];
    $operateur = $_POST["operateur"];
     if (empty($chiffreA) || empty($chiffreB)) {
         $messageResultat = "Erreur : tous les champs doivent être remplis.";
     }else {
         $messageResultat = "Merci Voici le le résultat :  ".calculSimple($chiffreA,$chiffreB,$operateur);
     }
 }
$chiffreA = intval($chiffreA);
$chiffreB = intval($chiffreb);
function calculSimple($a, $b, $operateur) {
    switch ($operateur) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;
        default:
            return "Opérateur invalide";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25 calculatrice</title>
</head>
<body>
    <h1>Exercice 25 calculatrice</h1>
    <p>Créez 25-calculatrice.php : un formulaire avec deux champs numériques et un select pour l'opération (+, -, *, /). Traitez le calcul en PHP et affichez le résultat.</p>
    <form action="25-calculatrice.php" method="post">
        <label for="chiffreA"></label>
        <input type="number" id="chiffreA" name="chiffreA">
        <select name="operateur" id="operateur">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <label for="champB"></label>
        <input type="number" id="chiffreB" name="chiffreB"> 
        <button type="submit">=</button>
    </form>
    <p><?= $messageResultat?></p>
</body>
</html>