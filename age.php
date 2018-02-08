
<html>
<head>
  <title>salutation</title>
</head>
<body>
  <h2>Message de salutation </h2>

   <form action="age.php" method="get">
    <p>quel est votre age?<input type="number"name="age"></p>
    <p>quel est votre sexe? <input type="radio" name="sexe" value="Femme">Femme
                            <input type="radio" name="sexe" value="Homme">Homme
                            </p>
<input type="submit" value="ok"/>
  </form>
   <?php

$age=$_GET[age];
$sexe=$_GET[sexe];
if( $age < 12  AND $sexe==Homme)  {
echo  "Salut petit!";
}
elseif( $age < 12  AND $sexe==Femme)  {
echo  "Salut petite!";
}
 elseif( $age >= 12  AND $age<=18 AND $sexe==Homme)  {
 echo  "Salut l'adolescent!";
}
 elseif( $age >=12  AND $age<=18 AND $sexe==Femme)  {
echo  "Salut l'adolescente!";
}
 elseif( $age >= 18 AND $age <=115 ) {
echo"Salut l'adulte!";
}
elseif  ( $age > 115 ) {
 echo "Wow! Toujours vivant?";
}


   ?>
</body>
</html>
