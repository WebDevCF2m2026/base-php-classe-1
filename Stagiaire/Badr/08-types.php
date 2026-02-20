<?php
$a = "42";

// Connaître le type
echo gettype($a);      // string
var_dump($a);           // string(2) "42"

// Vérifier le type
is_string($a);          // true
is_int($a);             // false
is_float($a);           // false
is_bool($a);            // false
is_array($a);           // false
is_null($a);            // false
is_numeric($a);         // true (contient un nombre)

// Vérifier l'existence et le contenu
isset($a);              // true (existe et n'est pas null)
empty($a);              // false (n'est pas vide)