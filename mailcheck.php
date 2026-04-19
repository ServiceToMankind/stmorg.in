<?php
require('includes/functions.php');

if(isset($_POST['mail']) && $_POST['mail']!=''){
// verify if the email is already in the database
$email=sanitize_input($_POST['mail']);

$data = get_api_data($api_url . '/auth/verify?mail='.$email);
$resp = json_decode($data, true);

if($resp && $resp['exists'] == true){
  echo "0";
}else{
  echo "1";
}
}