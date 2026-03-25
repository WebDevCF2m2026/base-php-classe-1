<?php 
# Stagiaire\Yuliia\mvc-19\config.php

// constante (variable qui ne peut pas être
// redéfinie pendant la durée du script )

# __DIR__ constante magique qui donnera
# le chemin absolu vers la racine du projet 
const ROOT_PATH=__DIR__;

// constante contenant les pages accessibles sans être connecté
// dans une application réelle, on y mettra les pages accetées par les utilisateurs non authentifiés via une variable get 
const PUBLIC_PAGES = [
   //inutile car identique que sans
   // variables GET 'index',
   'a-propos',
   'competences',
   'projets',
   'contact'
];
