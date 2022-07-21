<!DOCTYPE html>
<html>
<title>Resident Profile</title>
        <link rel="stylesheet" href="dashboard_temp.css">
        <link rel="stylesheet" href="style_dash_accsetting.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>
    <?php
    session_start();
    include('head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        include "connection.php";
        ?>
        <?php include('header.php'); 
        ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('res_sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Resident Request
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">

                   <form action="accout-settings-code-resident.php" method="POST"> 
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


                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php 
        include "footer.php"; ?>
<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
    });
</script>
    </body>
</html>