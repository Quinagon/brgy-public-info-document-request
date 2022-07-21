<?php
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
$mail -> addAddress('darlene.quinagon@gmail.com');
$mail -> addReplyTo('brgy.mail.sender01@gmail.com');
$mail-> AddCC ($email);
$mail -> isHTML(true);
$mail ->Subject ="Php Mailer Subject";
$mail -> Body = '<h1> Gumagana sya sis</h1>';
if(!$mail ->send()){
	echo "Message not sent!";
}else{
	echo "Message sent";
}
?>