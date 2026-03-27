<?php
# Stagiaire/Michael/mvc-19/public/index.php

# CONTROLEUR FRONTAL 
/* 
Chargement une seule fois 
et qui arrête 
le script en cas d'échec 
*/
require_once "../config.php";

// si il n'existe pas de variable GET nommée 'page'
if(!isset($_GET['page'])){
    // on charge la page d'accueil
    include ROOT_PATH."/view/index.php";

// sinon si la variable get 'page' a une valeur
// acceptée dans le constantes de type array PUBLIC_PAGES    
}elseif(in_array($_GET['page'],PUBLIC_PAGES)){

   // si la vraiable GET correspond à une valeur
   // acceptée dans le tableau
   include ROOT_PATH."/view/".$_GET['page'].".php";

// sinon, la variable get page existe  
// mais n'est pas valide 
}else{

    // appel de l'erreur 404
    include ROOT_PATH."/view/404.php";

}
