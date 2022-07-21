<!DOCTYPE html>
<html lang = "en" dir="ltr">
    <head>
    <meta charset="utf-8">
        <title>Resident Profile</title>
        <link rel="stylesheet" href="file_complaint.css">
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
            <a href = "dashboard_residents.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href = ""><i class="fas fa-cogs"></i><span>Account Settings</span></a>
        </div>
        <!--sidebar area end uwu-->
        
        <div class="content">
        
            <!-- transparent container -->
            <section>
            <div class="box">
                <!--<h2>Hello.</h2> -->
                <p>Please indicate your complaint details:</p>
                
                <!---<a href = "#">
                <div class="card card1">
                    <h5>File Complaints</h5> 
                </div>
                </a>
                
                <a href="doc_req.php">
                <div class="card card2">
                    <h5>Document Request</h5>
                </div>
                </a> -->
                
                <textarea id="complaint" class="complaint" rows="4" cols="50"></textarea>
                <br>
                <br>
                             <input type="file" id="file-upload" multiple required />
                <label for="file-upload">Upload file</label>
            
                <div id="file-upload-filename" class="filename"></div>
             
            <script>
                var input = document.getElementById( 'file-upload' );
                var infoArea = document.getElementById( 'file-upload-filename' );

                input.addEventListener( 'change', showFileName );

                function showFileName( event ) 
                {
                // the change event gives us the input it occurred in 
                var input = event.srcElement;
  
                // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                var fileName = input.files[0].name;
  
                // use fileName however fits your app best, i.e. add it into a div
                infoArea.textContent = 'File name: ' + fileName;
                }
            </script>
            <br>
                
                <button class="button">Submit</button>
                
            </div> 
        </section> 
        </div>
        
        
    </body>
</html>















