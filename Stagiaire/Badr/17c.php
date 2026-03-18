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
 $students = array_reverse($students);
// Controller
// gère les donnée avant de les envoyer dans la View
// inversion du tableau

// View
?>
<!DOCTYPE html>
<html lang="en">
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
            <th>id</th>
            <th>prenom</th>
            <th>nom</th>
            <th>email</th>
            <th>age</th>
        </thead>
</table>
<table>
 <tbody>
            <?php foreach($students as $student): ?>
                <tr>
                    <td><?= $student['id'] ?></td>
                    <td><?= $student['prenom'] ?></td>
                    <td><?= $student['nom'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['age'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <?php

      var_dump($students);
    ?>
</body>
</html>