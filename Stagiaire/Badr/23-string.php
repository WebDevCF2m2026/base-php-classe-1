<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<html>
<body>
    <form action="23-strings.php" method="get">
    <label>nom:</label><br>
    <input type="text" name="nom"><br>
    <input type="submit" value="Log in"><br>
    </form>
</body>
</html>
<?php
if (isset($_GET['nom'])) {
    for($i=0;$i<strlen($_GET['nom']);$i++){
        echo ($_GET['nom'[$i]]);
        
        }
}
        ?>
        //     echo "Bonjour " . htmlspecialchars($_GET['nom']);