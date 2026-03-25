<?php
# Stagiaire\Yuliia\mvc-19\public\index.php

# CONTROLEUR FRONTAL 
/* 
Chargement une seul fois
et qui arrete 
le script en cas d'échec
*/
require_once "../config.php";

// si il n'existe pas de var GET nommée 'page'
if(!isset($_GET['page'])){
    //on change  la page d'accueil
    include ROOT_PATH."/view/index.php";
    //sinon si la var get 'page' a une valeur acceptée dans le constantes de type array PUBLIC_PAGES
}elseif(in_array($_GET['page'],PUBLIC_PAGES)){
//si la var GET correspond a une val acceptée dans le tableau 
 include ROOT_PATH."/view/".$_GET['page'].".php";
}else{
    //appel de l'erreur 404
  include ROOT_PATH."/view/404.php";
}