<?php
/*
  
$personnes=[
   [
         'prenom'=>'Toto',
         'email'    => 'totosamir@hgabnom',
         'telephone'=> '060589714',
         'age'   => 19,
         'ville' => 'poitiers',
         'vaccineCovid'=> true ,
   ],
      
   [
      'prenom'=>'anbia',
      'email'    => 'nabiasamir@hgabnom',
      'telephone'=> '0605897b',
       'age'   => 18,
       'ville' => 'bordeaux',
       'vaccineCovid'=> true
       

   ]
];

$personnes[]=  [
   'prenom'=>'Samou',
   'email'    => 'samousamir@hgabnom',
   'telephone'=> '060589705',
   'age'   => 17,
    'ville' => 'bordeaux',
   'vaccineCovid'=> false
    

];
unset($personnes[0]);

foreacher($personnes as $personne){
   if ($personne['vaccineCovid'] ==true) {
      echo " la personne est vaccinee </ br>";
      echo
      'Nom:' . $personne['prenom'] 
      . ',telephone' . $personne ['telephone']
      . ',age' . $personne ['age'] 
      . ',ville' . $personne ['ville'] 
      . ',toto' . $personne ['vaccineCovid'] 
      
      . '<br />';
   } else {
      echo "si non la personne n'est pas vaccinee </ br>";
   }

};
   */
  
   /*$voitures = [
      [
          'nom' => 'C3',
          'modele' => '2023',
          'marque' => [
              'nom' => 'Citroën',
              'ville' => [
                  'nom' => 'Paris',
                  'latitude' => 0.785,
                  'longitude' => 1.865,
             ],
              'chiffreAffaires' => 13679403,
          ],
      ],
      [
          'nom' => 'GLE',
          'modele' => '2023',
          'marque' => [
              'nom' => 'Mercedes',
              'ville' => [
                  'nom' => 'Berlin',
                  'latitude' => 0.785,
                  'longitude' => 1.865,
              ],
              'chiffreAffaires' => 97324546804,
          ],
      ],
      [
          'nom' => 'Dacia',
          'modele' => '2012',
         'marque' => [
              'nom' => 'Renault',
              'ville' => [
                  'nom' => 'Poitiers',
                  'latitude' => 0.785,
                  'longitude' => 1.865,
              ],
              'chiffreAffaires' => 5000,
          ],
      ]
  ];

foreach($voitures as $voiture) {
   
   echo 
      'nom : ' . $voiture['nom'] . '<br />'.
      'modele : ' . $voiture['modele'] . '<br />'.
      'marque : '  . $voiture['marque']['nom'] . '<br /><hr/>' ;*/
