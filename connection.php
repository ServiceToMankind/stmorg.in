<?php
// session started here
session_start();
$con = mysqli_connect("10.128.0.5","weberqdbbot","weberQdb@@bot2026","stm");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

?>