<?php
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
// Vérifier si le formulaire a été envoyé
if(isset($_POST['save']))
{
 // Récupérer le nom de l'étudiant
 $nom = $_POST['nom'];
 // Récupérer la note de l'étudiant
 $note = $_POST['note'];
 $email = $_POST['email'];
 $mdp = $_POST['mdp'];
 // Processus de sauvegarde dans la bdd en DEUX étapes :
 // 1 . Préparer la requête SQL
 $sql_note = "INSERT INTO notes(id, nom, note,mdp,email) VALUES(NULL,'$nom','$note','$mdp','$email')";
 // 2. Exécuter la requête SQL
 $cnx->exec($sql_note);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Moyennes</title>
<meta charset="utf-8">
</head>
<body>
<h1>Saisir une moyenne</h1>
<form action="" method="post">
Nom de l'étudiant : <input type="text" name="nom" required="required"> <br>
Sa moyenne : <input type="number" name="note" step="any" required="required"><br>
Email : <input type="email" name="email" step="any" required="required"><br>
Mot de Passe : <input type="password" name="mdp" step="any" required="required"><br>

<input type="submit" value="Sauvegarder" name="save">
</form>
<hr/>
<h1>Les notes saisies</h1>
Ci-dessous la liste des notes que vous avez saisies : <br/>
<?php
 // Récupérer les notes depuis la BdD :
 // 1. Préparer la requête
 $sql_notes = "SELECT * from notes ";
 // 2. Lancer la requête
 $res_notes = $cnx->query($sql_notes);
 //$res_notes = $cnx→query($sql_notes);
 // Extraire (fetch) toutes les lignes (enregistrement, rows)
 $les_notes = $res_notes->fetchAll(); // Ceci est un tableau de tableaux associatifs
 // Calculer le nombre d'étudiants
 $nbr_etudiants = count( $les_notes);

 if( empty($nbr_etudiants ) ){
 // Afficher un message si la liste est vide
 echo "<b>Aucune note pour le moment !</b>";
 }
else
{
 // Afficher la liste des étudiant/note sous forme de liste ordonnée
 echo "Il y $nbr_etudiants étudiants ";
 echo "<ol>";
foreach ($les_notes as $item) {
//echo "<li>" . $item['nom'] . " : " . $item['note'];
echo "<li>" . $item['nom'] . " : " . $item['note'] ." ".$item['email']." ".$item['mdp'].
" | <a href='supp-sql.php?id=" . $item['id'] . "'>
 Supprimer </a> | <a href='modif-sql2.php?id=".$item['id'] . "'> Modifier </a>";
}
echo "</ol>";
}

echo"<table border='2'>";
	echo"<tr>";
	echo "<th> ID </th>";
	echo "<th> Nom </th>";
	echo "<th> Note </th>";
	echo "<th> Mot de Passe</th>";
	echo "<th> Email </th>";
	echo "</tr>";
	echo "<tr>";
		foreach ($les_notes as $item ) {
			echo "<td>".$item['id']."</td>";
			echo "<td>".$item['nom']."</td>";
			echo "<td>".$item['note']."</td>";
			echo "<td>".$item['mdp']."</td>";
			echo "<td>".$item['email']."</td>";
			echo "</tr>";
		}
				echo"</table>";
?>

</body>
</html>
