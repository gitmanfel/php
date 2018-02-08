<html>
<head>
  <title>message de bienvenue</title>
</head>
<body>
  <h2>Message de bienvenue</h2>

   <form action="expression conditionnelle.php" method="get">
    <p>quel est votre age?<input type="number"name="age"></p>
    <p>quel est votre sexe? <input type="radio" name="sexe" value="Femme">Femme
                            <input type="radio" name="sexe" value="Homme">Homme
                            </p>
<input type="submit" value="ok"/>
  </form>
  <?php

$age=$_GET[age];
$sexe=$_GET[sexe];

if($age >=21  AND $age<=40 AND $sexe==Femme)  {?>
echo  "Bonjour, bienvenue parmi nous!";
}
else {
echo  "Désolé, vous ne remplissez pas les critères de sélection.";
}
?>
</body>
</html>
