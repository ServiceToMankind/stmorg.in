<?php
require('connection.php');
require('functions.php');

if(isset($_POST['name']) && $_POST['name']!=''){
    $id=$_POST['id'];
$name=$_POST['name'];
$mail=$_POST['email'];
$mobile=$_POST['mobile'];
$designation=$_POST['designation'];
$clgid=$_POST['clgid'];
$branch=$_POST['branch'];
$clg=$_POST['clgname'];

mysqli_query($con,"UPDATE `users`,`valunteers` SET `users`.`name`='$name',`users`.`mail`='$mail',`users`.`mobile`='$mobile', `valunteers`.`designation`='$designation', `valunteers`.`clg-id`='$clgid', `valunteers`.`branch`='$branch',`valunteers`.`clg`='$clg' where CONCAT(`users`.`ccode`,`users`.`id`)= '$id' and CONCAT(`valunteers`.`ccode`,`valunteers`.`vid`)= '$id'");
echo "<br>";
echo "INSERT INTO `users`(`ccode`, `name`, `mail`, `mobile`, `password`, `role`, `image`, `refer-by`, `added_on`) VALUES ('stmo','$name','$mail','$mobile','stm@123','2','0','0','$added_on')";


// $vid='stmo'.$vido;
echo "<br>";
echo "done";
echo "<br>";
echo "<a href='updatq.php'>go home</a>";
}else{
    echo "edho thappu jarigindhi myaan";
}

?>