<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "bpi");


  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login.php');
  }


  $fprojects = mysqli_query($db, "SELECT * FROM project_tbl");
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

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

                <li class="nav-item active"><a class="nav-link" href="projects.php">Projects</a></li>

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
                  <li class="nav-item dropdown ">
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
              <h4>Barangay Uno</h4>
              <h2>Projects</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Projects</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
            <?php
              echo"<table id='table' style='width:100%'>";
                echo"<tr>";
                  echo"<th>Title</th>";
                  echo"<th>Date</th>";
                  echo"<th></th>";
                  echo"<tr>";
                while ($row = mysqli_fetch_array($fprojects)) {
                  echo"<tr>";
                    echo"<td>".$row['p_title']."</td>";
                    echo"<td>".$row['start_date']."</td>";
                    echo"<td><a class='fas fa-check-circle' href='imageupload.php?row_id=".$row['project_id']."'></td>";
                  echo"<tr>";
                }
              echo"</table>";
            ?>  
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/team_01.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">John Doe</h5>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2021 Barangay Uno</p>
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
