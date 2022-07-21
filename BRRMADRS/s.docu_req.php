<!DOCTYPE html>
<html>
<head>
    <title>Document Requests</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="datable.css">
  <link rel="stylesheet" href="w3.css//font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="jquery/package/dist/jquery.min.js"></script>
  <script src="bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Document Request</a>
</div>
    
    <a href = "dashboard_Staffs.php">
    <button type="submit" class="button">Go to Dashboard</button>
    </a>
      <style>
      
    .button{
    background-color: #F8F9FA;
	border: 2px solid #2196F3;
    width: 178px;
    height: 50px;
    font-family: Helvetica, sans-serif;
    text-decoration: none;
    font-size: 17px;
    transition-duration: 0.3s;
    color: #576574;
    }
    
    .button:hover /*animation ng button*/
{
    background-color: #2196F3; /* blue */
    color: white;
}
       </style>


<?php
    $conn = new mysqli('localhost','root','','brgyinfo') or die(mysqli_error($conn));
    $result = $conn->query("SELECT *FROM tbldocument_res") or die ($conn->error);
  ?>
  <br><br>
<table id="tblID" class="display" style="width:100%" >
        <thead background-color="#32CD32">
            <tr>
                <th>Name</th>
                <th>Request Type</th>
                <th>Purpose</th>
                <th>Status</th>
                <th>Date Recorded</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  while($row = $result->fetch_assoc()):?>
        <tr>
          
          
          <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['type_of_request']; ?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['purpose']; ?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['status']; ?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['date_recorded']; ?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <form action="datatable.php" method="POST">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View Info</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Resident Information</h4>
        </div>
        <div class="modal-body">
      <b>Name   : <input type="text" id="t1" >&nbsp;&nbsp;&nbsp;
      Gender    : <input type="text" id="t1" >&nbsp;&nbsp;&nbsp;
      Age     : <input type="text" id="t1" ><br><br>
      Email   : <input type="text" id="t1" >&nbsp;&nbsp;&nbsp;
      Nationality : <input type="text" id="t1" ><br><br>
      Religion  : <input type="text" id="t1" >&nbsp;&nbsp;&nbsp;
      Birthday  : <input type="text" id="t1" ><br><br>
      Occupation  : <input type="text" id="t1" >&nbsp;&nbsp;&nbsp;
      Civil Status: <input type="text" id="t1" ><br><br>
      Contact No. : <input type="text" id="t1" >&nbsp;&nbsp;&nbsp;
      Address   : <input type="text" id="t1" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Approve</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Disapprove</button>
        </div>
      </div>
    </div>
  </div>
            </form>
          </td>
        </tr>
      <?php   endwhile; ?> 
        </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#tblID').DataTable();
} );
</script>
</body>
</html>
