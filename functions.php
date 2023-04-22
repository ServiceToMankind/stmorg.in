<?php
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function get_safe_value($con, $str){
    if($str!=''){
        $str=trim($str);
    return mysqli_real_escape_string($con, $str);
    }
}
function pr($arr){
    echo'<pre>';
    print_r($arr);
}
function prx($arr){
    echo'<pre>';
    print_r($arr);
    die();
}
function send_otp($email){
    //Load Composer's autoloader
require 'vendor/autoload.php';

    	$otp=rand(111111,999999);
	$_SESSION['EMAIL_OTP']=$otp;
  
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings                   //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'otp.stm@gmail.com';                     //SMTP username
    $mail->Password   = 'xokubywbuwvnlvod';                               //SMTP password
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
function get_total_price_by_month($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and month(`donations`.`added_on`)=month('$date') and year(`added_on`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
function get_total_price_by_date($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and `donations`.`added_on` = '$date' and year(`added_on`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
function get_total_spends_by_month($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `spends`.`amount` from `spends` where month(`spends`.`date`)=month('$date') and year(`date`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
// by year 
function get_total_price_by_year($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and year(`added_on`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
// total donations 
function get_total_donations($con){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1'");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}

function get_api_data($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}
?>