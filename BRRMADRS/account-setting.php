<!DOCTYPE html>
<html lang = "en" dir="ltr">
    <head>
    <meta charset="utf-8">
        <title>Admin Profile</title>
        <link rel="stylesheet" href="dashboard_temp.css">
        <link rel="stylesheet" href="style_dash_accsetting.css">
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
                <h3>Admin<span>Profile</span></h3>
            </div>
            
            <div class="right_area">
                <a href = "#" class="logout_btn">Logout</a>
            </div>  
        </header>
        <!--header area end uwu-->
        
        
        <!--sidebar area start uwu-->
        <div class="sidebar">
            <center>
            <img src="img/jane.jpg" width="200" height="200" alt="" class = "profile_image">
                <h4>Jane<span> / Admin</span></h4>
            </center>
            <a href = "dashboard_Admin_site.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href = "account-setting.php"><i class="fas fa-cogs"></i><span>Account Settings</span></a>
        </div>
        <!--sidebar area end uwu-->
        
        <div class="right">
            <div class="accsetting container">
                <div class="accsetting__header">
                <form action="accout-settings-code.php" method="POST"> 
                  <p class="paragraph">Account Setting</p>
                  <p class="header">Demographic Profile</p>
                  <p class="header">Basic Information</p>
                  <input type="text" name="fname" placeholder="First name" class="ipt">
                  <input type="text" name="mname" placeholder="Middle name" class="ipt">
                  <input type="text" name="lname" placeholder="Last name" class="ipt">
                  <br>
                  <p class="header">Birthdate</p>
                  <input type="date" name="bdate" class="ipt">
                  <input type="number" name="age" placeholder="Age" class="ipt">
                  <br><br>
                  <p class="header">Contact Details</p>
                  <input type="email" name="email" placeholder="Email" class="ipt">
                  <input type="email" name="cemail" onblur="if(this.value!=email.value) alert('Email does not match.')" placeholder="Confirm Email" class="ipt">
                  <input type="tel" name="phone" placeholder="Contact Number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" class="ipt">
                  <br><br>
                  <p class="header">Gender</p>
                  <label class="label">Male<input type="radio" name="gender" value="Male"></label>
                  <label class="label">Female<input type="radio" name="gender" values="Female"></label>
                  <input type="text" name="work" placeholder="Occupation" class="ipt">
                  <br><br><br>
                  <input type="text" name="religion" placeholder="Religion" class="ipt">
                  <input type="text" name="nationality" placeholder="Nationality" class="ipt">
                  <select class="selection" name="select">
                      <option selected="" disabled="">Civil Status</option>
                      <option value="Married">Married</option>
                      <option value="Widowed">Widowed</option>
                      <option value="Separated">Separated</option>
                      <option value="Divorced">Divorced</option>
                      <option value="Single">Single</option>
                  </select>
                  <br><br>
                  <p class="header">Address</p>
                  <input type="text" name="add" placeholder="House/Building/Street Number, Street Name, Barangay/District Name, City" class="add">
                  <br><br>
                  <p class="header">Account credentials</p>
                  <input type="text" name="" placeholder="Username" class="ipt">
                  <input type="text" name="" placeholder="Password" class="ipt">
                  <br><br><br><br>
                  
                  <div class="button-container">
                    <a href="#">
                      <button class="button" type="submit">Back</button>
                  </a>
                  <a href="#popup1">
                      <button class="button" type="submit" name="update-btn" id="btn-update">Update</button>
                  </a>
                  </div>                
                </div>
            </div>
        </div>
        
        <div id="popup1" class="overlay">
            <div class="popup">
              <a class="close" href="#">&times;</a>
              <p class="paragraph">Account Setting</p>
    
              <div class="content">
                <p class="modal-note">Enter username and password to save changes.</p>
                <div class="modal-content">
                  <input type="text" name="" placeholder="Username" class="ipt">
                  <input type="text" name="" placeholder="Password" class="ipt">
                <a href="#popup2">
                  <button class="button" type="submit">Save</button>
                </a>
                </div>
    
              </div>
            </div>
          </div>
    
          <div id="popup2" class="overlay">
            <div class="popup">
              <a class="close" href="#">&times;</a>
              <p class="paragraph">Account Setting</p>
    
              <div class="content">
                <p class="modal-note">Update saved.</p>
                <div class="modal-content">
                <a href="#">
                  <button class="button" type="submit">Ok</button>
                </a>
                </div>
    
              </div>
            </div>
          </div>

        </form> 
    </body>
</html>









?>