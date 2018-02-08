<?php
$quelleheure= "13h00";
 ?>
<html>
<head><title>salutation</title></head>
<h2>Message de salutation ?</h2>
<body>

  <?php
  if ($quelleheure>="5h00" AND $quelleheure<="9h00" ){$heure= "Bonjour!";
} elseif ($quelleheure>="9h01" AND $quelleheure<="12h00" ){$heure= "Bonne journée!";
}elseif ($quelleheure>="12h01" AND $quelleheure<="16h00" ){$heure= "Bon après-midi!";
}elseif ($quelleheure>="16h01" AND $quelleheure<="21h00" ){$heure= "Bonne soirée!";
}else {$heure= "Bonne nuit!";
}
echo $heure;
?>
</p>
</body>
</html>
