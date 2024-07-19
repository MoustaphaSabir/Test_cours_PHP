<?php
 
//  Condition sur un age pour determiner si la personne est mineur ou majeur 

$age = 26;
// Si la personne est majeur Alors afficher "Majeur" SINON afficher "Mineur"


if ($age >=18) {
    echo 'Majeur';
}else {
    echo 'Mineur';
}
echo '<br />';

// Condition sur la taille du prénom

// Si le prénom est de taille supérieur à 20 caractéres Alors  afficher "Prénom"

// SINON SI le prénom est  à 10 caractéres Alors afficher "Prenom trop"
$prenom = 'Emmanuelbdgfnbxgbdxcrthrndndr'; 
$prenomnombredecaracteres = strlen($prenom);

if (strlen($prenom)>20) {
    echo 'Prénom trop grand';

}else if (strlen($prenom)<10) {
    echo 'prenom trop petit';
}
// Si la taille du prénom est inférieur a 20 et superieur à 10 ALORS afficher "prenom de taille moyenne"
// Indication un seul if et pas de else

if (strlen($prenom)<20 && strlen($prenom)>10) {
 echo 'Prénom de taille moyenne';
}

//  Si la taille du prénom est supérieur à 15 ET inférieur à 30 ET nombre paire 
// Alors afficher 'Prénom Ok';
if (strlen($prenom)>15 && strlen($prenom)<30 && strlen($prenom) % 2 == 0 ) {
 echo 'Prénom OK';
}