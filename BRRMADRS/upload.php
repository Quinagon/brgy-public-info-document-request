<?php
$output = '';
$rec_id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "", "brgyinfo");
 

$sql = "SELECT * FROM tbladministrator where id=".$rec_id;
$result = mysqli_query($conn, $sql);

 

   while($row = mysqli_fetch_assoc($result)) {
 
$output .= "<div class='row'><div class='col-sm-6'>ID: ".$row["user_id"]."</div>
			<div class='col-sm-6'>Name: ".$row["firstname"]." ".$row["middlename"]." ".$row["lastname"]."</div>
			<div class='col-sm-6'>Birthday: ".$row["birthday"]."</div>
			<div class='col-sm-6'>Age: ".$row["age"]."</div>
			<div class='col-sm-6'>Email: ".$row["email"]."</div>
			<div class='col-sm-6'>Contact No.: ".$row["contactno"]."</div>
			<div class='row'><div class='col-sm-6'>Gender: ".$row["gender"]."</div>
			<div class='col-sm-6'>Occupation: ".$row["occupation"]."</div>
			<div class='col-sm-6'>Religion: ".$row["religion"]."</div>
			<div class='col-sm-6'>Nationality: ".$row["nationality"]."</div>
			<div class='col-sm-6'>Civil Status: ".$row["civilstatus"]."</div>
			<div class='col-sm-6'>Address: ".$row["address"]."</div>
			<div class='col-sm-6'>Role: ".$row["role"]."</div>
			<div class='row'><div class='col-sm-12'><img src='".$row["img"]."' style='height:100px;width:100px;text-align:Center'></div></div>";

 }
echo $output;
 
mysqli_close($conn);
?>
