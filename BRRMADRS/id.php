<?php
session_start();


 include 'connection.php';

if(isset($_GET["action"])){

    if ($_GET["action"] == "approve") {
        $certificate_id = $_GET["certificate_id"];
         $email = $_GET["email"];
        $ref = $_GET["referenceno"];
        $name = $_GET["name"];
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
        $mail -> setFrom('brgy.mail.sender@gmail.com', '');
$mail -> addAddress($email);
$mail -> addReplyTo('brgy.mail.sender@gmail.com');
        $mail -> isHTML(true);
        $mail ->Subject ='Reference no: ['.$ref.'] - CLAIM YOUR ID REQUEST';
        $mail -> Body = '<p>Dear '.$name.', </p><br>
                        <p> Reference no. <b>'.$ref.'</b> has been completed.</p>
                        <p>Thank you for using Barangay Residents Record Management and Appointment of Document Request System. This is to acknowledged your Barangay ID request on '.$date.'.</p>
                        <p> You can now get your request on the Barangay Hall. To claim your request please present your reference number or this email.</p>
                        <br><br><br>
                        <p> Thank you.</p>

                        ';
        if(!$mail ->send()){
  echo "Message not sent!";
}else{
  echo " ";
}
        $sql = "UPDATE tblbrgy_id SET status= 'Approved' WHERE certificate_id = '$certificate_id'";
        $result = mysqli_query($con, $sql);
        if ($result){
            echo '<script>alert("Barangay ID Request Approved!")</script>';
        }
    }

    if ($_GET["action"] == "disapprove") {
        $certificate_id = $_GET["certificate_id"];
        $email = $_GET["email"];
        $ref = $_GET["reference_no"];
        $name = $_GET["name"];
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
        $mail ->Subject ='Reference no: ['.$ref.'] - ID REQUEST REJECTED';
        $mail -> Body = '<p>Dear '.$name.', </p><br>
                        <p> Reference no. <b>'.$ref.'</b> has been reviewed.</p>
                        <p>Thank you for using Barangay Residents Record Management and Appointment of Document Request System. Your Barangay ID request on '.$date.' has been rejected.</p>
                        <br><br><br>
                        <p> Thank you.</p>

                        ';
        if(!$mail ->send()){
  echo "Message not sent!";
}else{
  echo " ";
}
        $sql = "UPDATE tblbrgy_id SET status= 'Disapproved' WHERE certificate_id = '$certificate_id'";
        $result = mysqli_query($con, $sql);
        if ($result){
            echo '<script>alert("Barangay ID Request Disapproved!")</script>';
        }
    }


}



?>

<!DOCTYPE html>
<html>
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
        <?php include('header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('staff_sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Barangay ID Request
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
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Recorded</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rerence no</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
        </thead>
        <tbody>
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM tblbrgy_id WHERE status= 'pending' ORDER BY 'brgy_id' DESC ";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            
            echo '<td>'  . $row["name"] . '</td>';
            echo '<td>' . $row["date_recorded"] . '</td>';
            echo '<td>' . $row["referenceno"] . '</td>';
            echo '<td>' . $row["status"] . '</td>';
            echo '<td>' ;
            echo '<a class="btn btn-info btn-lg" href="id.php?action=approve&certificate_id= ' . $row["certificate_id"] . '&email=' . $row["email"] . '&referenceno=' . $row["referenceno"] . '&name=' . $row["name"] . '&date_recorded=' . $row["date_recorded"] . ' ">Approve</a>';
        echo " &nbsp; ";
            echo '<a class="btn btn-danger btn-lg" href="id.php?action=disapprove&certificate_id= ' . $row["certificate_id"] . '&email=' . $row["email"] . '&referenceno=' . $row["referenceno"] . '&name=' . $row["name"] . '&date_recorded=' . $row["date_recorded"] . ' ">Disapprove</a>';
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