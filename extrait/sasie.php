<?php
// Ouvrir une session
session_start();
// Vérifier si le formulaire a été envoyé
if(isset($_POST['save']))
{
// Récupérer le nom de l'étudiant
$nom = $_POST["nom"];
// Récupérer la note de l'étudiant
$note = $_POST["note"];
// Récupérer les anciennes notes depuis la session
$les_notes = $_SESSION['sess_notes'];
// Ajouter le nouvel étudiant dans un tableau associatif
// Clé : le nom de l’étudiant, Valeur : sa moyenne
$les_notes[$nom]=$note;
// Remettre les notes dans la session
$_SESSION['sess_notes']=$les_notes;

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Moyennes</title>
</head>
<body>
<h1>Saisir une moyenne</h1>
<form action="" method="post">
Nom de l'étudiant : <input type="text" name="nom" required>
<br>
Sa moyenne : <input type="number" name="note" step="any"
required>
<br>
<input type="submit" value="Sauvegarder" name="save">
</form>
<hr/>
<h1>Les notes saisies</h1>
Ci-dessous la liste des notes que vous avez saisies : <br/>
<?php
// Récupérer les notes depuis la session
$les_notes = $_SESSION['sess_notes'];
// Si le tableau est vide afficher un message d'erreur
if(empty($les_notes))
echo "<b>Aucune note pour le moment !</b>";
{
// Afficher la liste des étudiant/note sous forme de liste ordonnée
echo " <ol>";
/*foreach ($_SESSION['sess_notes'] as $nom=>$note) {
echo "<li>$nom : $note";
}*/
foreach ($_SESSION['sess_notes'] as $nom=>$note) {
echo "<li>$nom : $note <a href='supp.php?nom=$nom'>Supprimer</a>";
}
echo "</ol>";
}
?>
</body>
</html>