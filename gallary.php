<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="description"
        content="STM ( Service to mankind ). STM  is an NGO , which fulfills the needs of homeless childrens and people." />
    <title>STM-INDIA</title>

    <!--styles-->
    <!-- <link rel="stylesheet" href="css/main/style.css"> -->
    <link rel="stylesheet" href="css/main/style.css?v=1" />
    <link rel="stylesheet" href="css/scss/gallary.css?v=1.5" />
    <!-- <link rel="stylesheet" href="css/main/banner.css"> -->
    <link rel="stylesheet" href="css/main/banner.css?v=1" />
    <link rel="stylesheet" href="css/main/btn.css?v=1" />
    <link rel="stylesheet" href="css/default/css/catto.css" />
    <link rel="stylesheet" href="css/defualt/css/catto.min.css" />
    <!-- <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script> -->
    <!-- <script src="js/jquery1.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script> -->
    <!-- <script src="main-js\typed.js"></script> -->

    <!-- BS CSS / js-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/defualt/bootstrap.css" />
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script> -->
    <script src="js/boostrap.js"></script>

    <!-- Favicons -->

    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180" />
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png" />
    <link rel="mask-icon" href="accesories/safari-tab.svg" color="#563d7c" />
    <link rel="icon" href="accesories/fevicon 32.ico" />
    <meta name="theme-color" content="#563d7c" />

    <link href="css/main/carousel.css" rel="stylesheet" />

    <!-- fontaswsome00000 -->
    <!-- <script
      src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
      data-auto-replace-svg="nest"
    ></script> -->
    <script src="js/jquery-3.5.1-slim.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
            <img style="border-radius: 50%; margin-right: 10px" src="accesories/service_to_man_kind-20200709-0001.jpg"
                height="50px" width="50px" />
            <a class="navbar-brand" href="#">Service To Mankind</a>
            <button class="navbar-toggler navbtn" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navicon"></span>
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
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
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
                            <li>
                                <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                            </li>
                            <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
                        </ul>
                    </div>

                    <?php
          
        }else{
        ?>
                    <h5>
                        <a href="login">login <i class="fas fa-sign-in-alt"></i></a>
                    </h5>
                    <?php 
        } ?>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="section">
            <div class="grid">
                <div class="headingdate">
                    <h3>Donations</h3>
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/6.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/7.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/8.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/3.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/11.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/12.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/13.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/DONATIONS/15.jpeg" />
                </div>
                <div class="headingdate">
                    <h3>Independence Day</h3>
                </div>

                <div class="item">
                    <img src="images/stm\INDEPENDENCE CELEBRATIONS/7.jpg" />
                </div>

                <div class="item">
                    <img src="images/stm\INDEPENDENCE CELEBRATIONS/2.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm\INDEPENDENCE CELEBRATIONS/3.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm\INDEPENDENCE CELEBRATIONS/4.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm\INDEPENDENCE CELEBRATIONS/6.jpg" />
                </div>
                <div class="headingdate">
                    <h3>Happy Moments</h3>
                </div>
                <div class="item">
                    <img src="images/stm/HAPPINESS/6.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/HAPPINESS/9.jpg" />
                </div>
                <div class="item">
                    <img src="images/stm/HAPPINESS/11.jpg" />
                </div>

                <div class="placeholder"></div>
            </div>
        </section>
    </main>

    <!-- partial -->
    <script src="main-js/gallary.js"></script>
    <script src="js/boostrap-4.5.js?v=1"></script>
    <script src="js/popper.js?v=1"></script>
    <script src="js/tweenmax.js?v=1"></script>
</body>

</html>