<?php

$personne = ["prenom" => "Meidhy", "nom" => "Alioussalah", "age" => 34, "email" => "tanuki.corporation@gmail.com"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17b-foreach-table</title>
</head>
<body>
    <h1>17b-foreach-table</h1>
    <p>Créez 17b-foreach-table.php : créez un tableau associatif avec les données d'un stagiaire (nom, prénom, email, âge) et affichez-les dans un tableau HTML <table>.</p>
    
    <table>
        <tr>
            <?php
            foreach ($personne as $key => $value) {
        ?>
        <td><?$key ?></td>
        <td><?$value?></td>
        </tr>        
        <?php
    }
            ?>
    </table>

</body>
</html>