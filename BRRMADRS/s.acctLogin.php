<html>
<head>
	<title>Account Registration Form</title>
	<link rel =stylesheet a href="style_acct.css">
    
</head>
<body>
	<div class="containerA">
        <?php session_start();
       ?>
        <form action="s.acctLogin_process.php" method="POST">
            <p class ="paragraphA">Account Registration Form</p>
            
            <input type = "text" name="user" placeholder="Enter Username" required aria-required="true" class="iptA">
            
            <br>
            <br>
            <input type = "password" id = "pass" name = "pass" placeholder="Enter Password" required aria-required="true" class = "iptA"/>
            
            <br>
            <br>
            <script>
                function myFunction() {
                var x = document.getElementById("pass");
                    if (x.type === "password") 
                    {
                        x.type = "text";
                    } 
                    else 
                    {
                        x.type = "password";
                    }
                }
            </script>
           
            <input type="checkbox" onclick="myFunction()" class = "show"/>Show Password
            
            <br>   
         
            
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
            
            <br>
            
            <a href="Notif.php">
            <button class = "button" name="save">Register</button>
            </a>
        </form>
        
    </div>
    </body>
</html>