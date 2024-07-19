<?php

$prenom = 'Mastafuto';
echo $prenom . '<br />';

// $name= ['Masta', 'Moussa','Bachir'];

// $pays = 'Le Tchad est le pays de Toumai';
// echo $pays . '<br />';

// Créez deux variables, chacune contenant un nombre.
// Additionnez ces deux nombres et stockez le résultat dans une troisième variable.
// Affichez le résultat.
$a = 10;
$b = 5;
$alpha = $a+$b;
echo $alpha . ' Mastafuto';
echo '<br />';

// Créer un tableau avec les liste des apprenants de la formation.
// Chaque apprenant dispose d'un prénom, d'un age, d'un lieu d'habitation, 
// d'une adresse mail et d'un numéro de téléphone. Vous pouvez mettre des fausses données dans le tableau

$apprenants = [
    [
        'prenom' => 'Masta',
        'age' => 18,
        'tel' => '06059519825',
        'addresse' => '11 rue de Valmy',
        'ville' =>  'Poitiers',         
    ],
    [
        'prenom' => 'Salliou',
        'age' => 32,
        'tel' => '0618895125',
        'addresse' => '12 rue de Valmy',
        'ville' =>  'Poitiers',
    ],
    [
        'prenom' => 'David',
        'age' => 40,
        'tel' => '060548125',
        'addresse' => '9 parc huspano',
        'ville' =>  'Nior',
    ],
    [
        'prenom' => 'Frank',
        'age' => 2,
        'tel' => '060458645125',
        'addresse' => '75 rue vincent Fayo',
        'ville' =>  'Poitiers',
    ],

];

// print_r($apprenants);

// "Prenom" a "..." ans et habite à ..... Son adresse mail est : ....  et son numero de téléphone est....


foreach ($apprenants as $apprenant) {
        echo '<br  />';
    if ($apprenant['age']>20) {
        echo 'Prénom : '. $apprenant ['prenom'] . '<br />' ;
        echo 'Age :' . $apprenant['age'] . '<br />';
        echo 'Téléphone :' .$apprenant['tel'] . '<br />';
        echo 'Addresse :'. $apprenant['addresse'] . '<br />';
        echo 'Ville :' . $apprenant['ville'] . '<br />' ;
    } 
     elseif($apprenant['age']<3) {
        echo  ' Prénom '. $apprenant ['prenom'] . ' est un bébé  '. '<br />' ;
    }
    else {       
        echo 'Prénom : ' . 'Majeur '. $apprenant ['prenom'] . '<br />' ;
    }
  
 }

// Faire en sorte de n'afficher que les personnes qui ont plus de 20 ans

// else ($apprenant['age']>20)    {
//    echo 'ma'
// }