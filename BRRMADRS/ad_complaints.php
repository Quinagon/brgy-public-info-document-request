<?php
session_start();


 include 'connection.php';

if(isset($_GET["action"])){

    if ($_GET["action"] == "approve") {
        $complaints_id = $_GET["complaints_id"];
        $email = $_GET["email"];
        $ref = $_GET["reference_no"];
        $name = $_GET["complainant"];
        $date = $_GET["date_recorded"];
        require 'PHPMailerAutoload.php';
        $mail=new PHPMailer;
        $mail -> IsSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> Port = 587;
        $mail -> SMTPAuth = true;
        $mail -> SMTPSecure = 'tls';
        $mail -> Username ='brgy.mail.sender@gmail.com';
        $mail -> Password = 'grp2BSIT3N';
        $mail -> setFrom('brgy.mail.sender01@gmail.com', '');
        $mail -> addAddress('brgy.mail.sender01@gmail.com',$email);
        $mail -> addReplyTo('brgy.mail.sender01@gmail.com');
        $mail-> AddCC ($email);
        $mail -> isHTML(true);
        $mail ->Subject ='Reference no: ['.$ref.'] - APPOINTMENT OF FILE COMPLAINT';
        $mail -> Body = '<p>Dear '.$name.', </p><br>
                        <p> Reference no. <b>'.$ref.'</b> has been completed.</p>
                        <p>Thank you for using Barangay Residents Record Management and Appointment of Document Request System. This is to acknowledged your Complaints requested on '.$date.'.</p>
                        <p> You can proceed to the Barangay Hall. Please present you reference number to the help desk staff in able to guide you in the complain office</p>
                        <br><br><br>
                        <p> Thank you.</p>;

                        ';
        if(!$mail ->send()){
  echo "Message not sent!";
}else{
  echo " ";
}
        $sql = "UPDATE tblcomplaints SET status= 'Approved' WHERE complaints_id = '$complaints_id'";
        $result = mysqli_query($con, $sql);
        if ($result){
            echo '<script>alert("Complain Approved!")</script>';
        }
    }

    if ($_GET["action"] == "disapprove") {
        $complaints_id = $_GET["complaints_id"];
        $email = $_GET["email"];
        $ref = $_GET["reference_no"];
        $name = $_GET["complainant"];
        $date = $_GET["date_recorded"];
        require 'PHPMailerAutoload.php';
        $mail=new PHPMailer;
        $mail -> IsSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> Port = 587;
        $mail -> SMTPAuth = true;
        $mail -> SMTPSecure = 'tls';
        $mail -> Username ='brgy.mail.sender@gmail.com';
        $mail -> Password = 'grp2BSIT3N';
        $mail -> setFrom('brgy.mail.sender01@gmail.com', '');
        $mail -> addAddress('brgy.mail.sender01@gmail.com',$email);
        $mail -> addReplyTo('brgy.mail.sender01@gmail.com');
        $mail-> AddCC ($email);
        $mail -> isHTML(true);
        $mail ->Subject ='Reference no: ['.$ref.'] - REJECTED FILE COMPLAINT';
        $mail -> Body = '<p>Dear '.$name.', </p><br>
                        <p> Reference no. <b>'.$ref.'</b> has been reviewed.</p>       
                        <p>Thank you for using Barangay Residents Record Management and Appointment of Document Request System. The Complaints you requested on '.$date.' has been rejected.</p>
                        <p> We had reviewed your complain and we think that it does not need an official action from the barangay and/or your complain lacks information. Kindly resubmit and checked your complain.</p>
                        <br><br><br>
                        <p> Thank you.</p>;

                        ';
        if(!$mail ->send()){
  echo "Message not sent!";
}else{
  echo " ";
}
        $sql = "UPDATE tblcomplaints SET status= 'Disapproved' WHERE complaints_id = '$complaints_id'";
        $result = mysqli_query($con, $sql);
        if ($result){
            echo '<script>alert("Complain Disapproved!")</script>';
        }
    }


}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

     <?php include('header.php'); ?>	 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="datable.css">
    <link rel="stylesheet" href="w3.css//font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="jquery/package/dist/jquery.min.js"></script>
  <script src="bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <?php
	include('head_css.php'); ?>
    <body class="skin-black">
        
        <!-- header logo: style can be found in header.less -->
        <?php 
        include "connection.php";
        ?>
  

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include 'admin_sidebar-left.php' ; ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Complaints 
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                            <div class="box">
    
    <table id="tblID" class="display" style="width:100%" >
        <thead background-color="#32CD32" >
            <tr>
                <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complainant</th>
                <th>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Person to Complain</th>
                <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complain</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Recorded</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
        include 'connection.php';
        $sql = "SELECT * FROM tblcomplaints WHERE status= 'pending' ORDER BY 'complaints_id' DESC ";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            
            echo '<td>'  . $row["complainant"] . '</td>';
            echo '<td>' . $row["person_to_complain"] . '</td>';
            echo '<td>' . $row["subject_of_complain"] . '</td>';
            echo '<td>' . $row["date_recorded"] . '</td>';
            echo '<td>' ;
            echo '<a class="btn btn-info btn-lg" href="ad_complaints.php?action=approve&complaints_id= ' . $row["complaints_id"] . '&email=' . $row["email"] . '&reference_no=' . $row["reference_no"] . '&complainant=' . $row["complainant"] . '&date_recorded=' . $row["date_recorded"] . '    ">Approve</a>';
        echo " &nbsp; ";
            echo '<a class="btn btn-danger btn-lg" href="ad_complaints.php?action=disapprove&complaints_id= ' . $row["complaints_id"] . '&email=' . $row["email"] . '&reference_no=' . $row["reference_no"] . '&complainant=' . $row["complainant"] . '&date_recorded=' . $row["date_recorded"] . ' ">Disapprove</a>';
           echo '</td>' ;
            echo '</tr>' ;
        }
            ?>
      
                 
                
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

                 </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

</body>
</html>