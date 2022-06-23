<?php
// session started here
session_start();
$con = mysqli_connect("34.136.3.209","master","cotton2001","stm");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

?>