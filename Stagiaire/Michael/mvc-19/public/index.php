<?php
# Stagiaire/Michael/mvc-19/public/index.php

# ICI
/* 
Chargement une seule fois 
et qui arrête 
le srcipt en cas d'échec 
*/
require_once "../config.php";


# Affichage de la racine du projet
echo 'Racine du projet dans ROOT_PATH : '.ROOT_PATH;

echo "<hr>";

# Affichage du __DIR__
 echo 'Chemin vers le dossier public via __DIR__ : '.__DIR__;