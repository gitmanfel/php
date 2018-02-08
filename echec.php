
<html>
<head>
  <title>salutation</title>
</head>
<body>
  <h2>Retour à l'école de l'échec et du jugement ?</h2>

   <form action="echec.php" method="get">
    <p>quel est votre note?  <input type="nummber"name="note"></p>

<input type="submit" value="ok"/>
  </form>
   <?php

$note=$_GET[note];

if( $note >= 1  AND $note <=3)  {
echo  "Ce travail est nul";
}

elseif( $note >=6  AND $note <=9)  {
echo  "Ce travail n'est pas terrible.";
}

 elseif( $note == 10  )  {
 echo  "Tout juste!";
}

 elseif( $note >=11  AND $note <=14)  {
echo  "C'est pas mal.";
}

 elseif( $note >= 15 AND $note <=18 ) {
echo "Bravo";
}

elseif( $note >= 19 AND $note <=20  ) {
echo "Police! Arrêtez ce tricheur!";
}




   ?>
</body>
</html>
