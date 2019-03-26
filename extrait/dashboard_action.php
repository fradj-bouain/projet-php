<?php
// Ouvrir une session
session_start();
// Vérifier que l'étudiant connecté a saisie ses codes correctement
if( isset($_POST['id']) ) 
{
// Récupérer le nom et l'id de l'étudiant connecté
$id=$_POST['id'];
$nom=$_POST['nom'];
$mdp = $_POST['mdp'];
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
// Maj à le nom
$cnx->exec("UPDATE notes SET nom='$nom' , mdp='$mdp' WHERE id = '$id'");
// Redirection à la page principale
header("Location: ../web_avance/notes-sql2.php");
}
?>