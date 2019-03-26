<?php
// Ouvrir une session
session_start();
// Vérifier que l'étudiant connecté a saisie ses codes correctement
if( isset($_POST['id']) ) 
{
// Récupérer le nom et l'id de l'étudiant connecté
$id = $_POST['id'];
$nom = $_POST['nom'];
$pre=$_POST['pr'];
$date=$_POST['date'];
$metier=$_POST['metier'];
$description = $_POST['description'];
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
$file=$_FILES['image']['name'];

// Connexion à la bdd
include('bd.php');
// Préparer la requête SQL de mise à jour
 
// Exécuter la requête SQL
$cnx->exec("UPDATE formulaire SET nom='$nom',prenom='$pre',dates='$date',metier='$metier',description='$description',file='$file' WHERE id = '$id'");
// Redirection à la page principale
header("Location: employes.php");
}
?>