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

    <!-- this is comment -->

    <!--styles-->
    <link rel="stylesheet" href="css/main/style.css">
    <link rel="stylesheet" href="css/main/banner.css">
    <link rel="stylesheet" href="css/main/btn.css">
    <link rel="stylesheet" href="css/default/css/catto.css">
    <link rel="stylesheet" href="css/defualt/css/catto.min.css">

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
    <!-- chimpmail -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    #mc_embed_signup {
        background: #fff;
        clear: left;
        font: 14px Helvetica, Arial, sans-serif;
    }

    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    .cese {
        text-align: center !important;
    }

    .email {
        width: 50% !important;
    }

    .fara {
        width: 50% !important;
    }

    .bday {
        font-weight: bold !important;
        color: #0984e3 !important;
    }

    .button {
        padding: 7px 15px !important;
        border-radius: 6px !important;
        background-color: #0984e3 !important;
        color: #fff !important;
    }

    .sara {
        color: #0984e3 !important;
    }

    .asterisk {
        color: red !important;
        display: inline-block !important;
    }

    .clear {
        display: inline-block !important;
    }

    .subfield,
    .monthfield {
        display: inline-block !important;
    }

    .small-meta,
    .nowrap {
        display: inline-block !important;
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
                <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
                <!-- <div class="but2">
        <span><a href="#donate-index"></a></span>
      </div> -->
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
                    <h5><a href="login.php">login <i class="fas fa-sign-in-alt"></i></a></h5>
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
                                    <a href="donate1.html" class="power_button effect_1">
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
                    <object data="images\svg\who.svg" height="500" width="500">

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
                    <object data="images\svg\do.svg" height="500" width="500"></object>
                </div>
            </div>
            <hr class="featurette-divider">
            <div id="themes" class="themescls">



                <div class="themes">OUR THEMES</div>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="images/pics/theme1.jpeg" height="140" width="140" style="border-radius: 50%;">
                        <h2>Theme 1</h2>
                        <p>Help needy people by contributing Rs 1/- per day, so that when it comes to whole one month it
                            becomes Rs 30/- for better education and basic needs for needy people.
                        </p>
                        <p><a class="btn btn-secondary" href="https://stm.imfast.io/gallary.html#food"
                                role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="images/pics/theme2.jpeg" height="140" width="140" style="border-radius: 50%;">
                        <h2>Theme 2</h2>
                        <p>Donate books, clothes, blankets to needy people.<br><br><br><br></p>
                        <p><a class="btn btn-secondary" href="https://stm.imfast.io/gallary.html#dona"
                                role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="images/pics/theme3.jpg" height="140" width="140" style="border-radius: 50%;">
                        <h2>Theme 3</h2>
                        <p>Celebrating birthday's,festivals in orphanges and old age homes with childrens and grand
                            parents.<br> We are family !! <br><br></p>
                        <p><a class="btn btn-secondary" href="https://stm.imfast.io/gallary.html#bday"
                                role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>

            <hr class="featurette-divider">


            <!-- /AYPAY .... -->

            <!--donation centre-->


            <!--join with us-->


            <!--social acc-->
            <div class="social-index">
                <h1>Let us be social !!</h1>
                <ul>
                    <li><a href="https://www.instagram.com/servicetomankindorg/"><img
                                src="images/social icons/instagram.png" height="100" width="100"></a></li>
                    <li><a href="https://twitter.com/STM_ORG "><img src="images/social icons/twitter.png" height="100"
                                width="100"></a></li>
                    <li><a href="https://www.facebook.com/Servicetomankindorg-110702720569831"><img
                                src="images/social icons/facebook.png" height="80" width="80"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCbdtIhRfuRYZbAQvM76lBOQ?view_as=subscriber"><img
                                src="images/social icons/youtube.png" height="80" width="auto"></a></li>
                </ul>
            </div>
            <hr class="featurette-divider">

            <!--Contact-->
            <div class="contact-index">
                <h1>Wanna contact us</h1>
                <h2><a class="con-btn h-surprise" href="contact.html">Click Here.</a></h2>
                <!-- <text class="h-surprise">helo!!</text> -->
            </div>
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
                        <p>Donec venenatis metus at diam condimentum pretiuteger aliquet a turpis quis pel len tesque
                            ueta turpis quis venenatissolelementum</p>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Antonya Street, 23/H-2, Building, TA, AUS </li>
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
                <a href="https://www.smarteyeapps.com/">2020 � All Rights Reserved | Designed and Developed by STM</a>

                <span>
                    <a><i class="fab fa-github"></i></a>
                    <a><i class="fab fa-google-plus-g"></i></a>
                    <a><i class="fab fa-pinterest-p"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                </span>
            </div>

        </div>


    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!-- mailchimp -->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>
    (function($) {
        window.fnames = new Array();
        window.ftypes = new Array();
        fnames[0] = 'EMAIL';
        ftypes[0] = 'email';
        fnames[1] = 'FNAME';
        ftypes[1] = 'text';
        fnames[2] = 'LNAME';
        ftypes[2] = 'text';
        fnames[3] = 'ADDRESS';
        ftypes[3] = 'address';
        fnames[4] = 'PHONE';
        ftypes[4] = 'phone';
        fnames[5] = 'BIRTHDAY';
        ftypes[5] = 'birthday';
    }(jQuery));
    var $mcj = jQuery.noConflict(true);
    </script>
</body>

</html>