<?php
        $serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe = "";
        $base_de_donnees = "liste_tache";
        // Établir la connexion
        $connexion = mysqli_connect($serveur, $utilisateur,
        $mot_de_passe, $base_de_donnees);
        // Vérifier la connexion
        if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
        } else {
        // echo "Connexion réussie à la base de données.";
        // print_r($connexion);
        }
        echo "<br>";
        $sql = "SELECT * FROM  liste";
        $listes = mysqli_query($connexion, $sql);
        // Vérifier si la requête a réussi
        echo "<ul>";
            if ($listes) {
                // print_r($cours);
                foreach($listes as $liste) {
                    echo '<input type="checkbox" name=" '. $liste['nom_tache'] .'"  id="id_tache">';

                    echo $liste['nom_tache'] . " : " . $liste['description_taches'] . "<br>";
                }
            } else {
                echo "Erreur : " . mysqli_error($connexion);
            }
            echo '<button type="submit">' . 'Enregistrer' . '</button>';

            echo "</ul>";
        // Fermer la connexion
        echo "<br>";
        // if ($listes) {
        //     // print_r($cours);
        //     foreach($listes as $liste) {

        //         echo  $liste['nom_tache'] . "<br>".  $liste['description_taches'] . '<br>';
        //     }
        // } else {
        // echo "Erreur : " . mysqli_error($connexion);
        // }
        echo "<br>";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des tâches</title>
</head>
<body>
    <h1>Liste des tâches à faire</h1>
    <form action="" method="post">
        <label for="tache">Faire du shopping</label>
        <input type="checkbox" name="tache" id="tache">
        <br>
        <label for="sport"> Salle de sport "BasicFut"</label>
        <input type="checkbox" name="sport" id="sport">
        <button type="submit">Enregistrer</button>
    </form>

    <h2>Liste des tâches enregistrées</h2>
    <ul>
        <?php
        // Vérifie si des tâches ont été soumises
        if(isset($_POST['tache']) || isset($_POST['sport'])) {
            // Vérifie si la tâche "Faire du shopping" a été cochée
            if(isset($_POST['tache'])) {
                echo "<li>Faire du shopping</li>";
            }
            // Vérifie si la tâche "Salle de sport 'BasicFut'" a été cochée
            if(isset($_POST['sport'])) {
                echo "<li>Salle de sport 'BasicFut'</li>";
            }
        }
        ?>
    </ul>

    <h2>Ajouter une nouvelle tâche</h2>
    
    <form action="index.php" method="post">
        <label for="ajouttache">Nouvelle tâche:</label>
        <input type="text" id="ajouttache" name="ajouttache">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
