<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["nom"] = "ZIDI";
$_SESSION["prenom"] = "Sirine";
echo "Session variables are set.";
?>
</body>
</html>