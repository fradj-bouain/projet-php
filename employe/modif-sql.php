<?php
// Récupérer l'id à modifier
$id = $_GET['id'];
// Connexion à la bdd
include('bd.php');
// Récupérer toutes les données de l'étudiant relatif à l'ID récupéré
$q = "SELECT * FROM formulaire WHERE id = $id";
$res = $cnx->query($q);
$etd = $res->fetch(); // Ceci est UN SEUL étudiant
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Modifier un employee</title>
</head>
<body>
 <h1 style="margin-left: 25%">Modifier une fiche employee</h1>
 <div class="creer" style="margin-top: 5%">
 <form action="modif-sql-action.php" enctype="multipart/form-data">
 	<fieldset >
		<legend>Entree les nouvelles coordonnee d'Employee</legend>
 ID : <?php echo $id; ?><br/>
 Nom : <input type="text" name="nom" value="<?php echo $etd['nom'] ?>"></br></br>
 Prénom : <input type="text" name="pr" value="<?php echo $etd['prenom'] ?>" required="required"><br><br>
 Date de Naissance : <input type="date" name="date" value="<?php echo $etd['dates'] ?>" required="required"><br><br>
 Metier : <input type="text" name="metier" value="<?php echo $etd['metier'] ?>" required="required"><br><br>
 file : <input type="file" name="image" value="<?php echo $etd['file'] ?>" ><br><br>
 Description : <br><textarea name="description" value="<?php echo $etd['description'] ?>" style="height: 150px ; width: 650px; color: black;"></textarea><br><br>
       <input type="hidden" name="id" value="<?php echo $etd['id'] ?>"">
       <input type="submit" class="form-control btn btn-success" name="Modifier" value="Modifier" >
</fieldset>
 </form>
</div>
</body>
</html>