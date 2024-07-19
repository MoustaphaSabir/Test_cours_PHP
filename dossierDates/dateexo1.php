<?php
// Définition des deux dates
$date1 = '2024-02-19';
$date2 = '2023-12-25';

// Convertir les dates en timestamps

$dateTim1 = strtotime($date1); 
$dateTim2 = strtotime($date2); 

echo 'Timstamps1 : ' .$dateTim1 . '<br>';
echo 'Timstamps2 : ' .$dateTim2;
// Comparer les timestamps

    echo '<br><br>';
if ($dateTim1>$dateTim2) {
    echo "$dateTim1 est superieur à $dateTim2";
}elseif ($dateTim1<$dateTim2) {
    echo "$dateTim1 est inferieur à $dateTim2";
}else {
    echo "$dateTim1 et $datesTim2 sont identiques";
}
echo '<br>';
// Afficher la date la plus récente
    echo 'Date la plus recente est :' . date($date1);

    echo'<br><br>';

// Exercice2: Afficher la difference entre deux dates
// Définition des deux dates
        echo 'Exercice2' . '<br>';
    $dateDebut = '2024-01-01';
    $dateFin = '2024-02-19';

// Convertir les dates en timestamps
$dateDebutTime1 = strtotime($dateDebut);
$dateFinTime2 = strtotime($dateFin);
    echo 'Date debut : ' . $dateDebutTime1 . '<br>';
    echo 'Date fin : ' .$dateFinTime2 ;
    echo '<br>';
// Calculer la différence en secondes entre les deux timestamps
$differenceEnSecondes =  $dateFinTime2  - $dateDebutTime1 ;
echo 'La dfference entre les deux timestamps est de: ' . $differenceEnSecondes . '<br>';
// Convertir la différence en jours
$diffJours = $differenceEnSecondes/86400;
echo 'La difference en jours    est :' .$diffJours ;
// Afficher la différence en jours sur le page

echo '<br><br>';
//Exercice 3
echo 'Exercice 3' . '<br>';
// Définition d'une date
$date = '2024-02-19';
// Convertir la date en timestamp
$dateTimestamp= strtotime($date);
echo 'La date en timetamp est : ' . $dateTimestamp . '<br>';
// Trouver le jour de la semaine correspondant au timestamp
$jourDeLaSemaine = date("l", $dateTimestamp);
// Afficher le jour
echo 'Le jour de la semaine est : ' . $jourDeLaSemaine;
echo '<br><br>';

// Exercice 4
echo 'Exercice 4' . '<br>';
// Définition d'une date de naissance
$dateDeNaissance = '1990-01-01';
// Convertir la date de naissance en timestamp
$naissanceTime = strtotime($dateDeNaissance);
echo 'la date de naissance en timestamp est :'. $naissanceTime . '<br>';
// Obtenir le timestamp actuel
$timestampActuel = time();
echo "Timestamp actuel est : $timestampActuel" . '<br>';
// Calculer la différence en secondes entre les deux timestamps
$difEnSec = $timestampActuel - $naissanceTime;
echo 'La difference en seconde est : ' . $difEnSec . '<br>';
// Convertir la différence en années (pour info : il y a 31536000 secondes dans une année)
$diffAnnees = $difEnSec / 31536000;
echo 'La difference en années est : ' ;
echo floor($diffAnnees) . ' ans ';

echo '<br><br>';
echo 'Exercie 5' . '<br>';

// Récupération de la date actuelle et date de fin d’année
$dateActuelleTimestamp = time(); // Réponse : 2024-02-20
$dateFinAnnee = date('Y') . '-12-31'; // Réponse : 2024-12-31
$dateFinAnneeTimestamp = strtotime($dateFinAnnee);

// Faire la différence entre les deux timestamps
$differenceTimestamp = $dateFinAnneeTimestamp - $dateActuelleTimestamp ;

// Convertir le timestamp de différence entre les deux dates en jours
$difference = $differenceTimestamp / 86400; // Nombre secondes dans une journée

// Afficher le résultat dans une phrase
echo 'Le nombre de jours restant est : ' ;
echo floor($difference) . ' jours';
echo '<br>';

?>
