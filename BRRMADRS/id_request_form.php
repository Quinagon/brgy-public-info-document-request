<?php

$name = $_POST['name'];
$cp = $_POST['contactp'];
$cn = $_POST['contactn'];
$address = $_POST['address'];
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
    
$query="INSERT INTO tblbrgy_id(name, contact_person, contactno, address,date_recorded,referenceno,status) VALUES ('$name',$cp','$cn',$address',NOW(),'$rand','$pending')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: dashboard_residents.php?status=success");
}


?>