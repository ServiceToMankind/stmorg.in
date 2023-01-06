<?php
require('connection.php');
require('functions.php');

if(isset($_POST['mail']) && $_POST['mail']!=''){
// verify if the email is already in the database
$email=get_safe_value($con,$_POST['email']);
$check_user=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`mail`='$email'"));
if($check_user>0){
echo "0";
}else{
echo "1";
}
}