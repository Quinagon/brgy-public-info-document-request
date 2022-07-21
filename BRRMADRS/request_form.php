<?php

$name = $_POST['name'];
$purpose = $_POST['purpose'];
$email = $_POST['email'];
$rand=rand();

    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"brgyinfo");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
if(isset($_POST['request']))
{
    
$query="INSERT INTO tbldocument_res(name, type_of_request, reference_no, email, purpose,date_recorded,status) VALUES ('$name','Barangay Certificate','$rand','$email','$purpose',NOW(),'pending')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        echo '<script type="text/javascript">';
echo ' alert("Request Successful, Pls. wait for your reference no sent to your gmail.")';  //not showing an alert box.
echo '</script>';
}


?>