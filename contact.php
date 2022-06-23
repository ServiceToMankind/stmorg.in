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
                    <li class="nav-item">
                        <a class="nav-link" style="color:red !important;
                        " href="https://covid.stmorg.in">COVID</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index#aboutus">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index#themes">Our Themes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="undermaintanance.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
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
                            <li><a class="dropdown-item" href="undermaintanance.html">Profile</a></li>
                            <li><a class="dropdown-item" href="undermaintanance.html">Dashboard</a></li>
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

        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container" style="margin-top:150px; margin-bottom:50px">
                <div class="row">
                    <!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> -->
                    <div class="col-lg-4  flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <h5>plot no - 109/B </h5>
                                <p>
                                    LAXMI NAGAR COLONY, SURARAM, 500055
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <h5>+91 7729817298</h5>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <div class="contact-details">
                                <p><strong>servicetomankindorganization@gmail.com</strong></p>
                                <p>Send us your query anytime! </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-area contact-form text-right" id="myForm"
                            action="https://stmindia.000webhostapp.com/mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter your name'"
                                        class="common-input mb-20 form-control" required="" type="text">
                                    <input name="mobile" placeholder="Enter your Number" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter your number'"
                                        class="common-input mb-20 form-control" required="" type="text">
                                    <input name="email" placeholder="Enter email address"
                                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'"
                                        class="common-input mb-20 form-control" required="" type="email">

                                    <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter subject'"
                                        class="common-input mb-20 form-control" required="" type="text">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <textarea class="common-textarea form-control" rows="9" name="message"
                                        placeholder="Enter Messege" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div class="alert-msg" style="text-align: left;"></div>
                                    <button class="genric-btn primary btn" style="float: right;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact-page Area -->







        <!-- FOOTER , min show undali -->
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
                                <li><i class="fas fa-caret-right"></i> ABOUT US</li>
                                <li><i class="fas fa-caret-right"></i> DONATE</li>
                                <li><i class="fas fa-caret-right"></i> CONTACT US</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="fotter-coo">
                            <h5>LATEST LOGS</h5>
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
                <a href="https://www.stmorg.in/">2020 � All Rights Reserved | Designed and Developed by
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
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</html>