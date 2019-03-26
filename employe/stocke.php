<?php
// Connexion à la bdd
include('bd.php');
// Vérifier si le formulaire a été envoyé
if(isset($_POST['valider']))
{ 
$email=$_POST['email'];
$mtp=md5($_POST['mtp']);
$nom=$_POST['nom'];
$pre=$_POST['pr'];
$date=$_POST['date'];
$metier=$_POST['metier'];
$description=$_POST['description'];
$file=$_FILES['image']['name'];
 // Processus de sauvegarde dans la bdd en DEUX étapes :
 // 1 . Préparer la requête SQL
 $donn = "INSERT INTO formulaire( id,nom, prenom,email,psd,dates,metier,description,file) VALUES(NULL,'$nom','$pre','$email','$mtp','$date','$metier','$description','$file')";
 // 2. Exécuter la requête SQL
 $cnx->exec($donn);
 header("Location: employes.php");
}
?>