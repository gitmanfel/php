
<html>
<head>
  <title>salutation</title>
</head>
<body>
  <h2>Message de salutation ?</h2>

   <form action="langue.php" method="get">
    <p>quel est votre age?  <input type="number"name="age"></p>
    <p>quel est votre sexe? <input type="radio" name="sexe" value="Femme">Femme
                            <input type="radio" name="sexe" value="Homme">Homme</p>
    <p>parles-tu anglais?   <input type="radio" name="langue" value="Yes">Yes
                            <input type="radio" name="langue" value="No">No</p>
<input type="submit" value="ok"/>
  </form>
   <?php

$age=$_GET[age];$sexe==Homme AND $lanue!=No
$sexe=$_GET[sexe];
$langue=$_GET[langue];

if( $age < 12  AND $sexe==Homme AND $langue==Yes)  {
echo  "Hello boy!";
}
elseif( $age < 12  AND $sexe==Femme AND $langue!=No)  {
echo  "Hello Girl!";
}
 elseif( $age >= 12  AND $age<=18 )  {
 echo  "Hello Teenage boy!";
}
 elseif( $age >=12  AND $age<=18)  {
echo  "Hello Teenage girl!";
}
 elseif( $age >= 18 AND $age <=115  ) {
echo"Hello Sir!";
}
elseif( $age >= 18 AND $age <=115  ) {
echo"Hello lady!";
}

elseif  ( $age > 115 AND ) {
 echo "Wow! Still alive, old man?";
}
elseif  ( $age > 115 AND $sexe==Femme AND $lanue!=No) {
 echo "Wow! Still alive, old lady?";
}


   ?>
</body>
</html>
