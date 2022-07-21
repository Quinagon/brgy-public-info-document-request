<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="datable.css">
</head>
<body>

	<?php
		$conn = new mysqli('localhost','root','','brgyinfo') or die(mysqli_error($conn));
		$result = $conn->query("SELECT *FROM tblcomplaints") or die ($conn->error);
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
					
					
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['complainant']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['complaint']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['date_recorded']; ?></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<form action="business_permit.php" method="POST">
							<button type="submit" name="view_info"> View Info </button>
							
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