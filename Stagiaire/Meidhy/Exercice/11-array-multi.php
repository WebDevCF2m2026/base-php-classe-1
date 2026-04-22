<?php
$stagiaires = [
    "WEBDEV01" => [
        "Nom" => "Dupont",
        "Prenom" => "Jean",
        "Sites" => [
            "SitePerso" => "https://example.com/jean/",
            "github" => "https://github.com/jean",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Martin",
        "Prenom" => "Marie",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/marie",
        ],
    ],
 "WEBDEV03" => [
        "Nom" => "Sempai",
        "Prenom" => "Tanuki",
        "Sites" => [
            "SitePerso" => "https://tnk-sempai.github.io/portfolio/",
            "github" => "https://github.com/TNK-Sempai",
        ],
    ],

];

echo $stagiaires["WEBDEV03"]["Sites"]["github"];
