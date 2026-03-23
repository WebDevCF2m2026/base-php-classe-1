    <?php
$stagiaire = ["prenom" => "Bryan", "nom" => "Trinidad", "age" => 26];

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach table</title>
</head>
<body>
<style>
    body{
        display : inline;
        background-color : #000000;
        color : white;
      
    }
    table{
        text-align : center;
         
    }

</style>
</body>
</html>
