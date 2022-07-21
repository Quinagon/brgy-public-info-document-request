<?php 

  $db = mysqli_connect("localhost", "root", "", "brgyinfo");

  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  $profilesql = "SELECT * FROM tbladmin_staff WHERE firstname='".$_SESSION['username']."' LIMIT 1";
  $rs = mysqli_query($db, $profilesql);

  



?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Brgy. Public Information</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Barangay Uno <em>Public Information</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>

                <li class="nav-item"><a class="nav-link" href="law.php">Brgy Laws</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">About Us</a>
                      <a class="dropdown-item" href="services.php">Services</a>
                    </div>
                </li>
                
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <?php  if (isset($_SESSION['username'])) : ?>
                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="account.php">Profile</a>
                      <a class="dropdown-item" href="../logout.php">Logout</a>
                    </div>
                </li>
                <?php endif ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Live, laugh and love in</h4>
              <h2>Barangay Uno</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Profile Information</h2>
            </div>
            <?php
            while($row = mysqli_fetch_array($rs)) {
              echo"<p>Name</p>";
              echo"<h5>".$row['firstname']. ' '.$row['middlename']." ".$row['lastname']."</h5>";
              echo"<hr>";
              echo"<br>";
              echo"<p>Birthday</p>";
              echo"<h5>".$row['birthday']."</h5>";
              echo"<hr>";
              echo"<br>";
               echo"<p>Email</p>";
              echo"<h5>".$row['email']."</h5>";
              echo"<hr>";
              echo"<br>";
               echo"<p>Contact Number</p>";
              echo"<h5>".$row['contactno']."</h5>";
              echo"<hr>";
              echo"<br>";
              echo"<p>Gender</p>";
              echo"<h5>".$row['gender']."</h5>";
              echo"<hr>";
              echo"<br>";
              echo"<p>Address</p>";
              echo"<h5>".$row['address']."</h5>";
              echo"<hr>";
              echo"<br>";
             
             
            }
            ?>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2021 BARANGAY UNO</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
