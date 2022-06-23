<?php
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

  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Cashfree-PG TestForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body onload="document.startForm.submit()">
    <br>
    <br>
    <div class="container fluid">
        <h1 align="center">Cashfree PG Test Form</h1>
        <div class="alert alert-info">
            <strong>Note: </strong> Please insert your <span class="label label-info">Secret_key</span> in request and
            response files.
        </div>
        <div class="alert alert-info">
            <strong>Note: </strong> Please change <span class="label label-info">$mode</span> to "TEST" in request.php
            if using Test appId/secretKey credentials. Access test credentials <a
                href="https://test.gocashfree.com/merchant/pg#api-key">here</a> and production credentials <a
                href="https://merchant.cashfree.com/merchant/pg#api-key">here</a>.
        </div>
        <form id="redirectForm" name='startForm' method="post" action="request">
            <div class="form-group">
                <label>App ID:</label><br>
                <input class="form-control" name="appId" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)"
                    value="72951ca6e05de91dc2def917315927" />
            </div>
            <div class="form-group">
                <label>Order ID:</label><br>
                <input class="form-control" name="orderId" value="<?php echo $oid ?>"
                    placeholder="Enter Order ID here (Ex. order00001)" />
            </div>
            <div class="form-group">
                <label>Order Amount:</label><br>
                <input class="form-control" name="orderAmount" placeholder="Enter Order Amount here (Ex. 100)"
                    value="<?php echo $ammount ?>" />
            </div>
            <div class="form-group">
                <label>Order Currency:</label><br>
                <input class="form-control" name="orderCurrency" value="INR"
                    placeholder="Enter Currency here (Ex. INR)" />
            </div>
            <div class="form-group">
                <label>Order Note:</label><br>
                <input class="form-control" name="orderNote" value="<?php echo $message ?>"
                    placeholder="Enter Order Note here (Ex. Test order)" />
            </div>
            <div class="form-group">
                <label>Name:</label><br>
                <input class="form-control" name="customerName" value="<?php echo $name ?>"
                    placeholder="Enter your name here (Ex. John Doe)" />
            </div>
            <div class="form-group">
                <label>Email:</label><br>
                <input class="form-control" name="customerEmail" value="<?php echo $mail ?>"
                    placeholder="Enter your email address here (Ex. Johndoe@test.com)" />
            </div>
            <div class="form-group">
                <label>Phone:</label><br>
                <input class="form-control" name="customerPhone" value="<?php echo $mobile ?>"
                    placeholder="Enter your phone number here (Ex. 9999999999)" />
            </div>
            <div class="form-group">
                <label>Return URL:</label><br>
                <input class="form-control" name="returnUrl" value="https://stmorg.in/paymentsmanager/checkout/response"
                    placeholder="Enter the URL to which customer will be redirected (Ex. www.example.com)" />
            </div>
            <div class="form-group">
                <label>Notify URL:</label><br>
                <input class="form-control" name="notifyUrl" value="https://stmorg.in"
                    placeholder="Enter the URL to get server notificaitons (Ex. www.example.com)" />
            </div>
            <button type="submi" class="btn btn-primary btn-block" value="Pay">Submit</button>
            <br>
            <br>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>

</html>