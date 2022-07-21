<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "bpi");
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login.php');
  }

  $fprojects = mysqli_query($db, "SELECT * FROM project_tbl WHERE featured='Yes'");
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

                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>

                <li class="nav-item"><a class="nav-link" href="law.php">Brgy Laws</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">About Us</a>
                      <a class="dropdown-item" href="services.php">Services</a>
                    </div>
                </li>
                
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Feedback</a></li>
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Tao ang Una sa</h4>
            <h2>Barangay Uno</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Malinis at Ligtas sa</h4>
            <h2>Barangay Uno</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Maganda at Masaya sa</h4>
            <h2>Barangay Uno</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Projects</h2>
              <a href="projects.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <?php
          while ($row = mysqli_fetch_array($fprojects)) {
          echo"<div class='col-md-4'>";
            echo"<div class='product-item'>";
              echo"<a href='projects.php'><img src='../admin/images/".$row['image']."' ></a>";
              echo"<div class='down-content'>";
                echo"<a href='projects.php'><h4>".$row['p_title']."</h4></a>";

                echo"<h6>".$row['status']."</h6>";

                echo"<p>".$row['p_description']."</p>";

                echo"<small>";
                     echo"<strong title='Available'><i class='fa fa-calendar'></i>".$row['start_date']."</strong> &nbsp;&nbsp;&nbsp;&nbsp;";
                     echo"<strong title='Nights><i class='fa fa-cube'></i>".$row['end_date']."</strong> &nbsp;&nbsp;&nbsp;&nbsp;";
                echo"</small>";
              echo"</div>";
            echo"</div>";
          echo"</div>";
          }
          ?>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Welcome to BARANGAY UNO. We're dedicated to providing you the best of experience in life, with a focus on serving the community. 
We're working to turn our passion for the people into a booming online platform. We hope you read and understand the information as much as we enjoy offering them to you.
</p>
              <ul class="featured-list">
                <li><a href="#">Punong Barangay</a></li>
                <li><a href="#">Sangguniang Barangay Member</a></li>
                <li><a href="#">SK Chairperson</a></li>
                <li><a href="#">Barangay Secretary</a></li>
              </ul>
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
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