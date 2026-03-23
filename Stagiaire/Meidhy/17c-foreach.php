<?php
// Model
$students = 
[
    [
        'id' =>7,
        'prenom' => "Mike",
        'nom' => "Pitz",
        'email' => "gitweb@cf2m.be",
        'age' => 49,
    ],
    [
        'id' =>9,
        'prenom' => "Raphaël",
        'nom' => "Debot",
        'email' => "rd@cf2m.be",
        'age' => 24,
    ],
    [
        'id' =>12,
        'prenom' => "Bryan",
        'nom' => "Benois",
        'email' => "bb@cf2m.be",
        'age' => 26,
    ],
];

// Controller
// gère les donnée avant de les envoyer dans la View
// inversion du tableau
    $studentsinverse = array_reverse($students);

// View
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des stagiaires</title>
</head>
<body>
    <h1>Tableau des stagiaires </h1>
    <h2>Avec foreach, mais en ordre inversé</h2>
    <table>
        <thead>
            <tr>
            <th>id</th>
            <th>prenom</th>
            <th>nom</th>
            <th>email</th>
            <th>age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($studentsinverse as $user): ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['prenom']?></td>
                <td><?= $user['nom']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['age']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php

var_dump($students);
    ?>
</body>
</html>


