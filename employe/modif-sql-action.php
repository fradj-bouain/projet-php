<?php
// Récupérer toutes les données de l'étudiant à modifier
$id = $_GET['id'];
$nom = $_GET['nom'];
$pre=$_GET['pr'];
$date=$_GET['date'];
$metier=$_GET['metier'];
$file=$_FILES['image']['name'];
$description = $_GET['description'];
// Connexion à la bdd
include('bd.php');
// Préparer la requête SQL de mise à jour
$q = "UPDATE formulaire SET nom='$nom',prenom='$pre',dates='$date',metier='$metier',file='$file', description='$description' WHERE id = '$id'";
// Exécuter la requête SQL
$cnx->exec($q);
// Redirection à la page principale
header("Location: employes.php");