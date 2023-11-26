<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
  /*scroll bar*/
html::-webkit-scrollbar {
  width: 0.5rem;
}

html::-webkit-scrollbar-track {
  background: white;
  border-radius: 5px;
}

html::-webkit-scrollbar-thumb {
  background: #3291e6;
  border-radius: 5px;

}
</style>
<body>

 
<!-- ======= Header ======= -->
  <header id="header" class="fixed">
    <div class="container d-flex align-items-center">

      <p class="logo me-auto"><a href="index.php">Vaccination Center</a></p>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <!-- <li><a class="nav-link scrollto" href="#departments">Departments</a></li> -->
<!-- search for hospitals -->


 <li><a class="nav-link scrollto" href="vaccination.php">Search For Hospital</a></li>



<!-- search for hospitals -->
          <li><a class="nav-link scrolltop" href="contact.php" >Contact</a></li>
          <?php
            error_reporting(0);     
            if($_SESSION['users_login'] != null)
            {
                echo '<li class="nav-link scrollto">
                <span class="nav-link"> Hi '.$_SESSION['users_login'].' </span>
                
                </li>';
                
                echo '<li class="nav-link scrollto">
                <a class="nav-link" href="logout.php">logout</a>
            </li>';
            }
            else
            {
                echo '<li class="nav-link scrollto">
                <a class="nav-link" href="login.php">login</a>
            </li>';
            }
        ?>

<!-- my profile -->

<?php
      if($_SESSION['users_login'] != null)
      {
        echo
              
          '<a href="profile.php"><span class="d-none d-md-inline" style="margin-left: 10px;">Profile</a>
      
      ';
      }
      else{
        echo ""; 
      }

      ?>
      
      </ul>
        </nav>


        <!-- signup as a hospital -->


        <?php
      if($_SESSION['users_login'] != null)
      {
          echo "";
              
          
      }
      else{
        echo '<a href="./hospital/login.php" class="appointment-btn scrollto">Sign Up As A Hospital</a>'; 
      }

      ?>

        <!-- signup as a hospital -->




      <!-- <a href="./hospital/login.php" class="appointment-btn scrollto">Sign Up As A Hospital</a>/ -->
    </div>
   
  </header>
<!-- End Header -->

