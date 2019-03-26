<?php
// Récupérer les données de connexion
$email = $_POST['email'];
$mdp = $_POST['mdp'];
// Connexion à la bdd
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
// Vérifier que les codes d’accès sont corrects
//$res = $cnx->query("SELECT * FROM notes WHERE email='$email' AND mdp='$mdp'");
$res = $cnx->query("SELECT * FROM notes WHERE email='$email' AND mdp='$mdp'");
$etd = $res->fetch();
if ($etd){ // Les codes sont corrects
 // Ouvrir une session
 session_start();
 // Créer une variable de session appelée 'id_etudiant' initialisée
 // à l'identifiant de l'étudiant connecté
 $_SESSION['id_etudiant'] = $etd['id'];
 // Redirection vers le tableau de bord "dashboard.php"
 header("Location: dashboard.php");
}
else { // Les codes sont faux
 echo "Erreur de connexion ! Veuillez vérifier vos code d'accès";
}
