<?php
// session started here
session_start();
$con = mysqli_connect("35.224.143.203","common","common@2001@common","stm");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

?>