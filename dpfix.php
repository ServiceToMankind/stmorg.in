<?php
require('connection.php');

$res= mysqli_query($con,'SELECT * FROM `USERS`');
while($row=mysqli_fetch_assoc($res)){
    $sid=$row['id'];
    $stmid=$row['ccode'].$row['id'];
    // echo "$stmid";
    // echo "<br>";
    mysqli_query($con,"UPDATE `USERS` SET `USERS`.`IMAGE`='$stmid' WHERE `USERS`.`ID`='$sid'");
    echo "done";
}