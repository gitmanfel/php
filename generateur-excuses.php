<html>
<head>
  <title>Excuses</title>
</head>
<body>
  <h2>Générateur d'excuses</h2>

  <form action="generateur-excuses.php" method="get">
    <p>
      Nom de l'enfant:
      <input type="text"name="enfant">
    </p>
    <p>
      Nom du professeur:
      <input type="text"name="prof"></p>
    <p>
      Raison d'absence:
       <input type="radio" name="raison" value="Maladie">Maladie</p>
       <input type="radio" name="raison" value="Deces">Décès
       <input type="radio" name="raison" value="extra">activité extra-scolaire importante
       <input type="radio" name="raison" value="autre">toute autre excuse
    </p>
       <input type="submit" value="ok"/>
  </form>
      <?php
            if (!empty($_GET["enfant"])) { ?>
      <p> Madame <?php  echo $_GET["prof"];  ?> ,
      Je vous prie de bien vouloir excuser l’absence de <?php  echo $_GET["enfant"];  ?> qui a eu lieu le <?= date ("d.m.y"); ?>.

En effet, il ne pourra pas se rendre en classe  à cause de

<?php
      if ($_GET["raison"]=="Maladie") {
        echo "sa jambe cassée";
      }

        elseif ($_GET["raison"]=="Deces") {
        echo "la mort de oncle Trump";
      }
        elseif ($_GET["raison"]=="extra") {
        echo "l'activite extra-scolaire";
      }
      else {
         echo "l'etat d'alerte terroriste émise ce matin, ";
      }

?>

Je vous saurais gré d’en prendre note et m’en remets à votre compréhension.

Je vous prie de croire, Madame  <?php  echo $_GET["prof"];  ?>,  à l’assurance de mes salutations les plus sincères. 

<?php
}else{
  echo "";
}
?>



  </body>
  </html>
