<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-array-assoc.php</title>
</head>
<body>
    <h1>10-array-assoc.php</h1>
    <p>Créez 10-array-assoc.php : déclarez $monTabAssoc = ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique", "dateDeNaissance" => "1951-03-02"]; et affichez chaque valeur séparée par un <hr>.</p>
    <?php 
     $monTabAssoc = ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique", "dateDeNaissance" => "1951-03-02"];
     echo $monTabAssoc["prenom"] . "<hr>".$monTabAssoc["nom"] . "<hr>".$monTabAssoc["caracteristique"] . "<hr>".$monTabAssoc["dateDeNaissance"] . "<hr>"
    ?>
    
</body>
</html>