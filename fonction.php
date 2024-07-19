<?php

$prenom= 'Emmanuel';

// Declaration d'une fonction d'affichage

function ditbonjour($prenom)
{
    echo 'Bonjour ' . $prenom . '<br />';
}
// Execution de la fonction
ditbonjour ($prenom);
ditbonjour ($prenom);
echo '<br />';
//Declaration de l   fonction d'addition
function addition($nombre1, $nombre2)
{
    $addition= $nombre1 + $nombre2;
    return$addition;
}

// Appel de la fonction d'addition avec deux paramétres
echo addition(5, 10);
echo '<br /><br />';

// Déclaration de la fonction de calcul de métres cubes
// Nombre de m3 = longeur * largeur * hauteur

// $surface= 'nombre m3';
function calculmetrecubes($longeur, $largeur, $hauteur)
{
      $calcul= $longeur *$largeur * $hauteur;
      return $calcul;
} 
   echo 'Le nombre de métres cubes est: '. calculmetrecubes (5, 10, 1);
// Appel de la fonction de calcul de métres cubes
 echo  '<br/><br/>';
 // Déclaration du tableau fruits
 $fruits=[ 'Pomme', 'Banane','Orange','Kaki'];

// Déclaration de la fonction qui liste le tableau de fruits
function listefruits($fruits)
{
    $listefruits= 'Les produits fruits sont : ';
    //Retourne la liste de fruit dans une chaine de caractére
    // Boucle sur liste des fruits
    foreach ($fruits as $fruit) {
        
        $listefruits .= $fruit . ' - ';

    }
     return $listefruits;
}

// Affichage de la liste fruit
 echo listefruits($fruits);


 foreach ($fruits as $fruit) {
    echo $fruit . '<br />';
}
echo '<br />';