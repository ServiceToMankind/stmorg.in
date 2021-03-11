<?php
require('connection.php');
require('functions.php');

$case=get_safe_value($con,$_POST['case']);
$password=get_safe_value($con,$_POST['pass']);
$res1=mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`id`='$case' and `users`.`password`='$password'");
$res2=mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`mail`='$case' and `users`.`password`='$password'");
$res3=mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`mobile`='$case' and `users`.`password`='$password'");
$check_user1=mysqli_num_rows($res1);
$check_user2=mysqli_num_rows($res2);
$check_user3=mysqli_num_rows($res3);

if($check_user1 > 0){
    $row=mysqli_fetch_assoc($res1);
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['CC']=$row['ccname'];
    $_SESSION['USER_NAME']=$row['name'];
    echo"valid";
    // if(!isset($_SESSION['WISHLIST_ID']) && $_SESSION['WISHLIST_ID']!=''){
    //     $added_on=date('Y-m-d h:i:s');
    //  mysqli_query($con,"INSERT INTO `wishlist` (`user_id`, `product_id`, `added_on`) VALUES ('$_SESSION['USER_ID']','$_SESSION['WISHLIST_ID']','$added_on')");
    // }

    
}elseif ($check_user2 > 0) {
    $row=mysqli_fetch_assoc($res2);
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['CC']=$row['ccname'];
    $_SESSION['USER_NAME']=$row['name'];
    echo"valid";
}elseif ($check_user3 > 0) {
    $row=mysqli_fetch_assoc($res3);
    $_SESSION['USER_LOGIN']='yes';
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['CC']=$row['ccname'];
    $_SESSION['USER_NAME']=$row['name'];
    echo"valid";
}
else{
echo"error";
}
?>