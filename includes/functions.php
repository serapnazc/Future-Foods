<?php
date_default_timezone_set('US/Eastern');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



function SendEmail($to,$message,$subject,$file_url_array=array()){
  $mail = new PHPMailer(true);


  		try {
  			// Server settings
  		    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
  		    $mail->isSMTP();
  		    $mail->Host = 'smtp.gmail.com';
  		    $mail->SMTPAuth = true;
  		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  		    $mail->Port = 587;


          $mail->Username = "serapnazc@gmail.com"; // SMTP username
          $mail->Password = "wudqykxksnzpuekw"; // SMTP password

  		    // Sender and recipient settings
  		    $mail->setFrom('info@futurefoods.com', 'FUTURE FOODS');
  		    $mail->addAddress($to, 'Receiver Name');
  		    $mail->addReplyTo('nfo@futurefoods.com', 'FUTUREFOODS'); // to set the reply to

  		    // Setting the email content
  		    $mail->IsHTML(true);
  		    $mail->Subject = $subject;
  		    $mail->Body =$message;
  		    $mail->AltBody = '';

          if(count($file_url_array) != 0){
            foreach($file_url_array as $file){
            $mail->addAttachment($file);
            }
          }




  			ob_start();
  			$mail->Send();
  			ob_get_clean();
  		   // echo "Email message sent.";

  		   return true;


  		} catch (Exception $e) {
  			return false;
  		    //echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
  		}



}

function CleanName($name){
  return CleanVariable(preg_replace('/[^A-Za-z0-9]/', '', $name));
}

function UploadFile($file,$upload_file_name){

  $errors= array();
  $file_info = explode('.', $file['name']);
  $file_ext = $file_info[count($file_info)-1];
  $file_name = '';

  for($i=0; $i<count($file_info)-1;$i++){
    $file_name .= $file_info[$i];

  }

  $file_size= $file['size'];
  $file_tmp =$file['tmp_name'];
  $file_type=$file['type'];



  	$date = date('Y-m-d');


  if(empty($errors)==true){

    if(move_uploaded_file($file_tmp,$upload_file_name."/".$file_name."_".$date.".".$file_ext)){
      return array("result"=>1,"msg"=>"success","uploaded_file_url"=>"./".$upload_file_name."/".$file_name."_".$date.".".$file_ext);
    } else {

        $phpFileUploadErrors = array(
            0 => 'There is no error, the file uploaded with success',
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            3 => 'The uploaded file was only partially uploaded',
            4 => 'No file was uploaded',
            6 => 'Missing a temporary folder',
            7 => 'Failed to write file to disk.',
            8 => 'A PHP extension stopped the file upload.',
        );


        return array("result"=>-1,"msg"=>$phpFileUploadErrors[$file['error']]);
    }

  }
}



?>
