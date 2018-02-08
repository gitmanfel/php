<html>
<head>
  <title>message de bienvenue</title>
</head>
<body>
  <h2>Message de bienvenue</h2>

   <form action="sans else.php" method="get">
    <p>quel est votre age?<input type="number"name="age"></p>
    <p>quel est votre sexe? <input type="radio" name="sexe" value="Femme">Femme
                            <input type="radio" name="sexe" value="Homme">Homme
                            </p>
<input type="submit" value="ok"/>
  </form>
  <?php

$reponse = "Désolé, vous ne remplissez pas les critères de sélection.";

      if($_GET["age"] >= "21" && $_GET["age"] <= "40" && $_GET["sexe"] == "Femme") {
         $reponse = "Bonjour, bienvenue parmi nous!";
      }
      echo $reponse;
?>
</body>
</html>
