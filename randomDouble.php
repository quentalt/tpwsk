<?php

// Fonction principale
function main() {
    // Génération d'un nombre aléatoire
    $randomNumber = rand(1, 100);

    // Doublement du nombre aléatoire
    $doubledNumber = $randomNumber * 2;

    // Création d'une tableau associatif équivalent à un dictionnaire en PHP
    $arrayResult = array('resultat' => $doubledNumber, 'original' => $randomNumber);

    // Retourne le résultat
    return $arrayResult;
}

// Appel de la fonction principal
$resulMain = main();

// Affichage des résultats
foreach ($resulMain as $key => $value) {
    echo ucfirst($key) . ": " . $value . "
";
}