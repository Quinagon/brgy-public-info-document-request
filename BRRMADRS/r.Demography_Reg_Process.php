<?php
$firstname = $_POST['first_name'];
$middlename = $_POST['middle_name'];
$lastname = $_POST['last_name'];
$birthday = $_POST['bday'];
$email = $_POST['email'];
$contactno = $_POST['contact'];
$age = $_POST['age'];
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
    
$query="INSERT INTO tblresidents (firstname, middlename,lastname,birthday,age, email,contactno,gender,civilstatus,address,date_registered) VALUES ('$firstname', '$middlename','$lastname','$birthday','$age','$email', '$contactno', '$gender', '$civilstatus', '$address',NOW())";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: r.acctLogin.php?status=success");
}

?>