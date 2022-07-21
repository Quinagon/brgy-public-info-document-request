
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Login</title>
</head>
<body >
    <?php
     session_start();
    include('connection.php');  
     ?>
    <section>
        <div class="form-container">
            <h1>Demographic Registration Form</h1>

        <form name="f1" class="form" action="r.Demography_Reg_Process.php" onsubmit = "return validation()"  method = "POST" enctype="multipart/form-data">
          
            <p class ="header">Basic Information</p>
            <input type = "text" name = "first_name" placeholder="First name" required aria-required="true" class = "ipt"/>
            <input type = "text" name = "middle_name" placeholder="Middle name" required aria-required="true" class = "ipt"/>
            <input type = "text" name = "last_name" placeholder="Last name" required aria-required="true" class = "ipt"/>

            <p class ="header">Birthdate</p>
            <input type = "date" name = "bday" required aria-required="true" class = "ipt"/>
            <input type = "number" name = "age" placeholder="Age" required aria-required="true" class = "ipt"/>
            <p class ="header">Contact Details</p>
            <input type = "email" name = "email" placeholder ="Email" required aria-required="true"class = "ipt"/>
            <input type = "email" name = "cemail" onblur="if(this.value!=email.value) alert('Email does not match.')" placeholder ="Confirm Email" class = "ipt"/>
            
            
            <input type = "tel"  name="contact" placeholder ="Contact Number" required aria-required="true"  pattern= "[0-9]{4}[0-9]{3}[0-9]{4}" class = "ipt"/>
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
            <br><br><br>
           
            <Label class ="header"> Have an account?</Label>
            <a href="../../brgy-public-info/login.php" class="txt3">Sign in Here</a>

            <br>
            <div class="control">
            <input type="submit" class="btn" value="Next" name="save">
            </div>
                <script>
                    function myFunction() {
                var x = document.getElementById("select");
                    if (x.text = "Civil Status") 
                    {
                        alert(x);
                    } 
                }
                </script>
        </form>
       
        </div>
    </section>
     <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>
