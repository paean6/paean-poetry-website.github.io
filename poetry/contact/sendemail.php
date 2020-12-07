<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message']; 
}

try{
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'jayantjathar@ternaengg.ac.in';
	$mail->Password = 'Jayant@123';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = '587';


	$mail->setFrom('jayantjathar@ternaengg.ac.in');
	$mail->addADDress('jayantjathar710@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = 'message received(contact page)';
	$mail->Body = '<h3> Name:$name <br> Email:$email <br> Message:$message </h3>';

	
}catch (Exception $e){
	$alert = '<div class="alert-error">
      <span>'.$e->getmessage().'</span>
              </div>';

  }


