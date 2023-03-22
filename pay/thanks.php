<?php
include '../functions.php';

if(isset($_GET['oid'])){
    $oid=$_GET['oid'];
    $data=get_api_data('https://apis.stmorg.in/paydata/paymentdetails?oid='.$oid);
    $data=json_decode($data,true);
    $data=$data['data'];
    $name=$data[0]['name'];
    $email=$data[0]['mail'];
    $amount=$data[0]['amount'];
    $mobile=$data[0]['mobile'];
    $txid=$data[0]['txid'];
    $date=$data[0]['added_on'];
    $payment_status=$data[0]['payment_status'];
    $payment_mode=$data[0]['type'];
    $message=$data[0]['message'];
    $custid=$data[0]['custid'];

}else{
    echo "<script>window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
    <title>Document</title>
</head>

<body>
    <div class="view">
        <div class="container">
            <img class="thankYou" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82974/yep.png" />
            <p class="tagline">
                Wahoo! Thankyou <b style="color: #FF596F;
    text-transform: capitalize;"><?php echo $name; ?></b> for your kind donation. Your Transaction was succesfull with
                id
                <b style="color: #FF596F;"> <?php echo $txid; ?> </b>.
            </p>
        </div>
        <div class="actions">
            <a href='https://stmorg.in' class="button">Return To Home Page</a>
            <p class="description">
                "Bringing more smiles into the world."
            </p>
        </div><!-- actions -->
    </div><!-- View -->
</body>

</html>