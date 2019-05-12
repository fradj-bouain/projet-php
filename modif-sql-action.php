<?php
// Récupérer toutes les données de l'étudiant à modifier
if(isset($_POST['modifier'])){
$id = $_POST['id'];
$nom = $_POST['first_name'];
$email = $_POST['email'];
$pre = $_POST['last_name'];
$date=$_POST['date'];
$metier=$_POST['metier'];
$address=$_POST['address'];
$progress=$_POST['progress'];
$salary=$_POST['salary'];
$comment = $_POST['comment'];
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
$file=$_FILES['image']['name'];
// Connexion à la bdd
include('bd.php');
// Préparer la requête SQL de mise à jour
$q = "UPDATE form SET nom='$nom',prenom='$pre',email='$email',metier='$metier',address='$address',phone='$progress',salary='$salary',comment='$comment',dates='$date',image='$file' WHERE id = '$id'";
// Exécuter la requête SQL
$cnx->exec($q);

// Redirection à la page principale
header("Location: index.php");


}