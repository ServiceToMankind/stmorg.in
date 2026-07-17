<?php
require('includes/functions.php');

// NOTE: get_safe_value()/$con live only in the API, not in the web frontend.
// This endpoint only compares the submitted OTP against the session value,
// so sanitize_input() (defined in includes/functions.php) is the correct helper.
$type = isset($_POST['type']) ? sanitize_input($_POST['type']) : '';
$otp  = isset($_POST['otp']) ? sanitize_input($_POST['otp']) : '';

if ($otp !== '' && isset($_SESSION['EMAIL_OTP']) && $otp == $_SESSION['EMAIL_OTP']) {
    echo "done";
} else {
    echo "no";
}
