<?php
require '../../vendor/autoload.php';
require('../../connection.php');
require('../../functions.php');
	$ammount = $_POST['amount'];
	if(isset($_SESSION['USER_ID']) && ($_SESSION['USER_ID'] != '')) {
		$custid=$_SESSION['USER_ID'];
	} else {
		$custid = 'ano';
	}
	$mobile= $_POST['mobile'];
	$mail = $_POST['mail'];
	$name = $_POST['name'];
    $message = $_POST['message'];
    date_default_timezone_set("Asia/Kolkata");
    $added_on=date('Y-m-d h:i:s');
	mysqli_query($con,"INSERT INTO `donations`(`name`, `mail`, `mobile`,`type`, `amount`, `txid`, `payment_status`, `custid`, `added_on`, `message`) VALUES ('$name','$mail','$mobile','1','$ammount','0','0','$custid','$added_on', '$message')");
	$oid=mysqli_insert_id($con);

// This is your test secret API key.
\Stripe\Stripe::setApiKey('YOUR_SECRET_KEY');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://stmorg.in';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'YOUR_PRICE_ID',
    'quantity' => "$ammount",
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . 'paymentsmanager/checkout/thanks?session_id={CHECKOUT_SESSION_ID}&oid='.$oid,
  'cancel_url' => $YOUR_DOMAIN . 'paymentsmanager/checkout/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);