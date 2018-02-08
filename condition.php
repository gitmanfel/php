<?php
$chambre_est_sale=FALSE;
?><html>
  <head><title>Hi!</title></head>
<body>
  <h1>Bonjour <?php
if ($chambre_est_sale ==TRUE){echo "Range ta chambre, on dirait la cage d'un bonobo!";}
elseif ($chambre_est_sale !=TRUE) {echo "Ta chambre est trop propre, vis un peu!";}

?><html>
