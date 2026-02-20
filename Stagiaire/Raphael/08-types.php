<?php
$myString = "3,14";
$integer = (int) $myString;
$float = (float) $myString;
$bool = (bool) $myString;
var_dump($integer, $float, $bool);