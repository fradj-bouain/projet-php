<?php
// Connexion à la bdd
$db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-sirine";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
if((isset($_POST['username'])&& !empty($_POST['mtp'])) && (!empty($_POST['mtp'])))
{
	$a=$_POST['username'];
	$b=$_POST['mtp'];
	$req="select * from user where username ='$a 'and motpass ='$b'";
	$res = $cnx->query($req);
 	header("Location: notes-sql.php");
   
}
else
{
echo "<script> alert('Incorrecte login et password')</script>";
}
?>