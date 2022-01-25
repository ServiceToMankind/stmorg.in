<?php
require('connection.php');
require('functions.php');

$name=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['pass']);
$res=mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`name`='$name' and `users`.`password`='$password'");
$check_user=mysqli_num_rows($res);

if($check_user>0){
    $row=mysqli_fetch_assoc($res);
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