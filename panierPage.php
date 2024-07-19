<?php include ('panierDonnees.php'); ?>
<?php include ('panierFonctions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <h1>Mon panier</h1>
    <ul>
    <?php
    foreach ($panier as $fruit) {
        ?>
        <li>
        Produit
        <?php 
        echo $fruit['nom']; ?> -
        Prix au Kg :
        <?php
        echo $fruit['prixKgHT'];?> -
        Quantité :
        <?php
        echo $fruit['quantite'];?> -
        </li>
         prix total HT : <?php echo panierProduitPrixTotalHT ($fruit['quantite'], $fruit['prixKgHT']); ?> €
        <?php
    }
    ?>
    </ul>
    <strong>TOTAL PANIER HT: <?php echo panierMontantTotalHT($panier); ?></strong> €<br> 
    <strong>TOTAL PANIER TTC : <?php echo panierMontantTotalTTC($panier, $tauxTVA); ?></strong>  € 
</body>
</html>

