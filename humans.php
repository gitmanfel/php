<?php
$name = "Félicien ";
$age = 32;
$couleur_de_mes_yeux = "Brun";
$et_je_faim = true;
$temperature >= 21;
$chambre_est_sale = FALSE;
$famille= array(0 => 'Butera', 1 => 'Félix', 2 => 'Félicité', 3 => 'Florence', 4 => 'Félicien', 5=>'Francoise'); ?><html>
  <head><title>Hi!</title></head>
  <body>

    <h1>Bonjour <?php

    if( $temperature >= 21 ) {
  // code à exécuter si la condition est TRUE
  $vetement_du_jour = "T-shirt";}

  elseif ( $temperature > 10 ){
    $vetement_du_jour = "Pull-over";

 } else {
   // code à exécuter si toutes les conditions précédentes sont FALSE
   $vetement_du_jour = "Pull-over, écharpe et bonnet";
   echo $name;
   echo "met un " . "$vetement_du_jour" . " car il fait froid aujourdhui.";
 }

    ?> </h1>
  </body>
</html>
