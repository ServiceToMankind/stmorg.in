<?php
if(isset($_POST['email']) && $_POST['email']!=''){
    require('connection.php');
    require('functions.php');

    $email=get_safe_value($con,$_POST['email']);
    $pass=get_safe_value($con,$_POST['pass']);
    mysqli_query($con,"UPDATE `users` SET `password`='$pass' WHERE `users`.`mail`='$email'");
    echo "done";
}