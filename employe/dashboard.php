<?php
// Ouvrir une session
session_start();
// Vérifier que l'étudiant connecté a saisi ses codes correctement
if( !isset($_SESSION['id_etudiant']) ) // Accès non authentifié !
{
// Afficher un message d'erreur
 echo "Veuillez vous connecter !";
 // Arrêter l'exécution de ce script
 exit();
}
$id_etudiant = $_SESSION['id_etudiant'];
// Connexion à la bdd
include('bd.php');
// Récupérer les données de l'étudiant connecté depuis la bdd
//$res = $cnx->query("SELECT * FROM notes WHERE id=$id_etudiant ");
$res=$cnx->query("SELECT * FROM formulaire WHERE id=$id_etudiant");
$etd = $res->fetch();

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
 <form action="dashboard_action.php" method="post" enctype="multipart/form-data">
 	<fieldset >
		<legend>Entree les nouvelles coordonnee d'Employee</legend>
 ID : <?php echo $id_etudiant; ?><br/>
 Nom : <input type="text" name="nom" value="<?php echo $etd['nom'] ?>"></br></br>
 Prénom : <input type="text" name="pr" value="<?php echo $etd['prenom'] ?>" required="required"><br><br>
 Date de Naissance : <input type="date" name="date" value="<?php echo $etd['dates'] ?>" required="required"><br><br>
 Metier : <input type="text" name="metier" value="<?php echo $etd['metier'] ?>" required="required"><br><br>
 file : <input type="file" name="image" value="<?php echo $etd['file'] ?>" ><br><br>
 Description : <br><textarea name="description"  style="height: 150px ; width: 650px; color: black;"></textarea><br><br>
       <input type="hidden" name="id" value="<?php echo $id_etudiant; ?>">
       <input type="submit" class="form-control btn btn-success" value="Modifier" name="modifier" >
 </fieldset>
</form>
<a href="logout.php">Déconnexion
</body>
</html>
