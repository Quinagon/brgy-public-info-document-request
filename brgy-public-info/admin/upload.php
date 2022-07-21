<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "bpi");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
      $image_title = mysqli_real_escape_string($db, $_POST['title']);
      $sdate = mysqli_real_escape_string($db, $_POST['sdate']);
      $edate = mysqli_real_escape_string($db, $_POST['edate']);
      $status = mysqli_real_escape_string($db, $_POST['status']);
      $featured = mysqli_real_escape_string($db, $_POST['featured']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO project_tbl (image, p_description, p_title, start_date, end_date, status, featured) VALUES ('$image', '$image_text', '$image_title', '$sdate', '$edate', '$status', '$featured')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM project_tbl");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['p_title']."</p>";
      	echo "<p>".$row['p_description']."</p>";
          echo "<p>".$row['start_date']."</p>";
          echo "<p>".$row['end_date']."</p>";
          echo "<p>".$row['status']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
	  <input type="text" name="title" placeholder="title">
	  <input type="date" name="sdate" placeholder="startdate">
	  <input type="date" name="edate" placeholder="enddate">
	  <input type="text" name="status" placeholder="Status">
      <p>Featured</p>
        <input type="radio" id="yes" name="featured" value="Yes">
        <input type="radio" id="No" name="featured" value="No">
	  
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>