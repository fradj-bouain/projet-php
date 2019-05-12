<?php
// Récupérer les données de connexion
$email = $_POST['email'];
$mdp = $_POST['mdp'];
// Connexion à la bdd
// Connexion à la bdd
include('bd.php');
// Vérifier que les codes d’accès sont corrects
//$res = $cnx->query("SELECT * FROM notes WHERE email='$email' AND mdp='$mdp'");
$res = $cnx->query("SELECT * FROM notes WHERE email='$email' AND password='$mdp'");
$etd = $res->fetch();
if ($etd){ // Les codes sont corrects
 // Ouvrir une session
 session_start();
 // Créer une variable de session appelée 'id_employer' initialisée
 // à l'identifiant de l'étudiant connecté
 $_SESSION['id_employee'] = $etd['id'];
 // Redirection vers le tableau de bord "dashboard.php"
 header("Location:index.php");
}
else { // Les codes sont faux
 echo "Erreur de connexion ! Veuillez vérifier vos code d'accès";
}
