<!-- page qui traite le formulaire HTML -->
<?php

 print_r($_POST);

 
//  Controle du formulaire

 if (empty($_POST)) {
    echo 'Le formulaire n\'a pas eté soumis correctement';
    exit();
   
 }

// Existe t-il un $_POST ['nom] et est-il différent de null
if (isset($_POST['nom'])) {
  echo 'Vider le nom';

}
else {
    echo 'Erreur sur le nom.';
    exit();
}
// $_POST ['nom] est -il inferieur à 80 caractéres
// Utiliser isset et empty
?>
<h1>Nous avons bien reçu votre message !</h1>


Nom : <?php echo ($_POST['nom']) . '<br />' ; ?>
E-mail: <?php echo $_POST['email'] . '<br />';?>
Prénom: <?php echo $_POST['prenom'] . '<br />';?>
contact : <?php echo $_POST['contact'] . '<br />';?>
Abonnement Newsletter:   <?php echo $_POST['abon'] . '<br />';?>
Date de naissance :  <?php echo $_POST['date'] . '<br />';?>

