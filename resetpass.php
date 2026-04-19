<?php
require('includes/functions.php');
if(isset($_POST['email']) && $_POST['email']!=''){
    $email=sanitize_input($_POST['email']);
    $pass=sanitize_input($_POST['pass']);
    
    $data = get_api_data_post($api_url . '/auth/reset', ['email' => $email, 'password' => $pass]);
    $resp = json_decode($data, true);
    
    if($resp && $resp['status'] == 'success'){
        echo "done";
    }else{
        echo "error";
    }
}