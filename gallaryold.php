<?php
require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="STM ( Service to mankind ). STM  is an NGO , which fulfills the needs of homeless childrens and people." />
    <title>STM-INDIA</title>

    <!-- this is comment -->

    <!--styles-->
    <link rel="stylesheet" href="css/main/style.css" />
    <link rel="stylesheet" href="css/main/banner.css" />
    <link rel="stylesheet" href="css/main/btn.css" />
    <link rel="stylesheet" href="css/default/css/catto.css" />
    <link rel="stylesheet" href="css/defualt/css/catto.min.css" />

    <script src="js/jquery1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="main-js\typed.js"></script>

    <!-- BS CSS / js-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Favicons -->

    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180" />
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png" />
    <link rel="mask-icon" href="accesories/safari-tab.svg" color="#563d7c" />
    <link rel="icon" href="accesories/fevicon 32.ico" />
    <meta name="theme-color" content="#563d7c" />

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
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css" />
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
    <link href="css/main/carousel.css" rel="stylesheet" />

    <!-- fontaswsome00000 -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
            <img style="border-radius: 50%; margin-right: 10px" src="accesories/service_to_man_kind-20200709-0001.jpg"
                height="50px" width="50px" />
            <a class="navbar-brand" href="index.php">Service To Mankind</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                        Hi
                        <?php echo $_SESSION['USER_NAME']; ?>
                        <button class="btn btn-secondary dropdown-toggle btn-pro" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
                        </ul>
                    </div>

                    <?php
          
        }else{
        ?>
                    <h5>
                        <a href="login.php">login <i class="fas fa-sign-in-alt"></i></a>
                    </h5>
                    <?php 
        } ?>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" style="margin-top: 130px">
        <div class="container">
            <!-- dashcon1 -->
            <h1>12-12-2021</h1><br>
            <div class="container-gal">

                <div class="gallery-container w-3 h-2">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?nature" alt="nature">
                        </div>
                        <div class="text">nature 1</div>
                    </div>
                </div>

                <div class="gallery-container w-3 h-3">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?people" alt="people">
                        </div>
                        <div class="text">people 2</div>
                    </div>
                </div>

                <div class="gallery-container h-2">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?sport" alt="sport">
                        </div>
                        <div class="text">sport 3</div>
                    </div>
                </div>

                <div class="gallery-container w-2">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?fitness" alt="fitness">
                        </div>
                        <div class="text">fitness 4</div>
                    </div>
                </div>

                <div class="gallery-container w-4 h-1">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?food" alt="food">
                        </div>
                        <div class="text">food 5</div>
                    </div>
                </div>

                <div class="gallery-container">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?travel" alt="travel">
                        </div>
                        <div class="text">travel 6</div>
                    </div>
                </div>

                <!-- <div class="gallery-container h-2">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?art" alt="art">
                        </div>
                        <div class="text">art 7</div>
                    </div>
                </div>

                <div class="gallery-container">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="http://source.unsplash.com/1600x900/?cars" alt="cars">
                        </div>
                        <div class="text">cars 8</div>
                    </div>
                </div> -->


            </div>
            <br>


            <!-- dashcon-end -->
            <!-- target block -->

            <!-- welcome -->

            <!-- boxes -->

            <!-- boxes_end -->

            <!-- /AYPAY .... -->

            <!--donation centre-->

            <!--join with us-->

            <!--social acc-->

            <!--Contact-->

            <!-- <hr class="featurette-divider"> -->
        </div>
        <!-- /.container -->

        <!-- ******************** Footer Starts Here ******************* -->
        <div class="footer-ablove">
            <div class="container">
                <div class="row">
                    <p>
                        Love All , Serve All !
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
                        <p>
                            Donec venenatis metus at diam condimentum pretiuteger aliquet a
                            turpis quis pel len tesque ueta turpis quis
                            venenatissolelementum
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> Antonya Street, 23/H-2,
                                Building, TA, AUS
                            </li>
                            <li><i class="fas fa-mobile-alt"></i> +177 (089) 987665</li>
                            <li>
                                <i class="far fa-envelope"></i> support@smarteyeapps.com
                            </li>
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
                                <li>
                                    <i class="fas fa-caret-right"></i> 100 CHILDREN RESCUE FROM
                                    WAR ZONE
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i> THR FRESH HOUSE CHILD
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i> CREATE AWARENESS IN
                                    EDUCATON
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i> WHAT HAPPEN WHEN WE LIVE!
                                </li>
                                <li><i class="fas fa-caret-right"></i> READ BLOG</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="fotter-coo">
                            <h5>PHOTO GALLERY</h5>
                            <div class="gallery-row row">
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g1.jpg" alt="" />
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g2.jpg" alt="" />
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g3.jpg" alt="" />
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g4.jpg" alt="" />
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g1.jpg" alt="" />
                                </div>
                                <div class="col-md-4 col-6 gall-col">
                                    <img src="http://localhost/trackt/assets/images/gallery/g2.jpg" alt="" />
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
</body>

</html>