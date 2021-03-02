<?php
header("Pragma: no-cache"); 
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./Payment_Gateway/lib/config_paytm.php");
require_once("./Payment_Gateway/lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
        echo"</br></br></br></br>";
		echo "<center><h1>Transaction status is success</h1></center>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		// foreach($_POST as $paramName => $paramValue) {
		// 		echo "<br/>" . $paramName . " = " . $paramValue;
        // }
       
    
echo"<table class='table table-hover text-center'  >
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
    <td>Expected Delivery Date</td>
    <td>26 January 2021</td>
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


<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style>
                  @media print{
                    .no_print, .no_print *{
                        display: none !important;
                    }
       
                  }
    </style>
	<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<?php include 'header.php'; ?>
    
<div class="container-fluid">
    <div class="text-center" >
     <!--  printing page -->
     <input class="btn btn-primary btn-large algin-center no_print" 
        type="button" 
        value="Print this page" 
        onClick="window.print()">
    </div>
		<div class="row row-style">     
            <div class="col-sm-4"></div>
             <div class="col-sm-4 text-center">
                <h3>Thank You👧 for Shopping with Metro Mobiles</h3>
                <a class="no_print" href="home.php"><button class="btn btn-s btn-lg text-center ">Shop more latest items</button> </a>
             </div>
              <div class="col-sm-4"></div>
        </div>

		<?php include 'footer.php'; ?>
    </div>

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