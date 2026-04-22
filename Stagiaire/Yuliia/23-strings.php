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
    <label>Name:</label><br>
    <input type="text" name="nom"><br>
    <input type="submit" value="Accept"><br>
    </form>
</body>
</html>
<?php
$name=$_GET['nom'];
$invName="";
if (isset($name)) {
   for($i=0;$i<strlen($name);$i++){
    if($i===0){
    $invName.=strtoupper($name[$i]);
    }
    else{
        $invName.=strtolower($name[$i]);
    }
   }
}
echo $invName;
        ?>
    