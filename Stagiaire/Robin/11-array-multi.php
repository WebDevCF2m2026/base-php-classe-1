<?php
$stagiaires = [
    "WEBDEV01" => [
        "Nom" => "Dakir",
        "Prenom" => "Badr",
        "Sites" => [
            "SitePerso" => "https://example.com/jean/",
            "github" => "https://github.com/dakirbadr49-coder",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Debot",
        "Prenom" => "Raphael",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/raphaeldebot",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Craeye",
        "Prenom" => "Robin",
        "Sites" => [
            "SitePerso" => "https://example.com/KukichaBXL/",
            "github" => "https://github.com/KukichaBXL",
        ],
    ],
];


echo $stagiaires["WEBDEV02"]["Sites"]["github"];



