<?php
require('connection.php');
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
    <link rel="stylesheet" href="css/main/style.css">
    <link rel="stylesheet" href="css/main/banner.css">
    <link rel="stylesheet" href="css/main/btn.css">
    <link rel="stylesheet" href="css/default/css/catto.css">
    <link rel="stylesheet" href="css/defualt/css/catto.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="js/jquery1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="main-js\typed.js"></script>


    <!-- BS CSS / js-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


    <!-- Favicons -->

    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180">
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="accesories/safari-tab.svg" color="#563d7c">
    <link rel="icon" href="accesories/fevicon 32.ico">
    <meta name="theme-color" content="#563d7c">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <link href="css/main/carousel.css" rel="stylesheet">

    <!-- fontaswsome00000 -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
            <img style="border-radius: 50%; margin-right: 10px;" src="accesories/service_to_man_kind-20200709-0001.jpg"
                height="50px" width="50px">
            <a class="navbar-brand" href="#">Service To Mankind</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#themes">Our Themes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallary.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>

                </ul>
                <div class="login">
                    <?php
        if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ ?>

                    <div class="dropdown">
                        Hi <?php echo $_SESSION['USER_NAME']; ?>
                        <button class="btn btn-secondary dropdown-toggle btn-pro" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
                        </ul>

                    </div>


                    <?php
          
        }else{
        ?>
                    <h5><a href="login.html">login <i class="fas fa-sign-in-alt"></i></a></h5>
                    <?php 
        } ?>

                </div>
            </div>
        </nav>
    </header>

    <main role="main">

        <header id="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fund-heading text-center">
                            <h1>STM</h1>
                            <!-- <h2>Charity/Nonprofit</h2> -->
                            <div class="typed_wrap">
                                <h2>We <span class="typed"></span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- target block -->
        <div class="overlapping_urgent_cause wow fadeInUp animated"
            style="visibility: visible; animation-name: fadeInUp;">
            <div class="container">
                <div class="urgent_cause_block alt">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="urgent_cause_heading">
                                <div class="power_highlight_tag">Last Month Donations</div>
                                <h3>Food for homeless children</h3>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="power_progress_content">
                                <div class="power_progress_inner">
                                    <div class="power_progress_bar_back">
                                        <div class="power_progress_bar" style="max-width: 95%;" back-ground
                                            colour:"blue"><span class="power_progress_value">95%</span></div>
                                    </div>
                                    <div class="power_progress_amount"><span><b>Exepected:</b> Rs.10000</span>
                                        <span><b>Raised:</b> Rs.9050</span>
                                    </div>
                                </div>
                                <div class="power_button_group">
                                    <a href="donate.php" class="power_button effect_1">
                                        <span class="button_value">Donate Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- welcome -->
        <br>
        <br>


        <div class="wel" style="color:skyblue; text-align: center">
            <h5>WELCOME TO SERVICE MANKIND</h5>
        </div>
        <div style="color: black; text-align: center">
            <h3>We Believe that we can save <br> more lifes with you...</h3>
        </div>

        <!-- boxes -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="power_iconbox type_2 wow fadeInLeft"
                            style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="power_iconbox_icon">
                                <i class="fas fa-dove primary-img"></i>
                            </div>
                            <div class="power_iconbox_content">
                                <h5>MISSION</h5>
                                <p>We Will be help Orphanages,Old Age Homes,Poor People,Needy One.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="power_iconbox type_2 wow fadeInRight"
                            style="visibility: visible; animation-name: fadeInRight;">
                            <div class="power_iconbox_icon">
                                <div class="primary-img">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="power_iconbox_content">
                                <h5>VISION</h5>
                                <p>To Get A Change In The Society By Spreading Smiles In Every One's Life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="power_iconbox type_2 wow fadeInDown"
                            style="visibility: visible; animation-name: fadeInDown;">
                            <div class="power_iconbox_icon">
                                <div class="primary-img">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                            </div>
                            <div class="power_iconbox_content">
                                <h5>PERMANENT DONOR</h5>
                                <p>If Your Are Interested To Be Part For Making Good Society By Helping and Donating
                                    Please Feel To Contact As.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="power_iconbox type_2 wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="power_iconbox_icon">
                                <div class="primary-img">
                                    <i class="fas fa-child"></i>
                                </div>
                            </div>
                            <div class="power_iconbox_content">
                                <h5>BECOME VOLUNTEER</h5>
                                <p>Lorem ipsum dolo amet cons ectetur adipis, cing elit sed congue erat condi eget.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- boxes_end -->

        <div id="aboutus"></div>

        <div class="container marketing">

            <div class="row featurette">

                <div class="col-md-7">
                    <h2 class="featurette-heading">Who<span class="text-muted"> we are</span></h2>
                    <p class="lead">Service to man kind is a students running , non-profitable Organization. STM is the
                        living embodiment of the slogan “You make your livelihoods by what you get,But you make a life
                        by what you give".STM is a platform with many volunteers.</p>
                </div>
                <div class="col-md-5">
                    <!-- <img src="images/pics/whowe.png" width="350" height="500" > -->
                    <object data="images\svg\who.svg" width="300">

                    </object>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2" style="padding-left: 70px;">
                    <h2 class="featurette-heading">What <span class="text-muted">we do</span></h2>
                    <p class="lead">Our main objective is to provide moral support to orphanages and old age homes by
                        meeting their needs and supportive to the needy one. we have a vision to change the society by
                        spreading smiles in every one's life.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <!-- <img src="images/pics/wedo.jpeg" height="500" width="350" > -->
                    <object data="images\svg\do.svg" width="300"></object>
                </div>
            </div>
            <hr class="featurette-divider">
            <div id="themes" class="themescls">



                <div class="themes">OUR THEMES</div>
                <div class="row">
                    <div class="col-lg-4">
                        <!-- pic is not available in that folder -->
                        <img src="images/pics/theme1.jpeg" height="140" width="140" style="border-radius: 50%;">
                        <h2>Theme 1</h2>
                        <p>Help needy people by contributing Rs 1/- per day, so that when it comes to whole one month it
                            becomes Rs 30/- for better education and basic needs for needy people.
                        </p>
                        <p><a class="btn btn-secondary botten" href="https://stm.imfast.io/gallary.html#food"
                                role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="images/pics/theme2.jpeg" height="140" width="140" style="border-radius: 50%;">
                        <h2>Theme 2</h2>
                        <p>Donate books, clothes, blankets to needy people.</p>
                        <p><a class="btn btn-secondary botten" href="https://stm.imfast.io/gallary.html#dona"
                                role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="images/pics/theme3.jpg" height="140" width="140" style="border-radius: 50%;">
                        <h2>Theme 3</h2>
                        <p>Celebrating birthday's,festivals in orphanges and old age homes with childrens and grand
                            parents.<br> We are family !!</p>
                        <p><a class="btn btn-secondary botten" href="https://stm.imfast.io/gallary.html#bday"
                                role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>

            <hr class="featurette-divider">


            <!-- /AYPAY .... -->

            <!--donation centre-->
            <section>
                <div>
                    <h1>Dashboard</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Donation Summary</h4>
                                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                                        </div>
                                        <div class="ml-auto d-flex no-block align-items-center">
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-4">
                                            <h1 class="mb-0 mt-4">Rs.6,890.68</h1>
                                            <h6 class="font-light text-muted">
                                                Current Month Donations
                                            </h6>
                                            <h3 class="mt-4 mb-0">Rs.1,540</h3>
                                            <h6 class="font-light text-muted">Total</h6>
                                            <a class="btn btn-info mt-3 p-15 pl-4 pr-4 mb-3" href="donate.php">
                                                Donate</a>
                                        </div>
                                        <!-- column -->
                                        <div class="col-lg-8">
                                            <div class="campaign ct-charts">
                                                <div class="chartist-tooltip"></div>
                                                <svg class="dashgra" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 741 450">
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
                                                <div class="mr-2">
                                                    <span class="text-orange display-5"><i
                                                            class="mdi mdi-wallet"></i></span>
                                                </div>
                                                <div>
                                                    <span>This Month</span>
                                                    <h3 class="font-medium mb-0">Rs.3,567.53</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col -->
                                        <!-- col -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="mr-2">
                                                    <span class="text-cyan display-5"><i
                                                            class="mdi mdi-star-circle"></i></span>
                                                </div>
                                                <div>
                                                    <span>This Year</span>
                                                    <h3 class="font-medium mb-0">Rs.769.08</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col -->
                                        <!-- col -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="mr-2">
                                                    <span class="text-info display-5"><i
                                                            class="mdi mdi-shopping"></i></span>
                                                </div>
                                                <div>
                                                    <span>Permanent Donors</span>
                                                    <h3 class="font-medium mb-0">104</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col -->
                                        <!-- col -->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="mr-2">
                                                    <span class="text-primary display-5"><i
                                                            class="mdi mdi-currency-usd"></i></span>
                                                </div>
                                                <div>
                                                    <span>Total</span>
                                                    <h3 class="font-medium mb-0">Rs.23,568.90</h3>
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


            <!--join with us-->


            <!--social acc-->
            <div class="social-index">
                <h1>Let us be social !!</h1>

                <div class="social-btns">
                    <a class="sofab btn facebook" href="#"><i class="sofa fab fa-facebook-f"></i></a>
                    <a class="sofab btn twitter" href="#"><i class="sofa fab fa-twitter"></i></a>
                    <a class="sofab btn google" href="#"><i class="sofa fab fa-instagram"></i></a>
                    <a class="sofab btn dribbble" href="#"><i class="sofa fab fa-youtube"></i></a>
                </div>


            </div>

            <!--Contact-->
            <!-- <div class="contact-index">
                <h1>Wanna contact us</h1>
                <h2><a class="con-btn h-surprise" href="contact.html">Click Here.</a></h2>
                <text class="h-surprise">helo!!</text>
            </div> -->
            <!-- <hr class="featurette-divider"> -->

        </div><!-- /.container -->



        <!-- ******************** Footer Starts Here ******************* -->
        <div class="footer-ablove">
            <div class="container">
                <div class="row">
                    <p>Love All , Serve All !
                        <button class="btn btn-default">Donate Now</button>
                    </p>
                </div>
            </div>
        </div>
        <footer class="container-fluid footer-cont">
            <div class="container">
                <div class="footer-top row">
                    <div class="col-md-4 foot-logo">
                        <h2>Charity for Educaton</h2>
                    </div>
                    <div class="col-md-8 foot-addr">
                        <p>Donec venenatis metus at diam condimentum pretiuteger aliquet a turpis quis pel len
                            tesque
                            ueta turpis quis venenatissolelementum</p>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Antonya Street, 23/H-2, Building, TA, AUS
                            </li>
                            <li><i class="fas fa-mobile-alt"></i> +177 (089) 987665 </li>
                            <li><i class="far fa-envelope"></i> support@smarteyeapps.com </li>
                        </ul>
                    </div>
                </div>
                <div class="foot-botom row">
                    <div class="col-md-3">
                        <div class="fotter-coo">
                            <h5>IMPORTANT LINKS</h5>
                            <ul>
                                <li><i class="fas fa-caret-right"></i> ABOUT US</li>
                                <li><i class="fas fa-caret-right"></i> COMPANY PROFILE</li>
                                <li><i class="fas fa-caret-right"></i> OUR SERVICES</li>
                                <li><i class="fas fa-caret-right"></i> CONTACT US</li>
                                <li><i class="fas fa-caret-right"></i> READ BLOG</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="fotter-coo">
                            <h5>GLOBAL UPDATE NEWS</h5>
                            <ul>
                                <li><i class="fas fa-caret-right"></i> 100 CHILDREN RESCUE FROM WAR ZONE</li>
                                <li><i class="fas fa-caret-right"></i> THR FRESH HOUSE CHILD</li>
                                <li><i class="fas fa-caret-right"></i> CREATE AWARENESS IN EDUCATON</li>
                                <li><i class="fas fa-caret-right"></i> WHAT HAPPEN WHEN WE LIVE!</li>
                                <li><i class="fas fa-caret-right"></i> READ BLOG</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="fotter-coo">
                            <h5>PHOTO GALLERY</h5>
                            <div class="gallery-row row">
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g1.jpg" alt="">
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g2.jpg" alt="">
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g3.jpg" alt="">
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g4.jpg" alt="">
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g1.jpg" alt="">
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g2.jpg" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2020 � All Rights Reserved | Designed and Developed by
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
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

</body>

</html>