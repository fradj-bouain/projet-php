<?php
session_start();
// Vérifier que l'étudiant connecté a saisi ses codes correctement
if( !isset($_SESSION['id_employee']) ) // Accès non authentifié !
{
// Afficher un message d'erreur
 echo "Veuillez vous connecter !";
 header("Location: index.php");

 // Arrêter l'exécution de ce script
 exit();
}


// Récupérer l'id à modifier
$id =$_SESSION['id_employee'];
// Connexion à la bdd
include('bd.php');
// Récupérer toutes les données de l'étudiant relatif à l'ID récupéré
$q = "SELECT * FROM notes WHERE id = $id";
$res = $cnx->query($q);
$etd = $res->fetch(); // Ceci est UN SEUL étudiant
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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>
<style >
  
body{
    background-image: url(img/bg1.jpeg);
        background-repeat: no-repeat;
  background-attachment: fixed;
     opacity: 1;
     background-size: 100% 100%;

 }
    .header-area{
        background-color:#424242;
  background-attachment: fixed;
     opacity: 0.7;
     background-size: 100% 100%;

    }
</style>

<body>
    <!-- Search Wrapper Area Start -->

    <!-- Search Wrapper Area End -->
<h1 style="background-color: black ; color: white ; margin-bottom: -1px"><span style="color: red">G</span>ESTION_<span style="color: red">E</span>MPLOYEE</h1>
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
<header class="header-area clearfix" style="max-width: 18% ">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
               <div class="" > <img src="img/logo2.png" style="width:190%; height:150px ;margin-left: -10px ; margin-bottom: -40px "></div><br>

            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav" style="margin-top: -50px">
                <ul>
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li class="active"><a href="Profile.php">My Profile </a></li>
                </ul>
            </nav>
            <!-- Button Group -->
         
            <!-- Cart Menu -->
            

  <!-- Social Button -->
           
 
               <div class="amado-btn-group mt-30 mb-100" >
                <a href="logout.php" class="btn amado-btn mb-15" style="margin-top: 180px" >Logout</a>
               
            </div>
          
        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">
<p style="font-size: 50px; color: white; text-decoration: underline;"> My Profile </p>

                            <div class="cart-title">
                                <h2></h2>
                            </div>

                            <form  action="modifadmin-sql-action.php" method="POST"  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="name" class="form-control" id="name"  placeholder=" Name" required>
                                    </div>
                                   
                                  
                                    <div class="col-12 mb-3">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" >
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <input type="text" name="password" class="form-control" id="password" placeholder="Password" >
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $etd['id'] ?>">

                                   <input type="submit" class="btn amado-btn w-100" name="save" value="Modify" >
                                </div>
                            </form>
                        </div>
                    </div>
         
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->

   
                <!-- Single Widget Area -->
              

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