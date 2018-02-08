<html>
<head>
  <title>salutation</title>
</head>
<body>
  <h2>Retour à l'école de l'échec et du jugement ?</h2>

   <form action="conditions-switch.php" method="get">
    <p>quel est votre note?  <input type="nummber"name="note"></p>

<input type="submit" value="ok"/>
  </form>
   <?php

$note=$_GET[note];

switch ($note) {
    case 1:
    case 2:
    case 3:
      echo "Ce travail est nul";
      break;
    case 6:
    case 7:
    case 8:
    case 9:
      echo "Ce travail n'est pas terrible.";
      break;
    case 10:
      echo "Tout juste!";
      break;
    case 11:
    case 12:
    case 13:
    case 14:
      echo "C'est pas mal.";
      break;
    case 15:
    case 16:
    case 17:
    case 18:
      echo "Bravo";
      break;
    case 19:
    case 20:
      echo "Police! Arrêtez ce tricheur!";
      break;
    default;
      echo "<p>Merci d'indiquer une note ...</p>";

}
?>



   ?>
</body>
</html>
