<?php
date_default_timezone_set('US/Eastern');
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

 include('./vendor/phpmailer/src/Exception.php');
 include('./vendor/phpmailer/src/PHPMailer.php');
include('./vendor/phpmailer/src/SMTP.php');

function SendEmail($to,$subject,$message,$from){
  $to = $to;
 $subject = $subject;

 $message = $message;

 $header = "From:".$from." \r\n";
 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";

 $retval = mail($to,$subject,$message,$header);

 if( $retval == true ) {
		echo "Message sent successfully...";
 }else {
		echo "Message could not be sent...";
 }

}
?>
