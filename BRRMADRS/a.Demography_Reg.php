<?php
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$birthday = $_POST['bday'];
$age = $_POST['age'];
$email = $_POST['email'];
$contactno = $_POST['contact'];
$gender = $_POST['gender'];
$civilstatus = $_POST['status'];
$address = $_POST['address'];

    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"brgyinfo");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
if(isset($_POST['save']))
{
    
$query="INSERT INTO tbladministrator (firstname, middlename,lastname,birthday,age, email,contactno,gender,civilstatus,address,role,date_registered) VALUES ('$first_name', '$middle_name','$last_name','$birthday','$age','$email', '$contactno', '$gender', '$civilstatus', '$address','admin',NOW())";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: a.acctLogin.php?status=success");
}

?>