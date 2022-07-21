
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
        <div class="form-container">
            <h1>Account Registration Form</h1>

        <div class="container">
        <form action="r.acctLogin_process.php" method="POST" enctype="multipart/form-data">
            
            <div class="control">
            <label for="name">Name</label>
            <input type="text" id="name" name="user" >
            </div>
            
            <div class="control">
            <label for="psw">Password</label>
            <input type="password" id="psw" name="pass">
            </div>
            
            
             <div class="control">
            <input type="submit" class="btn" value="Register" name="save">
            </div>
            
           <!---   <input type="file" id="file" name="file" class="inputfile" multiple required/>
            <label for="file">Choose a file</label>
            
             <script>
            var input = document.getElementById( 'file' );
                 var infoArea = document.getElementById( 'file-filename' );

                 input.addEventListener( 'change', showFileName );

                 function showFileName( event ) {
                     // the change event gives us the input it occurred in 
                     var input = event.srcElement;
  
                    // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                    var fileName = input.files[0].name;
  
                    // use fileName however fits your app best, i.e. add it into a div
                    infoArea.textContent = 'File name: ' + fileName;
                    }
            </script>
             --->
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
