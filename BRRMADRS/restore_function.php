

<?php
 
function restore($server, $username, $password, $dbname, $location){
    //connection
    $conn = new mysqli($server, $username, $password, $dbname); 
 
    //variable use to store queries from our sql file
    $sql = '';
 
    //get our sql file
    $lines = file($location);
 
    //return message
    $output = array('error'=>false);
 
    //loop each line of our sql file
    foreach ($lines as $line){
 
        //skip comments
        if(substr($line, 0, 2) == '--' || $line == ''){
            continue;
        }
 
        //add each line to our query
        $sql .= $line;
 
        //check if its the end of the line due to semicolon
        if (substr(trim($line), -1, 1) == ';'){
            //perform our query
            $query = $conn->query($sql);
            if(!$query){
                $output['error'] = true;
                $output['message'] = $conn->error;
            }
            else{
                $output['message'] = 'Database restored successfully';
            }
 
            //reset our query variable
            $sql = '';
 
        }
    }
 
    return $output;
}


if(isset($_POST['restore'])){
 
		//get post data
		$server = $_POST['server'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$dbname = $_POST['dbname'];
 
		//moving the uploaded sql file
		$filename = $_FILES['sql']['name'];
		move_uploaded_file($_FILES['sql']['tmp_name'],'upload/' . $filename);
		$file_location = 'upload/' . $filename;
 
		//restore database using our function
		$restore = restore($server, $username, $password, $dbname, $file_location);
 
		if($restore['error']){
			$_SESSION['error'] = $restore['message'];
		}
		else{
			$_SESSION['success'] = $restore['message'];
		}
 
	}
	else{
		$_SESSION['error'] = 'Fill up credential first';
	}
 
?>