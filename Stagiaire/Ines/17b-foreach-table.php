<?php

$stagiaire = ["prenom" => "Inès", "nom" => "Batik", "email" => "ines.batik@cf2000.onmicrosoft.com", "age" => 27];

echo "<table border='1' style='border-collapse: collapse; width: 300px;'>";
echo "<tr>
        <th>Information</th>
        <th>Valeur</th>
      </tr>";

foreach ($stagiaire as $cle => $valeur) {
    echo "<tr>";
    echo "<td><strong>$cle</strong></td>";
    echo "<td>$valeur</td>";
    echo "</tr>";
}

echo "</table>";