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
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
// Récupérer les données de l'étudiant connecté depuis la bdd
//$res = $cnx->query("SELECT * FROM notes WHERE id=$id_etudiant ");
$res=$cnx->query("SELECT * FROM notes WHERE id=$id_etudiant");
$etd = $res->fetch();

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Espace Etudiant - Dashboard</title>

</head>
<body>
 <h1>Espace Etudiant - Dashboard</h1>
 Votre moyenne est : <?php echo $etd['note'] ?>
 <hr/>

 <form action="dashboard_action.php" method="post">
 Votre nom : <input type="text" name="nom" required="required"
value="<?php echo $etd['nom'] ?>"> <br>
Votre Mot de passe : <input type="text" name="mdp" required="required" value="<?php echo $etd['mdp'] ?>"><br>
 <input type="hidden" name="id" value="<?php echo $id_etudiant; ?>">
 <input type="submit" value="Modifier" name="modifier" >
</form>
<a href="logout.php">Déconnexion
</body>
</html>
