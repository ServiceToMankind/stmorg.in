<?php
require('connection.php');
date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d');
$dateValue=strtotime($date);
$month=date('m',$dateValue);
$year = date('Y',$dateValue);
$day= date('d',$dateValue);
$user_id=$_SESSION['USER_ID'];
$res=mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$user_id'");
$row=mysqli_fetch_assoc($res);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="STM ( Service to mankind ). STM  is an NGO , which fulfills the needs of homeless childrens and people.">
    <title>STM-INDIA</title>

    <!--styles-->
    <!-- <link rel="stylesheet" href="css/main/style.css"> -->
    <link rel="stylesheet" href="css/main/style.css?v=2.7">
    <!-- <link rel="stylesheet" href="css/main/banner.css"> -->
    <link rel="stylesheet" href="css/main/banner.css">
    <link rel="stylesheet" href="css/main/btn.css">
    <link rel="stylesheet" href="css/defualt/catto.css">
    <link rel="stylesheet" href="css/defualt/catto.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->
    <script src="js/jquery1.js"></script>
    <script src="js/jquery-3.5.1-slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="js/typed-1.1.1.js"></script>
    <script src="main-js/typed.js?v=1"></script>
    <!-- <script>
    alert(
        'Parts of this page are under development, only DONATE section is made active for emergency donations. Thank you for co-operating with us. - STM'
    );
    </script> -->

    <!-- BS CSS / js-->
    <link rel="stylesheet" href="css/defualt/bootstrap.css?v=1" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script> -->
    <script src="js/boostrap.js"></script>


    <!-- Favicons -->

    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180">
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="accesories/safari-tab.svg" color="#563d7c">
    <link rel="icon" href="accesories/fevicon 32.ico">
    <meta name="theme-color" content="#563d7c">

    <link href="css/main/carousel.css" rel="stylesheet">

    <!-- fontaswsome00000 -->
    <script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js?v=1" data-auto-replace-svg="nest"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet"
        href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">

    <style>
    /* html * {
        -webkit-font-smoothing: antialiased;
    }

    .h6,
    h6 {
        font-size: .75rem !important;
        font-weight: 500;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        line-height: 1.5em;
        text-transform: uppercase;
    } */

    .name h6 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .navbar {
        border: 0;
        border-radius: 3px;
        padding: .625rem 0;
        margin-bottom: 20px;
        color: #555;
        background-color: #fff !important;
        box-shadow: 0 4px 18px 0 rgba(0, 0, 0, .12), 0 7px 10px -5px rgba(0, 0, 0, .15) !important;
        z-index: 1000 !important;
        transition: all 150ms ease 0s;

    }

    .navbar.navbar-transparent {
        z-index: 1030;
        background-color: transparent !important;
        box-shadow: none !important;
        padding-top: 25px;
        color: #fff;
    }

    .navbar .navbar-brand {
        position: relative;
        color: inherit;
        height: 50px;
        font-size: 1.125rem;
        line-height: 30px;
        padding: .625rem 0;
        font-weight: 300;
        -webkit-font-smoothing: antialiased;
    }

    .navbar .navbar-nav .nav-item .nav-link:not(.btn) .material-icons {
        margin-top: -7px;
        top: 3px;
        position: relative;
        margin-right: 3px;
    }

    .navbar .navbar-nav .nav-item .nav-link .material-icons {
        font-size: 1.25rem;
        max-width: 24px;
        margin-top: -1.1em;
    }

    .navbar .navbar-nav .nav-item .nav-link .fa,
    .navbar .navbar-nav .nav-item .nav-link .material-icons {
        font-size: 1.25rem;
        max-width: 24px;
        margin-top: 0px;
    }

    .navbar .navbar-nav .nav-item .nav-link {
        position: relative;
        color: inherit;
        padding: .9375rem;
        font-weight: 400;
        font-size: 12px;
        border-radius: 3px;
        line-height: 20px;
    }

    a .material-icons {
        vertical-align: middle;
    }

    .fixed-top {
        position: fixed;
        z-index: 1030;
        left: 0;
        right: 0;
    }

    .page-header {
        height: 380px;
        background-position: center;
    }

    .page-header {
        height: 80vh;
        background-size: cover;
        margin: 0;
        padding: 0;
        border: 0;
        display: flex;
        align-items: center;
    }

    .header-filter:after,
    .header-filter:before {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
    }

    .header-filter::before {
        background: rgba(0, 0, 0, .5);
    }

    .main-raised {
        margin: -60px 30px 0;
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .main {
        background: #FFF;
        position: relative;
        z-index: 3;
    }

    .profile {
        text-align: center;
    }

    .profile img {
        max-width: 160px;
        width: 100%;
        margin: 0 auto;
        -webkit-transform: translate3d(0, -50%, 0);
        -moz-transform: translate3d(0, -50%, 0);
        -o-transform: translate3d(0, -50%, 0);
        -ms-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0);
    }

    .img-raised {
        box-shadow: 0 5px 15px -8px rgba(0, 0, 0, .24), 0 8px 10px -5px rgba(0, 0, 0, .2);
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .img-fluid,
    .img-thumbnail {
        max-width: 100%;
        height: auto;
    }

    .title {
        margin-top: 30px;
        margin-bottom: 25px;
        min-height: 32px;
        color: #3C4858;
        font-weight: 700;
        font-family: "Roboto Slab", "Times New Roman", serif;
    }

    .description {
        margin: 1.071rem auto 0;
        max-width: 600px;
        color: #999;
        font-weight: 300;
    }

    p {
        font-size: 14px;
        margin: 0 0 10px;
    }

    .profile-tabs {
        margin-top: 4.284rem;
    }

    .nav-pills,
    .nav-tabs {
        border: 0;
        border-radius: 3px;
        padding: 0 15px;
    }

    .nav .nav-item {
        position: relative;
        margin: 0 2px;
    }

    .nav-pills.nav-pills-icons .nav-item .nav-link {
        border-radius: 4px;
    }

    .nav-pills .nav-item .nav-link.active {
        color: #fff;
        background-color: #9c27b0;
        box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
    }

    .nav-pills .nav-item .nav-link {
        line-height: 24px;
        font-size: 12px;
        font-weight: 500;
        min-width: 100px;
        color: #555;
        transition: all .3s;
        border-radius: 30px;
        padding: 10px 15px;
        text-align: center;
    }

    .nav-pills .nav-item .nav-link:not(.active):hover {
        background-color: rgba(200, 200, 200, .2);
    }


    .nav-pills .nav-item i {
        display: block;
        font-size: 30px;
        padding: 15px 0;
    }

    .tab-space {
        padding: 20px 0 50px;
    }

    .gallery {
        margin-top: 3.213rem;
        padding-bottom: 50px;
    }

    .gallery img {
        width: 100%;
        margin-bottom: 2.142rem;
    }

    .profile .name {
        margin-top: -80px;
    }

    img.rounded {
        border-radius: 6px !important;
    }

    .tab-content>.active {
        display: block;
    }

    /*buttons*/
    .btn {
        position: relative;
        padding: 12px 30px;
        margin: .3125rem 1px;
        font-size: .75rem;
        font-weight: 400;
        line-height: 1.428571;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0;
        border: 0;
        border-radius: .2rem;
        outline: 0;
        transition: box-shadow .2s cubic-bezier(.4, 0, 1, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
        will-change: box-shadow, transform;
    }

    .btn.btn-just-icon {
        font-size: 20px;
        height: 41px;
        min-width: 41px;
        width: 41px;
        padding: 0;
        overflow: hidden;
        position: relative;
        line-height: 41px;
    }

    .btn.btn-just-icon fa {
        margin-top: 0;
        position: absolute;
        width: 100%;
        transform: none;
        left: 0;
        top: 0;
        height: 100%;
        line-height: 41px;
        font-size: 20px;
    }

    .btn.btn-link {
        background-color: transparent;
        color: #999;
    }

    /* dropdown */




    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        float: left;
        min-width: 11rem !important;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        background-color: #fff;
        background-clip: padding-box;
        border-radius: .25rem;
        transition: transform .3s cubic-bezier(.4, 0, .2, 1), opacity .2s cubic-bezier(.4, 0, .2, 1);
    }

    .dropdown-menu.show {
        transition: transform .3s cubic-bezier(.4, 0, .2, 1), opacity .2s cubic-bezier(.4, 0, .2, 1);
    }


    .dropdown-menu .dropdown-item:focus,
    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu a:active,
    .dropdown-menu a:focus,
    .dropdown-menu a:hover {
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(156, 39, 176, .4);
        background-color: #9c27b0;
        color: #FFF;
    }

    .show .dropdown-toggle:after {
        transform: rotate(180deg);
    }

    .dropdown-toggle:after {
        will-change: transform;
        transition: transform .15s linear;
    }


    .dropdown-menu .dropdown-item,
    .dropdown-menu li>a {
        position: relative;
        width: auto;
        display: flex;
        flex-flow: nowrap;
        align-items: center;
        color: #333;
        font-weight: 400;
        text-decoration: none;
        font-size: .8125rem;
        border-radius: .125rem;
        margin: 0 .3125rem;
        transition: all .15s linear;
        min-width: 7rem;
        padding: 0.625rem 1.25rem;
        min-height: 1rem !important;
        overflow: hidden;
        line-height: 1.428571;
        text-overflow: ellipsis;
        word-wrap: break-word;
    }

    .dropdown-menu.dropdown-with-icons .dropdown-item {
        padding: .75rem 1.25rem .75rem .75rem;
    }

    .dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
        vertical-align: middle;
        font-size: 24px;
        position: relative;
        margin-top: -4px;
        top: 1px;
        margin-right: 12px;
        opacity: .5;
    }

    /* footer */

    footer {
        margin-top: 10px;
        color: #555;
        padding: 25px;
        font-weight: 300;

    }

    .footer p {
        margin-bottom: 0;
        font-size: 14px;
        margin: 0 0 10px;
        font-weight: 300;
    }

    footer p a {
        color: #555;
        font-weight: 400;
    }

    footer p a:hover {
        color: #9f26aa;
        text-decoration: none;
    }
    </style>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white big-nav">
            <img style="border-radius: 50%; margin-right: 10px;" src="accesories/service_to_man_kind-20200709-0001.jpg"
                height="50px" width="50px">
            <!-- <a class="navbar-brand" href="#">Service To Mankind</a> -->
            <!-- <button class="navbar-toggler navbtn" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navicon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color:red !important;
                        " href="https://ask.stmorg.in">#ASKSTM</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logs">Payment Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index#aboutus">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index#themes">Our Themes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallary">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>

                </ul>
                <?php if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ ?>
                <ul class="navbar-nav user-menu">
                    <li id="userpic-main">
                        <span><i class="fa-solid fa-circle-user userpic"></i></span>
                        <ul id="dropped-prof" class="hidden">
                            <li class="nav-item">
                                <?php echo $_SESSION['USER_NAME']; ?>
                            </li>
                            <li class="nav-item">
                                <span><i class="fas fa-user"></i></span>
                                <a class="nav-link" href="profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                <a class="nav-link" href="logout">LogOut</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php }else{ ?>
                <ul class="navbar-nav user-menu">
                    <li id="userpic-main">
                        <span><a href="login"><i class="fa-solid fa-circle-user"></i></a></span>
                    </li>
                </ul>
                <?php } ?>

            </div>
            <!-- <div class="mobile-nav">
                <ul class="navbar-nav user-menu">
                    <li id="userpic-main">
                        <span><i class="fa-solid fa-circle-user userpic"></i></span>
                        <ul id="dropped-prof">
                            <li class="nav-item">
                                <?php echo $_SESSION['USER_NAME']; ?>
                            </li>
                            <li class="nav-item">
                                <span><i class="fas fa-user"></i></span>
                                <a class="nav-link" href="profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                <a class="nav-link" href="logout">LogOut</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div> -->
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white mobile-nav">
            <img style="border-radius: 50%; margin-right: 10px;" src="accesories/service_to_man_kind-20200709-0001.jpg"
                height="50px" width="50px">
            <!-- <a class="navbar-brand" href="#">Service To Mankind</a> -->
            <button class="navbar-toggler navbtn" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navicon"></span>
            </button>
            <div class="collapse navbar-collapse nav-box" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ ?>
                    <li class="nav-item">
                        <span><i class="fas fa-user"></i></span>
                        <a class="nav-link" href="profile"><?php echo $_SESSION['USER_NAME']; ?></a>
                    </li>

                    <?php }else{?>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-right-from-bracket"></i></span>
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item active">
                        <span><i class="fa-solid fa-house"></i></span>
                        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-list"></i></span>
                        <a class="nav-link" href="logs">Payment Logs</a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-circle-info"></i></span>
                        <a class="nav-link" href="index#aboutus">About us</a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-map"></i></span>
                        <a class="nav-link" href="index#themes">Our Themes</a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-image"></i></span>
                        <a class="nav-link" href="gallary">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-id-card"></i></span>
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                    <?php if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ ?>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-right-from-bracket"></i></span>
                        <a class="nav-link" href="logout">Log Out</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </nav>

    </header>

    <div class="page-header header-filter" data-parallax="true" style="
      background-image: url('images/pics/banner-2.jpg');
    "></div>
    <div class="main main-raised" style="margin-bottom: 3em;">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="accesories/service_to_man_kind-20200709-0001.jpg" alt="Circle Image"
                                    class="img-raised rounded-circle img-fluid" style="width:6em;" />
                            </div>
                            <div class="name">
                                <h3 class="title"><?php echo $row['name']; ?></h3>
                                <h6><?php
                                $rolid=$row['role'];
                                $rolres=mysqli_query($con,"SELECT * FROM `roles` WHERE `roles`.`id`='$rolid'");
                                $rolname=mysqli_fetch_assoc($rolres);
                                echo $rolname['role-name'];
                                ?> (Id: <?php echo $row['ccode'].$row['id']; ?>)</h6>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i
                                        class="fa-solid fa-trophy"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i
                                        class="fa-solid fa-trophy"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest">
                                    <<i class="fa-solid fa-trophy"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>
                        This profile page is still under development. Technical Dept. of STM are working hard to meet
                        the standards. Your donations will boosts us more.
                    </p>
                </div>

                <!--donation centre-->
                <section>
                    <div>
                        <!-- <h1>Dashboard</h1> -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-md-flex align-items-center">
                                            <div>
                                                <h4 class="card-title">Donation Summary</h4>
                                                <h5 class="card-subtitle">Overview of Latest Month</h5>
                                            </div>
                                            <!-- <div class="ml-auto d-flex no-block align-items-center">
                                            <ul class="list-inline font-12 dl mr-3 mb-0">
                                                <li class="list-inline-item text-info">
                                                    <i class="fa fa-circle"></i> Stm
                                                </li>
                                                <li class="list-inline-item text-primary">
                                                    <i class="fa fa-circle"></i> You
                                                </li>
                                            </ul>
                                            <div class="dl">
                                                <select class="custom-select">
                                                    <option value="0" selected="">Monthly</option>
                                                    <option value="1">Daily</option>
                                                    <option value="2">Weekly</option>
                                                    <option value="3">Yearly</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        </div>
                                        <div class="row">
                                            <!-- column -->
                                            <div class="col-lg-4">
                                                <?php 
                                        $mraised=0;
                                    $res=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and month(`added_on`)='$month' and year(`added_on`)='$year'");
                                    while($row=mysqli_fetch_assoc($res)){
                                        $mraised=$mraised+$row['amount'];
                                    }
                                    ?>
                                                <h1 class="mb-0 mt-4">Rs.<?php echo $mraised ?></h1>
                                                <h6 class="font-light text-muted">
                                                    Current Month Donations
                                                </h6>
                                                <?php 
                                        $draised=0;
                                    $res=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and month(`added_on`)='$month' and year(`added_on`)='$year' and day(`added_on`)='$day'");
                                    while($row=mysqli_fetch_assoc($res)){
                                        $draised=$draised+$row['amount'];
                                    }
                                    ?>
                                                <h3 class="mt-4 mb-0">Rs. <?php echo $draised ?></h3>
                                                <h6 class="font-light text-muted">This Day</h6>
                                                <a class="btn btn-info mt-3 p-15 pl-4 pr-4 mb-3" href="donate">
                                                    Donate</a>
                                            </div>
                                            <!-- column -->
                                            <div class="col-lg-8">
                                                <div class="campaign ct-charts">
                                                    <div class="chartist-tooltip"></div>
                                                    <svg class="dashgra" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 741 450">
                                                        <defs>
                                                        </defs>
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="77" y1="11" x2="10" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="171" y1="11" x2="77" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="238" y1="11" x2="171" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="292" y1="11" x2="238" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="367" y1="11" x2="292" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="466" y1="11" x2="367" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="512" y1="11" x2="466" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="588" y1="11" x2="511" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="645" y1="11" x2="588" y2="11" />
                                                        <line fill="none" stroke="#4AC900" stroke-width="4"
                                                            stroke-miterlimit="10" x1="731" y1="11" x2="645" y2="11" />
                                                        <g>
                                                            <circle fill="#FF8300" cx="10.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="77.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="171.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="238.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="292.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="367.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="466.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="510.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="588.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="645.5" cy="10.5" r="10.5" />
                                                            <circle fill="#FF8300" cx="730.5" cy="10.5" r="10.5" />
                                                        </g>
                                                        <path id="graph-measurement" fill="none" stroke="#741E00"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                            d="
	M731,127H10 M10,127v-18 M113,127v-9.1 M731,109v18 M216,127v-9.1 M319,127v-9.1 M422,127v-9.1 M525,127v-9.1 M628,127v-9.1" />
                                                    </svg>

                                                </div>
                                            </div>
                                            <!-- column -->
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- Info Box -->
                                    <!-- ============================================================== -->
                                    <div class="card-body border-top">
                                        <div class="row mb-0">
                                            <!-- col -->
                                            <div class="col-lg-3 col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-3 dashion">
                                                        <span class="text-orange display-5"><i
                                                                class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                    <div class='dahionc'>
                                                        <?php 
                                        $lmraised=0;
                                    $res=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and month(`added_on`)='$month-1' and year(`added_on`)='$year' and day(`added_on`)='$day'");
                                    while($row=mysqli_fetch_assoc($res)){
                                        $lmraised=$lmraised+$row['amount'];
                                    }
                                    ?>
                                                        <span>Last Month</span>
                                                        <h3 class="font-medium mb-0">Rs.<?php echo $lmraised ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col -->
                                            <!-- col -->
                                            <div class="col-lg-3 col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-3 dashion">
                                                        <span class="text-cyan display-5"><i
                                                                class="fas fa-calendar-check"></i></span>
                                                    </div>
                                                    <div class='dahionc'>
                                                        <?php 
                                        $yraised=0;
                                    $res=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and  year(`added_on`)='$year'");
                                    while($row=mysqli_fetch_assoc($res)){
                                        $yraised=$yraised+$row['amount'];
                                    }
                                    ?>
                                                        <span>This Year</span>
                                                        <h3 class="font-medium mb-0">Rs.<?php echo $yraised ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col -->
                                            <!-- col -->
                                            <div class="col-lg-3 col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-3 dashion">
                                                        <span class="text-info display-5"><i
                                                                class="fas fa-award"></i></span>
                                                    </div>
                                                    <div class='dahionc'>
                                                        <span>Permanent Donors</span>
                                                        <h3 class="font-medium mb-0">104</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col -->
                                            <!-- col -->
                                            <div class="col-lg-3 col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-3 dashion">
                                                        <span class="text-primary display-5"><i
                                                                class="fas fa-rupee-sign"></i></span>
                                                    </div>
                                                    <div class='dahionc'>
                                                        <?php 
                                        $traised=0;
                                    $res=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' ");
                                    while($row=mysqli_fetch_assoc($res)){
                                        $traised=$traised+$row['amount'];
                                    }
                                    ?>
                                                        <span>Total</span>
                                                        <h3 class="font-medium mb-0">Rs.<?php echo $traised ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>



    <!-- ******************** Footer Starts Here ******************* -->
    <div class="footer-ablove">
        <div class="container">
            <div class="row">
                <p class="foot-p">Love All , Serve All !
                    <button class="btn btn-default">Donate Now</button>
                </p>
            </div>
        </div>
    </div>
    <footer class="container-fluid footer-cont">
        <div class="container">
            <div class="footer-top row">
                <div class="col-md-4 foot-logo">
                    <h2>Service To Mankind</h2>
                </div>
                <div class="col-md-8 foot-addr">
                    <p>SERVICE TO MANKIND is a student running Non-Profit Organization. STM is the living embodiment
                        " You make your livelihoods by what you get, But you make a life by what you give". STM is
                        platform with many volunteers and a team contribute to a change in society</p>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> H.No - 109/B, Lakshmi Nagar Colony, Suraram,
                            Hyderabad, 500055
                        </li>
                        <li><i class="fas fa-mobile-alt"></i> +91 7729812798 </li>
                        <li><i class="far fa-envelope"></i> servicetomankindorganization@gmail.com </li>
                    </ul>
                </div>
            </div>
            <div class="foot-botom row">
                <div class="col-md-3">
                    <div class="fotter-coo">
                        <h5>IMPORTANT LINKS</h5>
                        <ul>
                            <li><a href='index#aboutus'><i class="fas fa-caret-right"></i> ABOUT US</a></li>
                            <li><a href='donate'><i class="fas fa-caret-right"></i> DONATE</a></li>
                            <li><a href='contact'><i class="fas fa-caret-right"></i> CONTACT US</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="fotter-coo">
                        <h5>LATEST LOGS</h5>
                        <ul>
                            <!-- <li><i class="fas fa-caret-right"></i> 100 CHILDREN RESCUE FROM WAR ZONE</li>
                                <li><i class="fas fa-caret-right"></i> THR FRESH HOUSE CHILD</li>
                                <li><i class="fas fa-caret-right"></i> CREATE AWARENESS IN EDUCATON</li>
                                <li><i class="fas fa-caret-right"></i> WHAT HAPPEN WHEN WE LIVE!</li>
                                <li><i class="fas fa-caret-right"></i> READ BLOG</li> -->
                            <li><i class="fas fa-caret-right"></i> Coming Soon</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="fotter-coo">
                        <h5>PHOTO GALLERY</h5>
                        <div class="gallery-row row">
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images\pics\f1.jpeg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images\pics\f2.jpeg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images\pics\f6.jpeg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images\pics\f1.jpeg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images\pics\f2.jpeg" alt="">
                            </div>
                            <div class="col-md-4 col-6 gall-col">
                                <img src="images\pics\f6.jpeg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <div class="copy">
        <div class="container">
            <a href="https://www.stmorg.in/">2020 All Rights Reserved | Designed and Developed by
                STM</a>

            <span>
                <a><i class="fab fa-youtube"></i></a>
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>


    </main>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script> -->
    <script src='js/boostrap-4.5.js'></script>
    <script src='js/popper.js'></script>
    <script src='js/tweenmax.js'></script>
    <script src="main-js/main.js"></script>
    <script>
    var container = document.getElementById('container');
    var graphMeasurement = document.getElementById('graph-measurement');

    var allCircles = document.getElementsByTagName('circle');
    var allLines = document.getElementsByTagName('line');

    //console.log(topSVGNode)



    var destArray = [15, 52, 28, 170, 105, 93, 44, 122, 179, 170, 220];


    TweenMax.set(allCircles, {
        attr: {
            fill: '#954CE9',
            r: 5
        },
        transformOrigin: '50% 50%',
        scale: 0
    })
    TweenMax.set([allLines], {
        attr: {
            stroke: '#18B5DD'
        },
        drawSVG: '100% 100%',
        strokeWidth: 2
    })
    TweenMax.set([graphMeasurement], {
        attr: {
            stroke: '#18B5DD'
        },
        drawSVG: '100% 100%',
        strokeWidth: 1
    })

    TweenMax.set([allCircles, allLines], {
        y: '+=300'
    })

    TweenMax.set(graphMeasurement, {
        y: '+=280',
        alpha: 0.3
    })
    TweenMax.to(graphMeasurement, 3, {
        drawSVG: '0% 100%',
        delay: 1,
        ease: Power2.easeInOut
    })
    TweenMax.set('svg', {
        alpha: 1
    })
    for (var i = 0; i < allCircles.length; i++) {

        TweenMax.to(allCircles[i], 2, {
            attr: {
                cy: '-=' + destArray[i]
            },
            onUpdate: moveLines,
            onUpdateParams: [i],
            delay: i / 5,
            ease: Power4.easeInOut
        })
        if (allLines[i]) {

            TweenMax.to(allLines[i], 1, {
                drawSVG: '400',
                delay: i / 5,
                ease: Power4.easeInOut
            })
        }

        TweenMax.to(allCircles[i], 1, {
            scale: 1,
            delay: i / 5,
            ease: Power4.easeInOut
        })

    }

    function moveLines(i) {

        if (allLines[i]) {

            TweenMax.set(allLines[i], {
                attr: {
                    x2: allCircles[i].getAttribute('cx'),
                    y2: allCircles[i].getAttribute('cy')
                }
            })
            TweenMax.set(allLines[i], {
                attr: {
                    x1: allCircles[i + 1].getAttribute('cx'),
                    y1: allCircles[i + 1].getAttribute('cy')
                }
            })


        }
    }
    </script>
    <script>
    var big_image;

    $(document).ready(function() {
        BrowserDetect.init();

        // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
        $('body').bootstrapMaterialDesign();

        window_width = $(window).width();

        $navbar = $('.navbar[color-on-scroll]');
        scroll_distance = $navbar.attr('color-on-scroll') || 500;

        $navbar_collapse = $('.navbar').find('.navbar-collapse');

        //  Activate the Tooltips
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

        // Activate Popovers
        $('[data-toggle="popover"]').popover();

        if ($('.navbar-color-on-scroll').length != 0) {
            $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
        }

        materialKit.checkScrollForTransparentNavbar();

        if (window_width >= 768) {
            big_image = $('.page-header[data-parallax="true"]');
            if (big_image.length != 0) {
                $(window).on('scroll', materialKit.checkScrollForParallax);
            }

        }


    });

    $(document).on('click', '.navbar-toggler', function() {
        $toggle = $(this);

        if (materialKit.misc.navbar_menu_visible == 1) {
            $('html').removeClass('nav-open');
            materialKit.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
                $toggle.removeClass('toggled');
            }, 550);

            $('html').removeClass('nav-open-absolute');
        } else {
            setTimeout(function() {
                $toggle.addClass('toggled');
            }, 580);


            div = '<div id="bodyClick"></div>';
            $(div).appendTo("body").click(function() {
                $('html').removeClass('nav-open');

                if ($('nav').hasClass('navbar-absolute')) {
                    $('html').removeClass('nav-open-absolute');
                }
                materialKit.misc.navbar_menu_visible = 0;
                $('#bodyClick').remove();
                setTimeout(function() {
                    $toggle.removeClass('toggled');
                }, 550);
            });

            if ($('nav').hasClass('navbar-absolute')) {
                $('html').addClass('nav-open-absolute');
            }

            $('html').addClass('nav-open');
            materialKit.misc.navbar_menu_visible = 1;
        }
    });

    materialKit = {
        misc: {
            navbar_menu_visible: 0,
            window_width: 0,
            transparent: true,
            fixedTop: false,
            navbar_initialized: false,
            isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
        },

        initFormExtendedDatetimepickers: function() {
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        },

        initSliders: function() {
            // Sliders for demo purpose
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
                start: 40,
                connect: [true, false],
                range: {
                    min: 0,
                    max: 100
                }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
                start: [20, 60],
                connect: true,
                range: {
                    min: 0,
                    max: 100
                }
            });
        },

        checkScrollForParallax: function() {
            oVal = ($(window).scrollTop() / 3);
            big_image.css({
                'transform': 'translate3d(0,' + oVal + 'px,0)',
                '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
                '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
                '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
            });
        },

        checkScrollForTransparentNavbar: debounce(function() {
            if ($(document).scrollTop() > scroll_distance) {
                if (materialKit.misc.transparent) {
                    materialKit.misc.transparent = false;
                    $('.navbar-color-on-scroll').removeClass('navbar-transparent');
                }
            } else {
                if (!materialKit.misc.transparent) {
                    materialKit.misc.transparent = true;
                    $('.navbar-color-on-scroll').addClass('navbar-transparent');
                }
            }
        }, 17)
    };

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
    };

    var BrowserDetect = {
        init: function() {
            this.browser = this.searchString(this.dataBrowser) || "Other";
            this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator
                .appVersion) || "Unknown";
        },
        searchString: function(data) {
            for (var i = 0; i < data.length; i++) {
                var dataString = data[i].string;
                this.versionSearchString = data[i].subString;

                if (dataString.indexOf(data[i].subString) !== -1) {
                    return data[i].identity;
                }
            }
        },
        searchVersion: function(dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index === -1) {
                return;
            }

            var rv = dataString.indexOf("rv:");
            if (this.versionSearchString === "Trident" && rv !== -1) {
                return parseFloat(dataString.substring(rv + 3));
            } else {
                return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
            }
        },

        dataBrowser: [{
                string: navigator.userAgent,
                subString: "Chrome",
                identity: "Chrome"
            },
            {
                string: navigator.userAgent,
                subString: "MSIE",
                identity: "Explorer"
            },
            {
                string: navigator.userAgent,
                subString: "Trident",
                identity: "Explorer"
            },
            {
                string: navigator.userAgent,
                subString: "Firefox",
                identity: "Firefox"
            },
            {
                string: navigator.userAgent,
                subString: "Safari",
                identity: "Safari"
            },
            {
                string: navigator.userAgent,
                subString: "Opera",
                identity: "Opera"
            }
        ]

    };
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>
</body>

</html>