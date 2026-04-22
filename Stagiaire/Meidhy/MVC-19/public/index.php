<?php

# Stagiaire/Meidhy/MVC-19/public/index.php

# Controleur frontal
# Chargement une seule fois et qui arrête le script en cas d'échec

require_once "../config.php";

// si il n'existe pas de variable GET nommée "page"
if(!isset($_GET["page"])){
    // on charge la page d'accueil 
    include ROOT_PATH."/view/index.php";
// sinon si la variable get 'page' a une valeur 
// acceptée dans la const de type array PUBLIC_PAGES
} elseif(in_array($_GET['page'],PUBLIC_PAGES)){
    // Si la variable GET correspond à une valeur acceptée dans le tableau
    include ROOT_PATH . "/view/".$_GET['page'] . ".php";
} else{
    // appel de la page 404
    include ROOT_PATH . '/view/404.php';
}