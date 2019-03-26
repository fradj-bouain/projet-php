<?php
// Récupérer toutes les données de l'étudiant à modifier
$id = $_GET['id'];
$nom = $_GET['nom'];
$note = $_GET['note'];
$email = $_GET['email'];
$mdp = $_GET['mdp'];
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
// Préparer la requête SQL de mise à jour
$q = "UPDATE notes SET nom='$nom', note=$note , mdp='$mdp',email='$email' WHERE id = '$id'";
// Exécuter la requête SQL
$cnx->exec($q);
// Redirection à la page principale
header("Location: notes-sql2.php");