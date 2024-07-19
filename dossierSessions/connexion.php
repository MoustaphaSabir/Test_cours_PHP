<?php

//Print_r 
 print_r($_POST);
// Demarer une session 
// Recuperer les données dans une session en php
// Stocker les données de la session 
// Destruction de la session 

echo '<br>';
session_start();
$_SESSION['Email'] = $_POST['email'];
echo 'E-mail :' . $_SESSION['Email'];
echo '<br />';
$_SESSION['pass'] = $_POST['motDePasse'];
echo 'Mot de passe de ' .   $_SESSION['Email'] .  ' est ' . $_SESSION['pass'];
 
// Ecrire "Le mot de passe de l'utilisateur .............. est ...............".





?>