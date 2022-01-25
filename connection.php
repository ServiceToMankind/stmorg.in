<?php
// session started here
session_start();
$con = mysqli_connect("localhost","root","","stm");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

?>