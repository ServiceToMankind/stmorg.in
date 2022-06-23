<?php
if(isset($_POST['email']) && $_POST['email']!=''){
    require('connection.php');
    require('functions.php');

    $name=get_safe_value($con,$_POST['name']);
    $email=get_safe_value($con,$_POST['email']);
    $number=get_safe_value($con,$_POST['number']);
    $pass=get_safe_value($con,$_POST['pass']);
    $by=get_safe_value($con,$_POST['by']);
    date_default_timezone_set("Asia/Kolkata");
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"INSERT INTO `users`(`ccode`, `name`, `mail`, `mobile`, `password`, `role`, `image`, `refer-by`, `added_on`) VALUES ('stmo','$name','$email','$number','$pass','4','0','$by','$added_on')");
    echo "done";
}