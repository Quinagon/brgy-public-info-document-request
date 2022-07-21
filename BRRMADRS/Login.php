
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>Login</title>
    <style>
        img{
            margin-top: 700px;

        }
        
    </style>
</head>
<body >
    <?php
     session_start();
    include('connection.php');  
     ?>
        <form action="" class="form">
          <img src="img/avatar.png" alt="">
    <section>
        <div class="form-container">
            <h1>Login</h1>

        <form name="f1" action ="index.php" onsubmit = "return validation()"  method = "GET">
            <div class="control">
            <label for="name">Name</label>
            <input type="text" id="name" name="username" >
            </div>
            
            <div class="control">
            <label for="psw">Password</label>
            <input type="password" id="psw" name="password">
            </div>
        
            <!-- <span><input type="checkbox"> Remember me</span> -->
            <div class="control">
            <input type="submit" class="btn" value="Login" name="login">
            </div>
            <br>
            <div class="flex-col-c p-t-170 p-b-40">
                <span class="txt1 p-b-9">
                  Don’t have an account?
                </span>
             
                <a href="r.Demography_Reg.php" class="txt3">
                  Sign up now
                </a>
              </div> 
        </form>
        <?php
        if(isset($_GET['login']))
        {
            $username = $_GET['username'];  
            $password = $_GET['password'];  
      
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select *from tbluseracct where username = '$username' and password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result);  
             
              
            if($row["user_type"]=="admin")
                {  
                $_SESSION['username']=$username;
                echo '<script type="text/javascript">';
                echo ' alert("Login Sucessfully")';
                echo '</script>'; 
                header("Location:admin_Dashboard.php");

                } elseif($row["user_type"]=="staff")
                {  
                $_SESSION['username']=$username;
                echo '<script type="text/javascript">';
                echo ' alert(" Login Sucessfully")';
                echo '</script>'; 
                header("Location:dashboard_Staffs.php");

                }elseif($row["user_type"]=="resident")
                {  
                $_SESSION['username']=$username;
                echo '<script type="text/javascript">';
                echo ' alert(" Login Sucessfully")';
                echo '</script>'; 
                header("Location:dashboard_residents.php");

                }   
            else{                  
                echo '<script type="text/javascript">';
                echo ' alert("Cannot login! Wrong credentials")';
                echo '</script>'; 
                }       
            
        }
        
        ?>
       
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
