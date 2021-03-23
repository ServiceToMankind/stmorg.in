<?php
header("Pragma: no-cache"); 
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require('../connection.php');
require('../functions.php');

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
$oid=$_POST['ORDERID'];
$txid=$_POST['TXNID'];

if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
        echo"</br></br></br></br>";
        mysqli_query($con,"UPDATE `donations` SET `txid`='$txid',`payment_status`='1', `type`='1' WHERE `donations`.`id`='$oid'");
		//echo "<center><h1>Transaction status is success</h1></center>" . "<br/>";
        $tagline='1';
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		//echo "<b>Transaction status is failure</b>" . "<br/>";
        $tagline='0';
	}

	?>


<!DOCTYPE html>
<html>

<head>
    <title>Thankyou</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style>
    html,
    body {
        position: relative;
        width: 100%;
        height: 100%;
    }

    body {
        font-size: 16px;
        line-height: 1;
        font-family: sans-serif;
        color: magenta;
        font-weight: bold;
    }

    * {
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    a {
        cursor: pointer;
    }

    body {
        background-color: #40354E;
    }

    .view {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        width: 100%;
        height: 100%;
        font-family: "Helvetica Neue", sans-serif;
        text-align: center;
        padding-left: 16px;
        padding-right: 16px;
        align-self: center;
        margin: 0 auto;
    }

    @media (min-width: 375px) {
        .view {
            padding-left: 48px;
            padding-right: 48px;
        }
    }

    @media (min-width: 768px) {
        .view {
            max-width: 500px;
            padding-top: 96px;
            padding-bottom: 96px;
        }
    }

    .container {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: center;
    }

    .thankYou {
        width: 100%;
        height: auto;
        margin-bottom: 48px;
    }

    .tagline {
        font-size: 16px;
        color: white;
        font-weight: 500;
        line-height: 1.4;
    }

    .actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 32px;
    }

    .button {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: #FF596F;
        border-radius: 48px;
        font-size: 14px;
        line-height: 1;
        font-weight: 500;
        height: 48px;
        padding-left: 24px;
        padding-right: 24px;
        color: white;
        text-decoration: none;
        transition: opacity 300ms ease-in-out;
    }

    .button:active,
    .button:hover {
        color: white;
    }

    .button:active {
        transition-duration: 0ms;
        opacity: 0.6;
    }

    .description {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.5);
        font-weight: 500;
        line-height: 1.4;
        width: 100%;
        margin-top: 24px;
    }

    .table.table-hover.text-center.tagline {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        text-align: left;
    }

    .td {
        padding: 2px 10px;
    }

    @media print {

        .no_print,
        .no_print * {
            display: none !important;
        }

    }
    </style>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
    <?php  // include 'header.php';
    if (isset($_POST) && count($_POST)>0 )
	{ 
		// foreach($_POST as $paramName => $paramValue) {
		// 		echo "<br/>" . $paramName . " = " . $paramValue;
        // }
       
 ?>
    <div class="view">
        <div class="container">
            <?php if($tagline=='1'){ ?>
            <img class="thankYou" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82974/yep.png" />
            <p class="tagline">

                Wahoo! Thanks for your kind donation. <br> You are donated to chandu , who is fighting to survive. For
                more details, kindly <a style='color:#FF596F'
                    href='https://milaap.org/fundraisers/support-chandu-17'>click here</a>
                <?php
                }else{ ?>
            <p class="tagline">
                Shit ! Transaction failed. Please try again later.
                <?php
                }
                ?>
                <?php   
echo"
<table class='table table-hover text-center tagline'  >
  <thead>
    <tr>
     <th></th>
      <th scope=col > Order Deatils   </th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>Transaction Status </td>
      <td><b>$_POST[STATUS]</b></td>
    </tr>
    <tr>
      <td>Transaction Date </td>
      <td>$_POST[TXNDATE]</td>
    </tr>
    <tr>
    <td>Transaction ID</td>
    <td> $_POST[TXNID]</td>
    </tr>
    <tr>
    <td>Order ID</td>
    <td>$_POST[ORDERID]</td>
    </tr>
    <tr>
    <td>Transaction Ammount</td>
    <td><b>₹ $_POST[TXNAMOUNT]</b></td>
    </tr>
    
  </tbody>
</table>";

       
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
            </p>
        </div>
        <div class="actions">
            <a style="margin-right:12px" class="button" onClick="window.print()">Print Reciept</a>
            <a class="button" onClick="window.location.href='https://stmorg.in'">Go Home</a>
            <p class="description">
                "Bringing more happiness into the world."
            </p>
        </div><!-- actions -->
    </div><!-- View -->





</body>

<!-- for Printing particular Div
     <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
   </script>  -->

</html>