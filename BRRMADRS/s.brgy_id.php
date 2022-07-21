<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="datable.css">
	<link rel="stylesheet" href="w3.css//font-awesome.min.css">
	<link rel="stylesheet" href="bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="jquery/package/dist/jquery.min.js"></script>
  <script src="bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
		$conn = new mysqli('localhost','root','','brgyinfo') or die(mysqli_error($conn));
		$result = $conn->query("SELECT *FROM tblbrgy_id") or die ($conn->error);
	?>
<table id="tblID" class="display" style="width:100%">
        <thead>
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
            <?php	 while($row = $result->fetch_assoc()):?>
				<tr>
					
					
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['name']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['contact_person']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['contactno']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['address']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['date_recorded']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<form action="business_permit.php" method="POST">
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Resident Information</h4>
        </div>
        <div class="modal-body">
		<b>Name		: <input type="text" id="t1" >&nbsp;&nbsp;&nbsp;
			Gender		: <input type="text" id="t2" >&nbsp;&nbsp;&nbsp;
			Age			: <input type="text" id="t3" ><br><br>
			Email		: <input type="text" id="t4" >&nbsp;&nbsp;&nbsp;
			Nationality	: <input type="text" id="t5" ><br><br>
			Religion	: <input type="text" id="t6" >&nbsp;&nbsp;&nbsp;
			Birthday	: <input type="text" id="t7" ><br><br>
			Occupation	: <input type="text" id="t8" >&nbsp;&nbsp;&nbsp;
			Civil Status: <input type="text" id="t9" ><br><br>
			Contact No.	: <input type="text" id="t10" >&nbsp;&nbsp;&nbsp;
			Address		: <input type="text" id="t11" >
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
				</tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php 	endwhile; ?> 
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