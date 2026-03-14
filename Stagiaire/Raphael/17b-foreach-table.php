<?php
$stagiaires = [
    "nom" => "Dupuit",
    "prenom" => "Jean",
    "email" => "Jean.Dupuit@email.com",
    "age" => 22
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17b-foreach-table.php</title>
</head>
<body>
    <h1>EXO 17b Foreach table</h1>
    <table border="10">
        <?php
        foreach ($stagiaires as $cle => $valeur){
            echo "<tr>";
            echo "<th>" . $cle . "</th>";
            echo "<td>" . $valeur . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>