<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Affichez les nombres de 1 à 100</h2>
<?php 
for ($i = 0; $i <= 100; $i++) {
     echo "$i ";
}
echo "<hr>";
  ?>
     <h2>Affichez les nombres pairs de 0 à 50</h2>
     <?php 
     for ($i = 0; $i <= 50; $i+=2) {
    echo "$i ";
 }
 echo "<hr>"; 
 ?>
 <h2> Affichez un décompte de 10 à 0</h2>
<?php 
for ($i = 10; $i>=0; $i--) {
     echo "$i ";
}
echo "<hr>";
  ?>
    <h2>Affichez la table de multiplication de 7</h2>
    <?php $number=7;
$res=0;
 for ($i = 1; $i <= 10; $i++) {
$res=$i*$number;
     echo "<li>$i x 7 = $res</li>";
 }?>

</body>
</html>
