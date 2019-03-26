<?php
// Connexion à la bdd
include('bd.php');
// Vérifier si le formulaire a été envoyé

?>
<!DOCTYPE html>
<html>
<head>
<title>employes</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Ajouter un employee</h1>


<a href="creation.php" ><input type="submit"  class="form-control btn btn-success" style="width: 50%" name="valider" value="Ajouter un employee"></a>
<a href="login/index.php"><input type="submit"  class="form-control btn btn-default" style="width: 50% ; float: left;" name="valider" value="Login"></a>


<hr/>

Ci-dessous la liste des employes que vous avez saisies : <br/>
<h4><?php // Ouvrir une session
session_start();
// Vérifier que l'étudiant connecté a saisi ses codes correctement
if( isset($_SESSION['id_etudiant']) ) // Accès non authentifié !
echo "<a href="."logout.php".">"."Déconnexio";
// Afficher un message d'erreur
 ?></h4>
<?php
 // Récupérer les notes depuis la BdD :
 // 1. Préparer la requête
 $sql_notes = "SELECT * from formulaire ";
 // 2. Lancer la requête
 $res_notes = $cnx->query($sql_notes);
 //$res_notes = $cnx→query($sql_notes);
 // Extraire (fetch) toutes les lignes (enregistrement, rows)
 $les_notes = $res_notes->fetchAll(); // Ceci est un tableau de tableaux associatifs
 // Calculer le nombre d'étudiants
 $nbr_etudiants = count( $les_notes);

 if( empty($nbr_etudiants ) ){
 // Afficher un message si la liste est vide
 echo "<b>Aucune employee pour le moment !</b>";
 exit();
 }



				
?>

<div class="container-fluid bg-3 text-center" style="display: table; flex:1;">    
  <h1>Les employes</h1><br>
   
  
  <div class="row" style="float: left;" >
  	<?php  foreach ($les_notes as $item ) {?>
    <div class="col-sm-4" style="margin: 30px 0px 10px 0px ; border:5px solid transparent ">
    	<img src="<?php  echo  $item['file']   ?>"  width="100%" height="350"/> 
      	<h3 style="color:white ;"><?php echo "le metier est ".$item['metier'];?></h3><br>
      <p style="color: white"><?php echo $item['description'];?></p>
      <p style="color: #F7FE2E ; text-align:justify;"><?php echo "le nom est ". $item['nom'];?></p>
      
       <?php  echo "<a href='supp-sql.php?id=" . $item['id'] . "'>" ?>
 <input type="submit" class="form-control btn btn-danger" name="Supprimer" value="Supprimer" >
 
 </a>
      
      <?php  echo " <a href='dashboard.php?id=" . $item['id'] . "'>" ?><input type="submit" class="form-control btn btn-default" name="Modifier" value="Modifier" ></a>
    </div>
   	<?php	}?>
  </div>

</div>
				




</body>
</html>


