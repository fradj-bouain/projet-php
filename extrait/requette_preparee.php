<?php
try
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=bdd-sirine', 'root', '',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}
/*// Préparer la requête sans sa partie variable, que l'on représentera avec un marqueur sous forme de point d'interrogation
$req = $bdd->prepare('SELECT * FROM notes WHERE nom = ? ');
//exécuter la requête en appelant execute et en lui transmettant la vaeur du paramètre
$req->execute(array($_POST['nom']));
*/
/*// Préparer la requête sans sa partie variable, que l'on représentera avec un marqueur sous forme de point d'interrogation
$req = $bdd->prepare('SELECT * FROM notes WHERE nom = ? AND email= ? ');
//exécuter la requête en appelant execute et en lui transmettant la liste des paramètres
$req->execute(array($_POST['nom'], $_POST['email']));
*/
$req = $bdd->prepare('SELECT * FROM notes WHERE nom = :nom AND email=:email ');
$req->execute(array('nom' =>$_POST['nom'], 'email' =>$_POST['email']));

//Afficher les informations de cet étudiant : id, note, mdp
echo "<ul>";
while ($donnees = $req->fetch())
{
echo "<li>". $donnees['id'] . "</li> <li>".$donnees['note']."</li> <li>" .
 $donnees['mdp'] ."</li>";
}
echo "</ul>";
?>