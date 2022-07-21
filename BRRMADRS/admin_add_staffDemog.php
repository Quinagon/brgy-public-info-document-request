<!DOCTYPE html>
<html>
<link rel = "stylesheet" a href= "demogreg_style.css" >
    <?php
    session_start();
    include('head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        include "connection.php";
        ?>
        <?php include('header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('admin_sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Staff Demographic Registration
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="container">
        <form action="a.Demography_Reg.php" method="POST">
            <p class ="paragraph">Demographic Registration Form</p>
            <p class ="header">Basic Information</p>
            <input type = "text" name = "first_name" placeholder="First name" required aria-required="true" class = "ipt"/>
            <input type = "text" name = "middle_name" placeholder="Middle name" required aria-required="true" class = "ipt"/>
            <input type = "text" name = "last_name" placeholder="Last name" required aria-required="true" class = "ipt"/>
           
            <br>
            <p class ="header">Birthdate</p>
            <input type = "date" name = "bday" required aria-required="true" class = "ipt" value="Birthdate"/>
            <input type = "number" name = "age" placeholder="Age" required aria-required="true" class = "ipt"/>
            
            
            <br>
            <br>
            <p class ="header">Contact Details</p>
            <input type = "email" name = "email" placeholder ="Email" required aria-required="true"class = "ipt"/>
            <input type = "email" name = "cemail" onblur="if(this.value!=email.value) alert('Email does not match.')" placeholder ="Confirm Email" class = "ipt"/>
            
            
           <input type = "tel"  name="contact" placeholder ="Contact Number" required aria-required="true"  pattern= "[0-9]{4}[0-9]{3}[0-9]{4}" class = "ipt"/>
            <br>
            <br>
            <p class ="header">Additional information</p>
            <select class = "selection" id="select" name="gender">
                <option selected disabled name="gender">Select Gender</option>s
                <option value = "male">Male</option>
                <option value = "female" >Female</option>
             
                
                <!-- kung sakali lang naman... -->
                
                
            </select>
        
            <select class = "selection" id="select" name="status">
                <option selected disabled name="status">Civil Status</option>s
                <option value = "married">Married</option>
                <option value = "widowed" >Widowed</option>
                <option value = "separated" >Separated</option>
                <option value = "divorced" >Divorced</option>
                <option value = "single" >Single</option>
                
                <!-- kung sakali lang naman... -->
                
                
            </select>
                
                <!-- kung sakali lang naman... -->
                
                

            
            <br>
            <br>
            <p class ="header">Address</p>
            <input type = "text" name = "address" placeholder = "House/Building/Street Number, Street Name, Barangay/District Name, City" required aria-required="true" class = "add"/>

            <br>
            <br>
            <br>
            <br>
            
           
            <button class = "button"type="submit" name="save">Next</a></button>
               
                <script>
                    function myFunction() {
                var x = document.getElementById("select");
                    if (x.text = "Civil Status") 
                    {
                        alert(x);
                    } 
                }
                </script>
               
               </button>
           </a>
            
        </form>
    </div>


                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

</body>
</html>