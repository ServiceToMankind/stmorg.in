<?php
require('connection.php');
require('functions.php');

if(isset($_POST['name']) && $_POST['name']!=''){
$name=$_POST['name'];
$mail=$_POST['email'];
$mobile=$_POST['mobile'];
date_default_timezone_set("Asia/Kolkata");
    $added_on=date('Y-m-d h:i:s');

mysqli_query($con,"INSERT INTO `users`(`ccode`, `name`, `mail`, `mobile`, `password`, `role`, `image`, `refer-by`, `added_on`) VALUES ('stmo','$name','$mail','$mobile','stm@123','2','0','0','$added_on')");
$vid=mysqli_insert_id($con);

// $vid='stmo'.$vido;
$designation=$_POST['designation'];
$clgid=$_POST['clgid'];
$branch=$_POST['branch'];
$clg=$_POST['clgname'];
mysqli_query($con,"INSERT INTO `valunteers`(`vid`, `ccode`, `designation`, `clg-id`, `branch`, `clg`) VALUES ('$vid','stmo','$designation','$clgid','$branch','$clg')");
echo "<br>";
echo "done";
echo "<a href='form.php'>go home</a>";
}else{
    echo "edho thappu jarigindhi myaan";
}

?>