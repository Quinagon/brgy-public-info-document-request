<!DOCTYPE html>
<html lang = "en" dir="ltr">
    <head>
    <meta charset="utf-8">
        <title>Admin Profile</title>
        <link rel="stylesheet" href="dashboard_Admin_site.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>
    <body>
        <?php
        session_start();
        ?>
        <input type="checkbox" id="check"> <!-- this one's for the drawer -->
    
        <!--header area start uwu-->
        <header>
            <!-- for drawer -->
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i> <!-- icon for drawer -->
            </label>
            
            <div class="left_area">
                <h3>Admin <span>Profile</span></h3>
            </div>
            
            <div class="right_area">
                <a href = "logout.php" class="logout_btn">Logout</a>
            </div>  
        </header>
        <!--header area end uwu-->
        
        
        <!--sidebar area start uwu-->
        <div class="sidebar">
            
            <center>
            <img src="jennifer.jpg" width="200" height="200" alt="" class = "profile_image">
                <h4><?php echo $_SESSION['username']?><span> / Admin</span></h4>
            </center>
            
            <a href = "#"><i class="fas fa-desktop"></i><span>Home</span></a>
            <a href = "#"><i class="fas fa-cogs"></i><span>Account Settings</span></a>
            <a href = "Demography_Reg.php"><i class="fas fa-users"></i><span>Register Account</span></a>
        
        </div>
        <!--sidebar area end uwu-->
        
        <div class="content">
        
            <!-- transparent container -->
            <section>
            <div class="box">
                <h2>Welcome.</h2>
                <p>Let's get started.</p>
                
                <a href = "#"> <!--- palagay nalang pu ng link ditu --->
                <div class="card card1">
                    <h5>Generate Report</h5> 
                </div>
                </a>
                    
                <a href = "staff_info.php"> 
                <div class="card card2">
                    <h5>Staff Information</h5>
                </div>
                </a>
                
            </div>
        </section> 
        </div>
        
        
    </body>
</html>















