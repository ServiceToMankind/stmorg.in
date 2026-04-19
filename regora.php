<?php
require('includes/functions.php');

if(isset($_POST['name']) && $_POST['name']!=''){
    $name=sanitize_input($_POST['name']);
    $mail=sanitize_input($_POST['email']);
    $mobile=sanitize_input($_POST['mobile']);
    $designation=sanitize_input($_POST['designation']);
    $clgid=sanitize_input($_POST['clgid']);
    $branch=sanitize_input($_POST['branch']);
    $clg=sanitize_input($_POST['clgname']);

    $post_data = [
        'uid' => '', // blank for insertion
        'name' => $name,
        'mail' => $mail,
        'mobile' => $mobile,
        'role' => '2', // volunteer basic role
        'designation' => $designation,
        'clgid' => $clgid,
        'branch' => $branch,
        'clg' => $clg
    ];

    $data = get_api_data_post($api_url . '/global/manage_users', $post_data);
    $resp = json_decode($data, true);

    if($resp && $resp['status'] == 'success'){
        echo "<br>done<br><a href='form.php'>go home</a>";
    }else{
        echo "API failed to register user.";
    }
}else{
    echo "Validation failed.";
}
?>