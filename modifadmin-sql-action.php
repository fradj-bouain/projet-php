<?php
// Récupérer toutes les données de l'étudiant à modifier
if(isset($_POST['save'])){
$id = $_POST['id'];
$nom = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
include('bd.php');
// Préparer la requête SQL de mise à jour
$q = "UPDATE notes SET nom='$nom',email='$email' , password='$password'
 WHERE id = '$id'";
// Exécuter la requête SQL
$cnx->exec($q);

// Redirection à la page principale
header("Location: index.php");


}