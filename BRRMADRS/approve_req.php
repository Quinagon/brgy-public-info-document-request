 <?php


        if(isset($_POST['approve']))
        {

            $name = $_POST['firstname'];  
          
            $sql = "SELECT * FROM tbldocument_res";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result);  
             
            $id=0; 
            while($row = $result->fetch_assoc()):
             $id=+1;
            if($row["req_id"]==$id)
                {  
                $_SESSION['id']=$id;
                echo '<script type="text/javascript">';
                echo ' alert("Approve Sucessfully")';
                echo '</script>'; 
                $sql = "UPDATE tbldocument_res SET status ='approve' where req_id ='$id'";
                header("Location:clearance.php");

                }   
            else{                  
                echo '<script type="text/javascript">';
                echo ' alert("Cannot ldo")';
                echo '</script>'; 
                }       
            
        }
        
        ?>