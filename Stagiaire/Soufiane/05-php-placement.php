<?php
//   structure de base 
  $date = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- titre de la page plus heure afficher -->
  <title>Ma page - <?= date("H:i") ?></title>
</head>
<body>
    <!-- message préecrit qui sera afficher -->
  <h1>Date : <?= $date ?></h1>
  <p>Il est <?= date("H:i:s") ?></p>
</body>
</html>