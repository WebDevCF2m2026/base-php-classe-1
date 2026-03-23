   <?php
$stagiaire = [
'id' => 1
"prenom" => "Bryan", 
"nom" => "Trinidad", 
"age" => 26];
 [
'id' => 1
"prenom" => "Rapha", 
"nom" => "Debot", 
"age" => 26];
 [
'id' => 1
"prenom" => "Meidhy", 
"nom" => "Meidhy", 
"age" => 26];
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