<?php

// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "entreprise";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);
// Vérifier la connexion
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());
} else {
echo "Connexion réussie à la base de données.";
}

// Exemple de jointure INNER JOIN
$sql = "

SELECT employe.id_employe, employe.nom , departement.id_departement, departement.nom_departement
 FROM employe
lEFT JOIN departement 
 on employe.id_employe = departement.id_employe ";
 
// $sql = "
// SELECT * FROM departement WHERE 1
// ";
$resultat = mysqli_query($connexion, $sql);

// Exemple de récupération des résultats
if ($resultat) {
    // print_r($resultat);
    foreach($resultat as $employe) {
        print_r($employe);
    }
} else {
    echo "Erreur : " . mysqli_error($connexion);
}

?>