<?php
$monTab = [random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)];
var_dump($monTab);
array_unique($monTab);
var_dump($monTab);
sort($monTab);
var_dump($monTab);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 26 Tableaux avancés</title>
</head>
<body>
        <h1>EXO 26 Tableaux avancés</h1>
        <p>Créez 26-tableaux-avances.php : créez un tableau de 10 nombres aléatoires. Triez-le, retirez les doublons, puis affichez le résultat dans un tableau HTML.</p>
            <table border 2>
        <thead>
            <th>Valeur</th>
        </thead>
        <tbody>Tableau trier par ordre croissant et inséré dans un tableau</tbody>
        <tbody>
            <?php
            foreach($monTab as $valeur):
            ?>
            <tr>
                <td><?= "$valeur";?></td>
            </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>
</body>
</html>