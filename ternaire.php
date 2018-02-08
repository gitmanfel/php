<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Form get</title>
</head>
<body>
<?php
$KO = "Désolé, vous ne remplissez pas les critères de sélection.";
$OK = "Bonjour, bienvenue parmi nous!";
$reponse = ($_GET["age"] >= "21" && $_GET["age"] <= "40" && $_GET["genre"] == "fe") ? $OK : $KO ;
echo "$reponse";
?>
<br><br>
<a href="sans else.php">Retour</a>

</body>
</html>
