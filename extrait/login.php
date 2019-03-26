<?php
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<script >
		function create() {
			document.forms['f'].action ='creation.php';
			document.forms['f'].submit();
		}
	</script>
</head>
<body>
<form name="f" action="verif2.php" method="POST">
	<fieldset>
		<legend>Login</legend>
		UserName : <input type="text" name="username" required="required"><br><br>
		password : <input type="password" name="mtp" required="required"><br><br>
		<input type="submit" name="valider" value="Valider">
		<input type="submit" name="cc" value="Création Nouveau Compte" onclick="create();">
	</fieldset>
</form>
</body>
</html>