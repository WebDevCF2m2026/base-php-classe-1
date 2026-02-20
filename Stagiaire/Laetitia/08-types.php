<?php
$chaine = "42";

$entier = (int) $chaine;
$decimal = (float) $chaine;
$booleen = (bool) $chaine;
$tableau = (array) $chaine;
$redevientChaine = (string) 42;


$var = "123";
settype($var, "integer");
var_dump($var);


$a = 5;
unset($a);