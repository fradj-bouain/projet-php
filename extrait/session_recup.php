<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
// Echo session variables that were set on previous page
echo "Votre nom est:" . $_SESSION["nom"] . ".<br>";
echo "Votre prénom est: " . $_SESSION["prenom"] . ".";
?>
</body>
</html>