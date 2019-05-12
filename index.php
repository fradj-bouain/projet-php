<?php 

session_start();
// Vérifier que l'étudiant connecté a saisi ses codes correctement
if( !isset($_SESSION['id_employee']) ) // Accès non authentifié !
{
// Afficher un message d'erreur

 echo "Veuillez vous connecter !";
 header("Location: login/index.php");

 // Arrêter l'exécution de ce script
 exit();
}

include('bd.php'); 
 // Récupérer les notes depuis la BdD :
 // 1. Préparer la requête
 $sql_notes = "SELECT * from form ";
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Employee_gest</title>

    <!-- Favicon  -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>
<style >
  
body{
 max-width: 100%

 }
    .header-area{
        background-color:#424242;
  background-attachment: fixed;
     opacity: 0.7;
     background-size: 100% 100%;



    }
.main-content-wrapper{background-color: #b0bec5 ;
}

.container td{max-width: 100%;

}

</style>

<body>




    <!-- Search Wrapper Area End -->
<h1 style="background-color: black ; color: white ; margin-bottom: -1px; font-size: 40px"><span style="color: red">G</span>ESTION_<span style="color: red">E</span>MPLOYEE</h1>
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix" style="">
        <!-- Mobile Nav (max width 767px)-->
    

        <!-- Header Area Start -->
        <header class="header-area clearfix" style="max-width: 18%; 
        background-repeat: no-repeat;
  background-attachment: fixed;
    
     ">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <div class="" > <img src="img/logo2.png" style="width:190%; height:150px ;margin-left: -10px ; margin-bottom: -80px "></div><br>
                          

            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Profile.php">My Profile </a></li>
                </ul>
            </nav>
            <!-- Button Group -->
         
            <!-- Cart Menu -->
            
              
  <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content" style="margin-top: 40px">
                        <form method="post" action="index.php">
                                             <img src="img/core-img/search.png" alt=""> Search

                            <input type="search" name="id_search" id="search" placeholder="Type your keyword...">
                        </form>
                    </div>
                </div>
            </div>
      
</div>
  <!-- Social Button -->
           
 
               <div class="amado-btn-group mt-30 mb-100">
                <a href="logout.php" class="btn amado-btn mb-15">Logout</a>
               
            </div>
          
        </header>
        
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
       
 
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
   
   <table  id="datatable" class="table table-striped table-bordered" cellspacing="0"  width="100%" style="max-width: 82% ; background-color: #fff">



     <?php if(!empty($_POST['id_search'])) {  $idc=0; 
      foreach ($les_notes as $item ) {
        
        $idc++ ;
if($item['id']==$_POST['id_search']  ){ 


  ?>


  <thead>
            <tr>
              <th>Photo</th>
              <th>Full_Name</th>
              <th>Office</th>
              <th>address</th>
              <th>Start date</th>
              <th>Salary</th>
              <th style="width:25%">Progress</th>

                                <th>Edit</th>
                                 <th>Delete</th>
            </tr>
          </thead>

<tbody>
       <tr >
      <td class="avatar"> <img src="<?php  echo  "img/".$item['image']?>"></td>
      <td><?php echo $item['nom']."_".$item['prenom'] ;?> </td>
      <td><?php echo $item['metier'] ;?> </td>
      <td><?php echo $item['address'] ;?></td>
      <td><?php echo $item['dates'] ;?></td>
      <td><?php echo $item['salary']." $" ;?></td>
       <td>
                                                <div class="progress">
                                                    <div style="width: <?php echo $item['phone'] ;?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="red progress-bar">
                                                    <span><?php echo $item['phone'] ;?>%</span>
                                                   </div>
                                                </div>
                                            </td>
     
                   
      <td><?php  echo " <a href='modif-sql.php?id=" . $item['id'] . "'>" ?>
      <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"> 
      </span></button></p></a></td> 


      <td><?php  echo "<a href='supp-sql.php?id=" . $item['id'] . "'>" ?>
      <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"> 
      </span></button></p></a></td>
   

    </tr>
    
  </tbody>


    
 <?php exit;} else  if( $idc ==$nbr_etudiants){echo "not found this id "; exit;}}




}




    else{ ?> 



     <thead>
            <tr>
              <th>Photo</th>
              <th>Full_Name</th>
              <th>Office</th>
              <th>address</th>
              <th>Start date</th>
              <th>Salary</th>
              <th style="width:25%">Progress</th>

                                <th>Edit</th>
                                 <th>Delete</th>
            </tr>
          </thead>
  <?php foreach ($les_notes as $item ) {?>
  <tbody>
    <tr >
      <td class="avatar"> <img src="<?php  echo  "img/".$item['image']?>"></td>
      <td><?php echo $item['nom']."_".$item['prenom'] ;?> </td>
      <td><?php echo $item['metier'] ;?> </td>
      <td><?php echo $item['address'] ;?></td>
      <td><?php echo $item['dates'] ;?></td>
      <td><?php echo $item['salary']." $" ;?></td>
       <td>
                                                <div class="progress">
                                                    <div style="width: <?php echo $item['phone'] ;?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="red progress-bar">
                                                    <span><?php echo $item['phone'] ;?>%</span>
                                                   </div>
                                                </div>
                                            </td>

     
     
               
      <td><?php  echo " <a href='modif-sql.php?id=" . $item['id'] . "'>" ?>
      <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"> 
      </span></button></p></a></td>            



      <td><?php  echo "<a href='supp-sql.php?id=" . $item['id'] . "'>" ?>
      <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"> 
      </span></button></p></a></td>
  
    
   

    </tr>
    
  </tbody>

    <?php }   }?>
</table>

            </div>

            </div>

     


    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>



</body>


</html>
