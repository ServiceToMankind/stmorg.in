<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    require('../connection.php');
    require('../functions.php');
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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Merchant Check Out Page</title>
    <meta name="GENERATOR" content="Evrsoft First Page">
</head>

<body>
    <h1>Merchant Check Out Page</h1>
    <pre>
	</pre>
    <form method="post" hidden="" action="pgRedirect.php">
        <table border="1">
            <tbody>
                <tr>
                    <th>S.No</th>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label>ORDER_ID::*</label></td>
                    <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
                            value="<?php echo $oid ?>">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label>CUSTID ::*</label></td>
                    <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off"
                            value="<?php echo $custid ?>"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                    <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID"
                            autocomplete="off" value="Retail"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><label>Channel ::*</label></td>
                    <td><input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                            autocomplete="off" value="WEB">
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><label>txnAmount*</label></td>
                    <td><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT"
                            value="<?php echo $ammount ; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input id="submitbuttono" value="CheckOut" type="submit" onclick=""></td>
                </tr>
            </tbody>
        </table>
        * - Mandatory Fields
    </form>
</body>
<script>
window.onload = function() {
    document.getElementById('submitbuttono').click();
}
</script>

</html>