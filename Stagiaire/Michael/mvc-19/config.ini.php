<?php
# Stagiaire/Michael/mvc-19/config.ini.php 

/****************************************************
 * Fichier de configuration du projet à enregiter
 * sous le nom de `config.php` à la racine du projet
 * et midifiez les valeurs des constantes de sécurité
 ****************************************************/

// constante (variable qui ne peut être 
// redéfinie pendant la durée du script )

# __DIR__ constante magique qui donnera
# le chemin absolu vers la racine du projet
const ROOT_PATH = __DIR__;

// constante contenant les pages accessibles sans être connecté
// dans une application réelle, on y mettra les pages accetées par les utilisateurs non authentifiés
const PUBLIC_PAGES = [
    
];

