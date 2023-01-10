<?php
// session started here
session_start();
$con = mysqli_connect("34.172.217.6","hydro","hydro123","stm");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

?>
