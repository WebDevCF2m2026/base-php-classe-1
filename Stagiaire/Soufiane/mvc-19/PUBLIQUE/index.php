<?php
# Stagiaire/Michael/mvc-19/public/index.php

# ICI
/* 
Chargement une seule fois 
et qui arrête 
le script en cas d'échec 
*/
require_once "../config.php";

// si il n'existe pas de variable get nommée 'page'

if(!isset($_GET['page'])){
    include ROOT_PATH."/view/index.php" ;
}elseif(in_array($_GET['page'],PUBLIC_PAGES)){

   // si la variable get corespond a une valeurs 
   // accpter dans le tableau
   include ROOT_PATH."/view/".$_GET['page'].".php";
}else{

    include ROOT_PATH."/view/404.php";
}