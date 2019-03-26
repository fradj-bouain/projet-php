<!DOCTYPE html>
<html>
<head>
	<title>Création Nouveau Employee</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 style="margin-left: 35%">Nouveau Employee</h1>
	
	<div class="creer" style="margin-top: 5% ">
		<a href="Employes.php" class="btn btn-info btn-lg" style="margin-left: 50%;margin-top: 50px">
          <span class="glyphicon glyphicon-log-out"></span> Return
        </a>
<form  action="stocke.php" method="POST"  enctype="multipart/form-data">
	<fieldset>
		<legend>Coordonnees Employee</legend>
		Email : <input type="email" name="email" required="required"><br><br>
		Mot de Passe : <input type="password" name="mtp" required="required"><br><br>
		Nom : <input type="text" name="nom" required="required"><br><br>
		Prénom : <input type="text" name="pr" required="required"><br><br>
		Date de Naissance : <input type="date" name="date" required="required"><br><br>
		Metier : <input type="text" name="metier" required="required"><br><br>
		file : <input type="file" name="image" ><br><br>
		Description : <br><textarea name="description" style="height: 150px ; width: 650px; color: black;"></textarea><br><br>

		<input type="submit" class="form-control btn btn-success" name="valider" value="Créer" >
	</fieldset>
</form>

</div>
</body>
</html>