<?php
require('connection.php');
require('functions.php');

    unset($_SESSION['USER_LOGIN']);
    unset($_SESSION['USER_ID']);
    unset($_SESSION['USER_NAME']);
    echo "<script>window.location.href='index.php'</script>";
    die();
?>