<?php
  $date =  date("F j, Y, g:i a");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page - <?= date("H:i") ?></title>
</head>
<body>
    <h1>Date : <?= date("F j, Y") ?></h1>
  <p>Il est <?= date("g:i a") ?></p>
</body>
</html>