<?php
if(isset($_POST['email']) && $_POST['email']!=''){
    require('functions.php');

    $rdata = $_POST;
    $data = get_api_data_post("https://apis.stmorg.in/common/register",$rdata);
    $data = json_decode($data, true);
    // Check for API errors
    if ($data['status'] !== "success") {
        echo "API error: " . $data['data'];
        exit;
    }else{
        echo 'done';
    }

}