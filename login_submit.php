<?php
require('includes/functions.php');

$name=sanitize_input($_POST['email']);
$password=sanitize_input($_POST['pass']);

$data = get_api_data_post($api_url . '/auth/login', ['account' => $name, 'password' => $password]);
echo "API response: " . $data . "\n";
$resp = json_decode($data, true);

if($resp && $resp['status'] == 'success'){
    $row = $resp['data'];
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['USER_NAME']=$row['name'];
    echo"<script>window.location.href='index.php'</script>";
    // if(!isset($_SESSION['WISHLIST_ID']) && $_SESSION['WISHLIST_ID']!=''){
    //     $added_on=date('Y-m-d h:i:s');
    //  mysqli_query($con,"INSERT INTO `wishlist` (`user_id`, `product_id`, `added_on`) VALUES ('$_SESSION['USER_ID']','$_SESSION['WISHLIST_ID']','$added_on')");
    // }

    
}else{
echo"no";
}
?>