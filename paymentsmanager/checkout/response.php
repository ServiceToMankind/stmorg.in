<?php
require('../../connection.php');
require('../../functions.php');
?>
<!-- lllll -->
<!DOCTYPE html>
<html>

<head>
    <title>Cashfree - PG Response Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <h1 align="center">Payment Response</h1>

    <?php  
		 $secretkey = "4137bc01a0ab3f4410b4021843f3a2214f0d42f3";
		 $orderId = $_POST["orderId"];
		 $orderAmount = $_POST["orderAmount"];
		 $referenceId = $_POST["referenceId"];
		 $txStatus = $_POST["txStatus"];
		 $paymentMode = $_POST["paymentMode"];
		 $txMsg = $_POST["txMsg"];
		 $txTime = $_POST["txTime"];
		 $signature = $_POST["signature"];
		 $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
		 $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
		 $computedSignature = base64_encode($hash_hmac);
		 if ($signature == $computedSignature) {
			  mysqli_query($con,"UPDATE `donations` SET `txid`='$referenceId',`payment_status`='1', `type`='1' WHERE `donations`.`id`='$orderId'");
	 ?>
    <div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">Payment Successful</div>
            <div class="panel-body">
                <!-- <div class="container"> -->
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Order ID</td>
                            <td><?php echo $orderId; ?></td>
                        </tr>
                        <tr>
                            <td>Order Amount</td>
                            <td><?php echo $orderAmount; ?></td>
                        </tr>
                        <tr>
                            <td>Reference ID</td>
                            <td><?php echo $referenceId; ?></td>
                        </tr>
                        <tr>
                            <td>Transaction Status</td>
                            <td><?php echo $txStatus; ?></td>
                        </tr>
                        <tr>
                            <td>Payment Mode </td>
                            <td><?php echo $paymentMode; ?></td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td><?php echo $txMsg; ?></td>
                        </tr>
                        <tr>
                            <td>Transaction Time</td>
                            <td><?php echo $txTime; ?></td>
                        </tr>
                    </tbody>
                </table>
                <!-- </div> -->

            </div>
        </div>
    </div>
    <?php   
	  	} else {
	 
	 ?>
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">Signature Verification failed</div>
            <div class="panel-body">
                <!-- <div class="container"> -->
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Order ID</td>
                            <td><?php echo $orderId; ?></td>
                        </tr>
                        <tr>
                            <td>Order Amount</td>
                            <td><?php echo $orderAmount; ?></td>
                        </tr>
                        <tr>
                            <td>Reference ID</td>
                            <td><?php echo $referenceId; ?></td>
                        </tr>
                        <tr>
                            <td>Transaction Status</td>
                            <td><?php echo $txStatus; ?></td>
                        </tr>
                        <tr>
                            <td>Payment Mode </td>
                            <td><?php echo $paymentMode; ?></td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td><?php echo $txMsg; ?></td>
                        </tr>
                        <tr>
                            <td>Transaction Time</td>
                            <td><?php echo $txTime; ?></td>
                        </tr>
                    </tbody>
                </table>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <?php	
	 	}
	 ?>

</body>

</html>