<?php
session_start();
$con = mysqli_connect("localhost","root","mysql","stm");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
// define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'].'/ecom/');
// define('SITE_PATH','http://localhost/ecom/');

// define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH.'media/product/');
// define('PRODUCT_IMAGEI_SITE_PATH', SITE_PATH.'media/product/');  
?>