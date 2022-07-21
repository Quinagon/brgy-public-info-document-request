<!DOCTYPE html>
<html>
<style>
.containerA /*that white box*/
{
    background: #F8F9FA;
    width: 505px;
    height: 450px;
    border-radius: 05px; /*border nung white container lang*/
    margin: 0 auto;
    border-bottom: 1px solid #CCC;
    margin-top: 25px;
}

.paragraphA
{
    background: #74b9ff;
    color: white;
    font-family: Helvetica, sans-serif;
    font-size: 30px;
    text-align: center;
    border-radius: 03px; /*border nung title*/
    padding: 15px 0px 15px 0px; /*size ng border ni title*/
    margin-bottom: 50px; /*whitespace after border #55efc4*/
}

.iptA
{
    width: 400px;
    height: 35px;
    border-radius: 03px;
    border: none; /*medyo faded color lang yung txtbox*/
    border: 1px solid #CCC;
    margin-left: 55px; /*that lil margin between them txtboxes*/
    padding-left: 05px; /*space ng elements sa loob ng txtboxes*/
    border-left: 03px solid #00cec9;
    margin-top: 3px;
}

.headerA
{
    margin-right: 2px;
    font-family: Helvetica, sans-serif;
    font-size: 20px;
    margin-left: 10px;
}

.show
{
    width: 400px;
    height: 35px;
    border-radius: 03px;
    border: none; /*medyo faded color lang yung txtbox*/
    border: 1px solid #CCC;
    margin-left: 55px; /*that lil margin between them txtboxes*/
    padding-left: 05px; /*space ng elements sa loob ng txtboxes*/
    border-left: 03px solid #00cec9;
    margin-top: 3px;
    
}


button:hover
{
    background-color: #54a0ff;
    color: #F8F9FA;
}

/*.inputfile
{
    margin-left: 10px;
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    
    z-index: -1;
}

.inputfile + label
{
    font-size: 1.25em;
    font-weight: 500;
    color: #576574;
    border: 2px solid #008CBA;
    display: inline-block;
}

.inputfile:focus + label, .inputfile + label:hover
{
    color: white;
    background-color: #54a0ff;
    transition-duration: 0.3s;
}

.inputfile + label
{
    cursor: pointer; /* "hand" cursor */
}

*/

.label{
    margin-left: 55px;
}

input
{
    margin-left: 55px;
    overflow: hidden; 
  
}

input[type="file"]
{ 
    z-index: -1;
    position: absolute;
    opacity: 0;

  
}



input:focus + label 
{
    outline: 2px solid;
    color: white;
    background-color: #54a0ff;
    transition-duration: 0.3s;

}

input:hover + label 
{
    color: white;
    background-color: #54a0ff;
    transition-duration: 0.3s; 
}

.filename
{
    margin-left: 10px;
    margin-top: 5px;
}








</style>
    <?php
    session_start();
    include('head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        include "connection.php";
        ?>
        <?php include('header.php'); 
        ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('res_sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Request Business Permit
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">

                               <div class="containerA">
        <form action="req_certificate.php" method="POST">
            <p class ="paragraphA">Certificate Request Form</p>
            
            <input type = "text" name="name" placeholder="Enter Name" required aria-required="true" class="iptA">
            <br>
            <input type = "text" id = "pass" name = "business_name" placeholder="Enter Purpose" required aria-required="true" class = "iptA"/>
            <br>
             <input type = "text" id = "pass" name = "business_type" placeholder="Enter Purpose" required aria-required="true" class = "iptA"/>
            <br>
            <input type = "text" id = "pass" name = "business_address" placeholder="Enter Purpose" required aria-required="true" class = "iptA"/>
            <br>
            <input type = "email" id = "pass" name = "email" placeholder="Enter email" required aria-required="true" class = "iptA"/>
            <br>
              <button name="request" class = "iptA">Request</button>
            </a>
        </form>
        <?php


    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"brgyinfo");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
   

   if(isset($_POST['request']))
{
    $name = $_POST['name'];
$bname = $_POST['business_name'];
$btype = $_POST['business_type'];
$badd = $_POST['business_address'];
$email = $_POST['email'];
 $rand=rand();

$query="INSERT INTO tblbrgy_business_permit(name, business_name, business_type,business_address,email, date_recorded,status, reference_no) VALUES ('$name','$bname','$btype','$badd','$email',NOW(),'pending','$rand')";
        $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
        echo '<script type="text/javascript">';
echo ' alert("Request Successful, Pls. wait for your reference no sent to your gmail.")';  //not showing an alert box.
echo '</script>';

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
$mail ->Subject ='Reference no [ '.$rand.'] - BUSINESS PERMIT';
$mail -> Body = '<p> Dear '.$name. ',</p> 
                <p> Thank you for using Barangay Residents Record Management and Appoinment of Document Request System. This is to acknowledge receipt of your online request. </p>
                <p>Reference no <b>'.$rand.'</b> is created for your request.</P>
                Our staff will get back to you as soon as possible. Once you get a confirmation that your concern is already submitted, please refrain from sending the same concern for efficient handling of your reference number.</p>
                <p> Until then please wait for a confimation email for the claiming of request</p>
                <br><br><p>Thank you</p>';
if(!$mail ->send()){
  echo "Message not sent!";
}else{  
  echo " ";
}

}

?>
        
    </div>

                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
    
    </body>
</html>