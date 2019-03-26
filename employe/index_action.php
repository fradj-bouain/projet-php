<?php
// Récupérer les données de connexion
$email = $_POST['email'];
$mdp = $_POST['mdp'];
// Connexion à la bdd
// Connexion à la bdd
include('bd.php');
// Vérifier que les codes d’accès sont corrects
//$res = $cnx->query("SELECT * FROM notes WHERE email='$email' AND mdp='$mdp'");
$res = $cnx->query("SELECT * FROM formulaire WHERE email='$email' AND psd='$mdp'");
$etd = $res->fetch();
if ($etd){ // Les codes sont corrects
 // Ouvrir une session
 session_start();
 // Créer une variable de session appelée 'id_etudiant' initialisée
 // à l'identifiant de l'étudiant connecté
 $_SESSION['id_etudiant'] = $etd['id'];
 // Redirection vers le tableau de bord "dashboard.php"
 header("Location:employes.php");
}
else { // Les codes sont faux
 echo "Erreur de connexion ! Veuillez vérifier vos code d'accès";
}
