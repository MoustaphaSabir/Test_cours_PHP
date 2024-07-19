
<?php
function panierProduitPrixTotalHT($quantite, $prixKgHT){
     $prixTotalHT = $quantite * $prixKgHT;
    return $prixTotalHT;

};
function panierMontantTotalHT($panier){
       $montantHT =0;
       foreach ($panier as $fruit) {
        $montantHT = $montantHT  + ($fruit['quantite'] * $fruit['prixKgHT']);
       }
      return $montantHT;

}
function calculeMontantPanierTotalTTC($panier)
{
    $tva = 5.5/100;
    $montantpanierTotalTTC = 0;

        // Boucle sur chaque fruit du panier
    foreach ($panier as $fruit) {

        // Calcul le montat total TTC du panier
        //Regle de calcul: prixkgHT du fruit *qantite du fruit
   
    $montantpanierTotalTTC = $montantpanierTotalTTC + ($fruit['prixKgHT'] * $fruit['quantite']);

    }
     return $montantpanierTotalTTC;
}

function panierMontantTotalTTC($panier, $tauxTVA)
{
 $montantHT = panierMontantTotalHT($panier);

    $montantTTC = (panierMontantTotalHT($panier) * ($tauxTVA/100)) +  panierMontantTotalHT($panier);

    return $montantTTC ;
   
}