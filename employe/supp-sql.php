<?php
// Récupérer l'id à supprimer
$id = $_GET['id'];
// Connexion à la bdd
include('bd.php');
// Supprimer l'enregistrement
$cnx->exec("DELETE FROM formulaire where id=$id");
// Redirection à la page principale
header("Location: employes.php");