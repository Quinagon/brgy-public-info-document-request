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
 $statusMsg = '';

if(isset($_POST["save"])){
    // Allow certain file formats
    
            $insert = $conn->query("INSERT into tbluseracct (username,password,user_type,date_registered,profile) VALUES ('$user','$pass','resident',NOW(),'".$fileName."')");
            header("Location:../../brgy-public-info/login.php?status=success");
          
}


?>