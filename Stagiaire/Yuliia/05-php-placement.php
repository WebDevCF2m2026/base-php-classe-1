

<?php
date_default_timezone_set("Europe/Brussels");
$dateCompleted = date("F j, Y, g:i a");
$hour = date("H:i");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
   
<title>Ma page - <?= $hour ?></title>
<h1>Date : <?= $dateCompleted ?></h1>
<p>Il est <?= $hour ?></p>

</body>
</html>
