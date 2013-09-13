

<?php
require("../phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "gator655.hostgator.com";  // specify main and backup server
$mail->Port = 465;
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@onroad.org";  // SMTP username
$mail->Password = "onroad24#!"; // SMTP password

$mail->From = "info@onroad.org";
$mail->FromName = "International Clothiers Contact Form";
$mail->AddAddress("mbonatto@inc.ca", "International Clothiers");
$mail->AddBCC("mbonatto@inc.ca");
//$mail->AddAddress("ellen@example.com");                  // name is optional
$mail->AddReplyTo($_POST["c_email"], $_POST["c_name"]);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
/*
$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");
*/    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Contact Form :: International Clothiers";
$mail->Body    = $_POST["c_message"];
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Your message was successfully sent.";
?>