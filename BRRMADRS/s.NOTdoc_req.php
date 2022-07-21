<!DOCTYPE html>
<html lang = "en" dir="ltr">
    <head>
    <meta charset="utf-8">
        <title>Resident Profile</title>
        <link rel="stylesheet" href="dashboard_residents.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>
    <body>
        
        <input type="checkbox" id="check"> <!-- this one's for the drawer -->
    
        <!--header area start uwu-->
        <header>
            <!-- for drawer -->
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i> <!-- icon for drawer -->
            </label>
            
            <div class="left_area">
                <h3>Resident <span>Profile</span></h3>
            </div>
            
            <div class="right_area">
                <a href = "#" class="logout_btn">Logout</a>
            </div>  
        </header>
        <!--header area end uwu-->
        
        
        <!--sidebar area start uwu-->
        <div class="sidebar">
            <center>
            <img src="jane.jpg" width="200" height="200" alt="" class = "profile_image">
                <h4>Jane<span> / Resident</span></h4>
            </center>
            <a href = "#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href = "#"><i class="fas fa-cogs"></i><span>Account Settings</span></a>
        </div>
        <!--sidebar area end uwu-->
        
        <div class="content">
        
            <!-- transparent container -->
            <section>
            <div class="box">
                <h2>We're getting there...</h2>
                <p>What document are you requesting?</p>
                
                <a href = "lucky.php">
                <div class="card card1">
                    <h5>File Complaints</h5> 
                </div>
                </a>
                
                <a href="docu_req.php">
                <div class="card card2">
                    <h5>Document Request</h5>
                </div>
                </a>
                
            </div>
        </section> 
        </div>
        
        
    </body>
</html>















