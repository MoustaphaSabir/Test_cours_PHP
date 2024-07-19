<?php
/*
echo date("d/m/Y H:i:s");

echo "<br>";
echo time();
echo "<br>";


echo "<br><br>";
//  Afficher le mois actuel
//  Écrivez un script PHP qui affiche uniquement le mois actuel
//  en toutes lettres (donc février dans notre cas).

// $moisActuel= strtotime($mois);

echo date ("F");

echo "<br> <br>";
//  3. Ajouter des jours
//  Créez un script PHP qui ajoute 7 jours à la date actuelle et
//  affichez le résultat.
$semaineProchain = strtotime("+7 days");
echo $semaineProchain;
echo "<br>";
echo date("d/m/Y H:i:s", $semaineProchain);
*/ 
  
    echo '<br>';


    if (empty($_POST)) {

// Etape 1 : Transformer les dates en timestamp
    
    $dateActuelle = date("Y-m-d");
    $dateActuelleTimestamp = strtotime($dateActuelle);
    $dateNaissance = $_POST['dateDenaissance'];
    // Récupération de la date du prochaine anniversaire
    $dateNaissanceTableau = explode("-", $dateNaissance);
    print_r($dateNaissanceTableau);
    // 2024-09-18
    $dateAnniversaire = date("Y") . '-' . $dateNaissanceTableau[1] . '-' . $dateNaissanceTableau[2]; // 2024-09-18

    echo $dateAnniversaire;
    // Affichage du nombre de jours restant avant la date anniversaire
}
?>