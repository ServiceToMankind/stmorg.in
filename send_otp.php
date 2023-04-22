<?php
//local configs
require('connection.php');
require('functions.php');


$type=get_safe_value($con,$_POST['type']);


if($type=='email'){
$email=get_safe_value($con,$_POST['email']);
$otp=rand(111111,999999);
$_SESSION['EMAIL_OTP']=$otp;
$check_user=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`mail`='$email'"));
if($check_user>0){
echo "email_present";
die();
}
$data=get_api_data("https://apis.stmorg.in/common/otp?mail=$email&otp=$otp");

$data = json_decode($data, true);
// Check for API errors
if ($data['status'] !== "success") {
    echo "API error: " . $user_details['message'];
    exit;
}else{
	echo 'sent';
}
}
if($type=='passreset'){
$email=get_safe_value($con,$_POST['email']);
$otp=rand(111111,999999);
$_SESSION['EMAIL_OTP']=$otp;
$check_user=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`mail`='$email'"));
if($check_user>0){
$data=get_api_data("https://apis.stmorg.in/common/otp?mail=$email&otp=$otp");

$data = json_decode($data, true);
// Check for API errors
if ($data['status'] !== "success") {
	echo "API error: " . $user_details['message'];
	exit;
}else{
	echo 'sent';
}
}else{
  echo "email_absent";
  die();
}
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