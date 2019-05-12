<?php
include('bd.php');
// Vérifier si le formulaire a été envoyé
if(isset($_POST['save']))
{
$nom = $_POST['first_name'];
$email = $_POST['email'];
$pre = $_POST['last_name'];
$date=$_POST['date'];
$metier=$_POST['metier'];
$address=$_POST['address'];
$progress=$_POST['progress'];
$salary=$_POST['salary'];
$comment = $_POST['comment'];
$file=$_FILES['image']['name'];	
 // Processus de sauvegarde dans la bdd en DEUX étapes :
 // 1 . Préparer la requête SQL
 $sql_note = "INSERT INTO form( id,nom, prenom , email,metier,address,phone,salary,comment,dates,image) VALUES(null,'$nom','$pre','$email','$metier','$address','$progress','$salary','$comment','$date','$file')";
 // 2. Exécuter la requête SQL
 $cnx->exec($sql_note);
 header("Location: index.php");

}
?>