<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        div{
            background-color: #1e9ff5;
            padding: 10px;
         max-width: 220px;
         border-radius: 10px;
         border: 2px solid  #126daa;;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: stretch;
            width: 200px;
            gap: 10px;
        }
       select{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
    <form action="" method="POST">
        <label for="num1"></label>
        <input type="number" name="num1" id="num1" >
        <select name="sign" id="sign">
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="dev">/</option>
    <option value="mult">x</option>
  </select>
  <label for="num2"></label>
        <input type="number" name="num2" id="num2">
<input type="submit" value="=">
    </form>
    <p>Résultat est : 
<?php

if (isset($_POST['num1'], $_POST['num2'], $_POST['sign'])) {
    $number_1 = $_POST['num1'];
    $number_2 = $_POST['num2'];
    $sign = $_POST['sign'] ?? '';
if ($sign == 'add') {
    echo $number_1 + $number_2;
} 
elseif ($sign == 'dev')
    if( $number_2==0){
        echo '<script>alert("Tu ne peux pas deviser par 0")</script>';
    }
    else  { 
    echo $number_1 / $number_2;
} 
elseif ($sign == 'mult') { 
    echo $number_1 * $number_2;
} 
elseif ($sign == 'sub') { 
    echo $number_1 - $number_2;
} 
else {
    echo "Invalid operation";
}
}
?>

</p>
</div>
</body>
</html>