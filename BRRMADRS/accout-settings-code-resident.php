<?php

session_start();
// server connection
$servername = "localhost";
$username = "root";
// their is no password is default
$password = "";
$dbname = "brgyinfo";
$conn = new mysqli($servername, $username, $password, $dbname);
//got input form html using $_POST[]
if(isset($_POST['update-btn'])) {
$var_value = $_SESSION['varname'];
$res_fname = $_POST['fname'];
$res_mname =$_POST['mname'];
$res_lname =$_POST['lname'];
$res_gender =$_POST['gender'];
$res_select =$_POST['select'];
$bday = $_POST["bdate"];
$age = $_POST["age"];
$email = $_POST["email"];
$contactnum = $_POST["phone"];
$address = $_POST["add"];





// sql connection

// lets check its connected


$query = mysqli_query($conn, "UPDATE tblresidents SET firstname='$res_fname',middlename='$res_mname', lastname='$res_lname', birthday='$bday', age='$age', email='$email', contactno='$contactnum', gender='$res_gender', civilstatus='$res_select', `address`='$address' WHERE `user_id` ='$var_value'");

// check connection
if($query) {
    echo " Connected successfully";
}  





?>