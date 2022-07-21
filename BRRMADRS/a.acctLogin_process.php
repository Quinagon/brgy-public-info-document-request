<?php

$user = $_POST['user'];
$pass = $_POST['pass'];


    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"brgyinfo");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
if(isset($_POST['save']))
{
    
$query="INSERT INTO tbluseracct (username,password,user_type) VALUES ('$user','$pass','admin')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: amin_add_staff.php?status=success");
}


?>