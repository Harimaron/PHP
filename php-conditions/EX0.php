<?php
$chambre_est_sale = false;

if ( $chambre_est_sale == true ) {
    $resultat = "Range ta chambre, on dirait la cage d'un bonobo!";
    
}elseif ( $chambre_est_sale == false ){
    $resultat = "Ta chambre est trop propre, vis un peu!";
}

echo $resultat;
?>

<?php
$chambre_est_sale = "sale";

if ( $chambre_est_sale == "dégoutante" ) {
    $resultat = "a";
    
}elseif ( $chambre_est_sale == "sale" ){
    $resultat = "b";
}elseif ( $chambre_est_sale == "en ordre" ){
    $resultat = "c";
}elseif ( $chambre_est_sale == "immaculée" ){
    $resultat = "d";
}elseif ( $chambre_est_sale == "maniaque" ){
    $resultat = "e";
}

echo $resultat;
?>