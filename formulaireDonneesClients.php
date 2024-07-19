<?php

print_r($_POST);

 
// $fichiers = file_put_contents('exemple.txt','salut tout le monde');
// if (empty($_POST)) {
//     echo 'Le formulaire n\'a pas eté soumis correctement';
//     exit();
   
//  }

//  if (isset($_POST['nom'])) {
//     echo 'Vider le nom';
  
//   }
//   else {
//       echo 'Erreur sur le nom.';
//       exit();
//   }

// if (!empty($_POST)) {

?>

<h1>Nous avons bien reçu votre message !</h1>
<?php
    file_put_contents('masta.txt',($_POST['nom'] . $_POST ['prenom'] . $_POST['email'] . $_POST['abon'] . $_POST['date']));
?>
Nom : <?php echo ($_POST['nom']) . '<br />' ; ?>
Prénom: <?php echo $_POST['prenom'] . '<br />';?>
E-mail: <?php echo $_POST['email'] . '<br />';?>
contact : <?php 
     echo '<ul>';
foreach ($_POST['produits'] as $produit) {
    echo  '<li>' . $produit . '<li/>' . '<br />';
 }

    echo '<ul/>';
 
 ?>
Abonnement Newsletter :<?php echo $_POST['abon'] . '<br />';?>
Date de naissance :  <?php echo $_POST['date'] . '<br />';
 
 // Contenu à ecrire dans le fichier
?>
 


