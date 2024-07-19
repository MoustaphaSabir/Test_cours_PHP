<?php
// Faire une boucle de 20 iterations
//  permeattant d'afficher un compteur de 1 à 20
//  Ajouter en HTML des listes à puces pour chaque ligne
 echo '<ul>
  ';

for ($compteur= 1; $compteur <= 20 ; $compteur++) { 
    echo '<li>' . $compteur . '</li>
     ';
}
echo '</ul>';


// Boucler sur les tableaux et afficher des voitures 
 
$voitures = ['Clio','Renault', 'Mercedes', 'Peugeot'] ;
echo '<ol>
';
foreach ($voitures as $voiture) {
     echo '<li>' . $voiture . '</li>' . '<br />
     ' ;
}

echo '</ol>' ;