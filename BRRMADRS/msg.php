<html>
<head>
<meta charset="utf-8">
<title>JavaScript Alert Box by PHP</title>
<?php  
echo '<script type="text/javascript">';
echo ' alert("Request Successful, Pls. wait for your reference no sent to your gmail.")';  //not showing an alert box.
echo '</script>';
header ("Location: dashboard_residents.php?status=success");
?>
</head>

<body>
</body>
</html>