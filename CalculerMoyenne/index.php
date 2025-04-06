<?php

function calculerMoyenne($note1, $note2, $note3){ // Prends en entrée 3 arguments et renvoie la moyenne des 3
    return ($note1 + $note2 + $note3)/3; // Renvoie la moyenne
}

function afficherResultat($nom, $moyenne){ // Prends en entrée un Nom et une Moyenne
    if ($moyenne >= 10){ // Vérifie si la moyenne est supérieure à 10
        echo("La moyenne de ".$nom." est suffisante (>= 10)");
    }
    else{
        echo("La moyenne de ".$nom." est insuffisante (< 10)");
    }
}

$nom = "Alice";
$note1 = 7;
$note2 = 15;
$note3 = 18;

echo (afficherResultat($nom, calculerMoyenne($note1, $note2, $note3))); // Afficher la moyenne d'un élève

?>