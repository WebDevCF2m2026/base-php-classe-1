<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opérateurs d'affectations Mathématiques</title>
</head>
<body>
    <h3>Opérateurs d'affectations</h3>
    <pre>Opérateur	Description	Équivalent
=	Affectation	                $a = 5
+=	Addition et affectation	        $a = $a + 2
-=	Soustraction et affectation	$a = $a - 2
*=	Multiplication et affectation	$a = $a * 2
/=	Division et affectation	        $a = $a / 2
%=	Modulo et affectation	        $a = $a % 2
.=	Concaténation et affectation	$a = $a . " suite" // pas mathématique!
++      Incrémentation de 1             $a = $a+1;
--      Décrémentation de 1             $a = $a-1
</pre>

<h4>$a = 5; au départ</h4>
<p>
<?php
$a = 5;
$a += 10; // $a = $a + 10 ;
echo '$a = 5;<br>$a += 10; // $a = $a + 10 ; =>'. "$a<br>";
$a -= 2; // $a = $a - 2 ;
echo '$a -= 2; // $a = $a - 2 ; =>'. "$a<br>";
$a *= 3; // $a = $a * 3;
echo '$a *= 3; // $a = $a * 3 ; =>'. "$a<br>";
$a /= 3; // $a = $a /3;
echo '$a /= 3; // $a = $a / 3 ; =>'. "$a<br>";
$a %= 6;// $a = $a % 6;
echo '$a %= 6; // $a = $a % 6 ; =>'. "$a<br>";
$a++; // $a += 1; $a = $a + 1;
echo '$a++; // $a += 1; $a = $a + 1; =>'. "$a<br>";
$a--; // $a -= 1; $a = $a -1;
echo '$a--; // $a -= 1; $a = $a - 1; =>'. "$a<br>";
echo 'echo $a++ sur cette ligne affiche $a puis incrémente=>'. $a++; // le $a++ fonctionnera ligne suivante
echo '<br>echo $a; sur la ligne suivante vaut donc=>' . "$a<br>";
echo 'echo ++$a sur cette ligne incrémente $a et puis l\'affiche =>'.++$a;
echo '<br>echo $a; sur la ligne suivante vaut toujours donc=>' . "$a<br>";
?>
</p>
  
</body>
</html>
