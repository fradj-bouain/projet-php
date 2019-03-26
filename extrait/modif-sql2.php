<?php
// Récupérer l'id à modifier
$id = $_GET['id'];
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
// Récupérer toutes les données de l'étudiant relatif à l'ID récupéré
$q = "SELECT * FROM notes WHERE id = $id";
$res = $cnx->query($q);
$etd = $res->fetch(); // Ceci est UN SEUL étudiant
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Modifier un étudiant</title>
</head>
<body>
 <h1>Modifier une fiche étudiant</h1>
 <form action="modif-sql-action2.php">
 ID : <?php echo $id; ?><br/>
 Nom : <input type="text" name="nom" value="<?php echo $etd['nom'] ?>"></br>
 Note : <input type="text" name="note" value="<?php echo $etd['note'] ?>"></br>
 Email : <input type="text" name="email" value="<?php echo $etd['email'] ?>"></br>
 Mot de Passe : <input type="password" name="mdp" value="<?php echo $etd['mdp'] ?>"></br>
 <input type="hidden" name="id" value="<?php echo $etd['id'] ?>"">
 <input type="submit" value="Modifier" name="modifier">
 </form>
</body>
</html>