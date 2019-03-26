<?php
$nom = $_GET['nom'];
// Ouvrir une session
session_start();
// Récupérer les notes depuis la session
$les_notes = $_SESSION['sess_notes'];
// Supprimer le nom
unset($les_notes[$nom]);

// Remettre les notes dans la session
$_SESSION['sess_notes']=$les_notes;

// Redirection à la page principale
header("Location: sasie.php");