<?php
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//local configs
require('connection.php');
require('functions.php');


$type=get_safe_value($con,$_POST['type']);


if($type=='email'){
$email=get_safe_value($con,$_POST['email']);

$check_user=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`mail`='$email'"));
if($check_user>0){
echo "email_present";
die();
}
	$otp=rand(111111,999999);
	$_SESSION['EMAIL_OTP']=$otp;


    // include('smtp/PHPMailerAutoload.php');
// include('smtp/PHPMailerAutoload.php');
	// $url='http://cottonmail.rf.gd/mailer.php?otp='.$otp.'&to='.$email;
	// $ch=curl_init();
	// curl_setopt($ch,CURLOPT_URL,$url);
	// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	// $result=curl_exec($ch);
	// curl_close($ch);
	// $result=json_decode($result,true);
	// echo $return=$result['return'];
	//Import PHPMailer classes into the global namespace




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings                   //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'otp.stm@gmail.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('otp.stm@gmail.com', 'OTP STM');
    $mail->addAddress("$email", 'STM USER');     //Add a recipient
    $mail->addAddress("$email");               //Name is optional
    $mail->addReplyTo("$email", 'USER');
    $mail->addCC('servicetomankindorganization@gmail.com');
    $mail->addBCC('servicetomankindorganization@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verify Your Mail';
    $mail->Body    = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Service To Mankind</a>
    </div>
    <p style="font-size:1.1em">Hi,</p>
    <p>Thank you for being a part of STM. Use the following OTP to complete your Sign Up procedures. OTP is valid for 5 minutes</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otp.'</h2>
    <p style="font-size:0.9em;">Regards,<br />service to mankind</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>Service To Mankind</p>
      <p>H.No - 109/B, Lakshmi Nagar Colony, Suraram, Hyderabad, 500055</p>
      <p>India</p>
    </div>
  </div>
</div>';
    $mail->AltBody = 'Thank you for being a part of STM. Use the following OTP to complete your Sign Up procedures. OTP is valid for 5 minutes. OTP : '.$otp;

    $mail->send();
    echo 'Sent';

}

if($type=='number'){
	$number=get_safe_value($con,$_POST['number']);
	$check_user=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`mobile`='$number'"));
if($check_user>0){
echo"mobile_present";
die();
}
	$otp=rand(111111,999999);
	$_SESSION['MOBILE_OTP']=$otp;
	$messages="hey, Your $otp is your otp!";

	        // Account details
// Authorisation details.
$number= '91'.$number;
$username = "fluffyfriend.shop@gmail.com";
$hash = "1b28089fe9e15c50b9d6f166cd11848ea6d13b8a08450c8b2ac0da1938d9c47c";

// Config variables. Consult http://api.textlocal.in/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "txtlcl"; // This is who the message appears to be from.
$numbers = $number; // A single number or a comma-seperated list of numbers
$message = "$messages";
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);
// Process your response here
echo "done";
}
?>