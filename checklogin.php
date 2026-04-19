<?php
require('includes/functions.php');

$case=sanitize_input($_POST['case']);
$password=sanitize_input($_POST['pass']);

$data = get_api_data_post($api_url . '/auth/login', ['account' => $case, 'password' => $password]);
$resp = json_decode($data, true);

if($resp && $resp['status'] == 'success'){
    $row = $resp['data'];
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['CC']=$row['ccode'];
    $_SESSION['USER_NAME']=$row['name'];
    echo "valid";
} else {
    echo "error";
}
?>