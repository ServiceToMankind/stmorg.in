<?php
require('connection.php');
$user_id=$_SESSION['USER_ID'];
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
            <!-- dashcon -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
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
                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                height="100%" class="ct-chart-line" style="width: 100%; height: 100%">
                                                <g class="ct-grids">
                                                    <line x1="30" x2="30" y1="15" y2="215"
                                                        class="ct-grid ct-horizontal"></line>
                                                    <line x1="116.02857317243304" x2="116.02857317243304" y1="15"
                                                        y2="215" class="ct-grid ct-horizontal"></line>
                                                    <line x1="202.05714634486608" x2="202.05714634486608" y1="15"
                                                        y2="215" class="ct-grid ct-horizontal"></line>
                                                    <line x1="288.08571951729914" x2="288.08571951729914" y1="15"
                                                        y2="215" class="ct-grid ct-horizontal"></line>
                                                    <line x1="374.11429268973217" x2="374.11429268973217" y1="15"
                                                        y2="215" class="ct-grid ct-horizontal"></line>
                                                    <line x1="460.1428658621652" x2="460.1428658621652" y1="15" y2="215"
                                                        class="ct-grid ct-horizontal"></line>
                                                    <line x1="546.1714390345983" x2="546.1714390345983" y1="15" y2="215"
                                                        class="ct-grid ct-horizontal"></line>
                                                    <line x1="632.2000122070312" x2="632.2000122070312" y1="15" y2="215"
                                                        class="ct-grid ct-horizontal"></line>
                                                    <line y1="215" y2="215" x1="30" x2="632.2000122070312"
                                                        class="ct-grid ct-vertical"></line>
                                                    <line y1="148.33333333333331" y2="148.33333333333331" x1="30"
                                                        x2="632.2000122070312" class="ct-grid ct-vertical"></line>
                                                    <line y1="81.66666666666666" y2="81.66666666666666" x1="30"
                                                        x2="632.2000122070312" class="ct-grid ct-vertical"></line>
                                                    <line y1="15" y2="15" x1="30" x2="632.2000122070312"
                                                        class="ct-grid ct-vertical"></line>
                                                </g>
                                                <g>
                                                    <g class="ct-series ct-series-a">
                                                        <path
                                                            d="M30,215L30,215C58.676,203.889,87.352,185.37,116.029,181.667C144.705,177.963,173.381,177.963,202.057,175C230.733,172.037,259.41,169.62,288.086,161.667C316.762,153.713,345.438,48.333,374.114,48.333C402.79,48.333,431.467,150.817,460.143,155C488.819,159.183,517.495,161.667,546.171,161.667C574.848,161.667,603.524,90.556,632.2,55L632.2,215Z"
                                                            class="ct-area" x1="NaN"></path>
                                                        <path
                                                            d="M30,215C58.676,203.889,87.352,185.37,116.029,181.667C144.705,177.963,173.381,177.963,202.057,175C230.733,172.037,259.41,169.62,288.086,161.667C316.762,153.713,345.438,48.333,374.114,48.333C402.79,48.333,431.467,150.817,460.143,155C488.819,159.183,517.495,161.667,546.171,161.667C574.848,161.667,603.524,90.556,632.2,55"
                                                            class="ct-line"></path>
                                                        <line x1="30" y1="215" x2="30.01" y2="215" class="ct-point"
                                                            ct:value="0"></line>
                                                        <line x1="116.02857317243304" y1="181.66666666666666"
                                                            x2="116.03857317243305" y2="181.66666666666666"
                                                            class="ct-point" ct:value="5"></line>
                                                        <line x1="202.05714634486608" y1="175" x2="202.06714634486607"
                                                            y2="175" class="ct-point" ct:value="6"></line>
                                                        <line x1="288.08571951729914" y1="161.66666666666666"
                                                            x2="288.09571951729913" y2="161.66666666666666"
                                                            class="ct-point" ct:value="8"></line>
                                                        <line x1="374.11429268973217" y1="48.33333333333334"
                                                            x2="374.12429268973216" y2="48.33333333333334"
                                                            class="ct-point" ct:value="25"></line>
                                                        <line x1="460.1428658621652" y1="155" x2="460.1528658621652"
                                                            y2="155" class="ct-point" ct:value="9"></line>
                                                        <line x1="546.1714390345983" y1="161.66666666666666"
                                                            x2="546.1814390345983" y2="161.66666666666666"
                                                            class="ct-point" ct:value="8"></line>
                                                        <line x1="632.2000122070312" y1="55" x2="632.2100122070312"
                                                            y2="55" class="ct-point" ct:value="24"></line>
                                                    </g>
                                                    <g class="ct-series ct-series-b">
                                                        <!-- <path
                                                            d="M30,215L30,215C58.676,208.333,87.352,195,116.029,195C144.705,195,173.381,208.333,202.057,208.333C230.733,208.333,259.41,205.476,288.086,201.667C316.762,197.857,345.438,161.667,374.114,161.667C402.79,161.667,431.467,208.333,460.143,208.333C488.819,208.333,517.495,181.667,546.171,181.667C574.848,181.667,603.524,199.444,632.2,208.333L632.2,215Z"
                                                            class="ct-area" x1="NaN"></path> -->
                                                        <path
                                                            d="M30,215C58.676,208.333,87.352,195,116.029,195C144.705,195,173.381,208.333,202.057,208.333C230.733,208.333,259.41,205.476,288.086,201.667C316.762,197.857,345.438,161.667,374.114,161.667C402.79,161.667,431.467,208.333,460.143,208.333C488.819,208.333,517.495,181.667,546.171,181.667C574.848,181.667,603.524,199.444,632.2,208.333"
                                                            class="ct-line"></path>
                                                        <line x1="30" y1="215" x2="30.01" y2="215" class="ct-point"
                                                            ct:value="0"></line>
                                                        <line x1="116.02857317243304" y1="195" x2="116.03857317243305"
                                                            y2="195" class="ct-point" ct:value="3"></line>
                                                        <line x1="202.05714634486608" y1="208.33333333333334"
                                                            x2="202.06714634486607" y2="208.33333333333334"
                                                            class="ct-point" ct:value="1"></line>
                                                        <line x1="288.08571951729914" y1="201.66666666666666"
                                                            x2="288.09571951729913" y2="201.66666666666666"
                                                            class="ct-point" ct:value="2"></line>
                                                        <line x1="374.11429268973217" y1="161.66666666666666"
                                                            x2="374.12429268973216" y2="161.66666666666666"
                                                            class="ct-point" ct:value="8"></line>
                                                        <line x1="460.1428658621652" y1="208.33333333333334"
                                                            x2="460.1528658621652" y2="208.33333333333334"
                                                            class="ct-point" ct:value="1"></line>
                                                        <line x1="546.1714390345983" y1="181.66666666666666"
                                                            x2="546.1814390345983" y2="181.66666666666666"
                                                            class="ct-point" ct:value="5"></line>
                                                        <line x1="632.2000122070312" y1="208.33333333333334"
                                                            x2="632.2100122070312" y2="208.33333333333334"
                                                            class="ct-point" ct:value="1"></line>
                                                    </g>
                                                </g>
                                                <g class="ct-labels">
                                                    <foreignObject style="overflow: visible" x="30" y="220"
                                                        width="86.02857317243304" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 86px; height: 20px">1</span></foreignObject>
                                                    <foreignObject style="overflow: visible" x="116.02857317243304"
                                                        y="220" width="86.02857317243304" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 86px; height: 20px">2</span></foreignObject>
                                                    <foreignObject style="overflow: visible" x="202.05714634486608"
                                                        y="220" width="86.02857317243306" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 86px; height: 20px">3</span></foreignObject>
                                                    <foreignObject style="overflow: visible" x="288.08571951729914"
                                                        y="220" width="86.02857317243303" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 86px; height: 20px">4</span></foreignObject>
                                                    <foreignObject style="overflow: visible" x="374.11429268973217"
                                                        y="220" width="86.02857317243303" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 86px; height: 20px">5</span></foreignObject>
                                                    <foreignObject style="overflow: visible" x="460.1428658621652"
                                                        y="220" width="86.02857317243308" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 86px; height: 20px">6</span></foreignObject>
                                                    <foreignObject style="overflow: visible" x="546.1714390345983"
                                                        y="220" width="86.02857317243297" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 86px; height: 20px">7</span></foreignObject>
                                                    <foreignObject style="overflow: visible" x="632.2000122070312"
                                                        y="220" width="30" height="20"><span
                                                            class="ct-label ct-horizontal ct-end"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="width: 30px; height: 20px">8</span></foreignObject>
                                                    <foreignObject style="overflow: visible" y="148.33333333333331"
                                                        x="10" height="66.66666666666667" width="10"><span
                                                            class="ct-label ct-vertical ct-start"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="height: 67px; width: 10px">0k</span></foreignObject>
                                                    <foreignObject style="overflow: visible" y="81.66666666666664"
                                                        x="10" height="66.66666666666667" width="10"><span
                                                            class="ct-label ct-vertical ct-start"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="height: 67px; width: 10px">10k</span></foreignObject>
                                                    <foreignObject style="overflow: visible" y="15" x="10"
                                                        height="66.66666666666666" width="10"><span
                                                            class="ct-label ct-vertical ct-start"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="height: 67px; width: 10px">20k</span></foreignObject>
                                                    <foreignObject style="overflow: visible" y="-15" x="10" height="30"
                                                        width="10"><span class="ct-label ct-vertical ct-start"
                                                            xmlns="http://www.w3.org/2000/xmlns/"
                                                            style="height: 30px; width: 10px">30k</span></foreignObject>
                                                </g>
                                                <defs>
                                                    <linearGradient id="gradient" x1="0" y1="1" x2="0" y2="0">
                                                        <stop offset="0" stop-color="rgba(255, 255, 255, 1)"></stop>
                                                        <stop offset="1" stop-color="rgba(64, 196, 255, 1)"></stop>
                                                    </linearGradient>
                                                </defs>
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
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8 col-xl-6">
                        <div class="card card-hover">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Email Campaigns</h4>
                                        <h5 class="card-subtitle">Overview of Email Campaigns</h5>
                                    </div>
                                    <div class="ml-auto align-items-center">
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
                                <!-- column -->
                                <div class="row mt-5">
                                    <!-- column -->
                                    <div class="col-lg-6">
                                        <div id="visitor" style="
                          height: 290px;
                          width: 100%;
                          max-height: 290px;
                          position: relative;
                        " class="mt-3 c3">
                                            <!-- <svg
                          width="647.2000122070312"
                          height="290"
                          style="overflow: hidden"
                        >
                          <defs>
                            <clipPath id="c3-1608195626958-clip">
                              <rect
                                width="647.2000122070312"
                                height="266"
                              ></rect>
                            </clipPath>
                            <clipPath id="c3-1608195626958-clip-xaxis">
                              <rect
                                x="-31"
                                y="-20"
                                width="709.2000122070312"
                                height="40"
                              ></rect>
                            </clipPath>
                            <clipPath id="c3-1608195626958-clip-yaxis">
                              <rect
                                x="-29"
                                y="-4"
                                width="20"
                                height="290"
                              ></rect>
                            </clipPath>
                            <clipPath id="c3-1608195626958-clip-grid">
                              <rect
                                width="647.2000122070312"
                                height="266"
                              ></rect>
                            </clipPath>
                            <clipPath id="c3-1608195626958-clip-subchart">
                              <rect width="647.2000122070312"></rect>
                            </clipPath>
                          </defs>
                          <g transform="translate(0.5,4.5)">
                            <text
                              class="c3-text c3-empty"
                              text-anchor="middle"
                              dominant-baseline="middle"
                              x="323.6000061035156"
                              y="133"
                              style="opacity: 0"
                            ></text>
                            <rect
                              class="c3-zoom-rect"
                              width="647.2000122070312"
                              height="266"
                              style="opacity: 0"
                            ></rect>
                            <g
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip)"
                              class="c3-regions"
                              style="visibility: hidden"
                            ></g>
                            <g
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip-grid)"
                              class="c3-grid"
                              style="visibility: hidden"
                            >
                              <g class="c3-xgrid-focus">
                                <line
                                  class="c3-xgrid-focus"
                                  x1="-10"
                                  x2="-10"
                                  y1="0"
                                  y2="266"
                                  style="visibility: hidden"
                                ></line>
                              </g>
                            </g>
                            <g
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip)"
                              class="c3-chart"
                            >
                              <g
                                class="c3-event-rects c3-event-rects-single"
                                style="fill-opacity: 0"
                              >
                                <rect
                                  class="c3-event-rect c3-event-rect-0"
                                  x="0.399993896484375"
                                  y="0"
                                  width="647.2000122070312"
                                  height="266"
                                ></rect>
                              </g>
                              <g class="c3-chart-bars">
                                <g
                                  class="c3-chart-bar c3-target c3-target-Open"
                                  style="pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Open c3-bars c3-bars-Open"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                                <g
                                  class="c3-chart-bar c3-target c3-target-Clicked"
                                  style="pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Clicked c3-bars c3-bars-Clicked"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                                <g
                                  class="c3-chart-bar c3-target c3-target-Un-opened"
                                  style="pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Un-opened c3-bars c3-bars-Un-opened"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                                <g
                                  class="c3-chart-bar c3-target c3-target-Bounced"
                                  style="pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Bounced c3-bars c3-bars-Bounced"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                              </g>
                              <g class="c3-chart-lines">
                                <g
                                  class="c3-chart-line c3-target c3-target-Open"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Open c3-lines c3-lines-Open"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Open c3-areas c3-areas-Open"
                                  ></g>
                                  <g
                                    class="c3-selected-circles c3-selected-circles-Open"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Open c3-circles c3-circles-Open"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                                <g
                                  class="c3-chart-line c3-target c3-target-Clicked"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Clicked c3-lines c3-lines-Clicked"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Clicked c3-areas c3-areas-Clicked"
                                  ></g>
                                  <g
                                    class="c3-selected-circles c3-selected-circles-Clicked"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Clicked c3-circles c3-circles-Clicked"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                                <g
                                  class="c3-chart-line c3-target c3-target-Un-opened"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Un-opened c3-lines c3-lines-Un-opened"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Un-opened c3-areas c3-areas-Un-opened"
                                  ></g>
                                  <g
                                    class="c3-selected-circles c3-selected-circles-Un-opened"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Un-opened c3-circles c3-circles-Un-opened"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                                <g
                                  class="c3-chart-line c3-target c3-target-Bounced"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Bounced c3-lines c3-lines-Bounced"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Bounced c3-areas c3-areas-Bounced"
                                  ></g>
                                  <g
                                    class="c3-selected-circles c3-selected-circles-Bounced"
                                  ></g>
                                  <g
                                    class="c3-shapes c3-shapes-Bounced c3-circles c3-circles-Bounced"
                                    style="cursor: pointer"
                                  ></g>
                                </g>
                              </g>
                              <g
                                class="c3-chart-arcs"
                                transform="translate(323.6000061035156,128)"
                              >
                                <text
                                  class="c3-chart-arcs-title"
                                  style="text-anchor: middle; opacity: 1"
                                >
                                  Ratio
                                </text>
                                <g
                                  class="c3-chart-arc c3-target c3-target-Open"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Open c3-arcs c3-arcs-Open"
                                  >
                                    <path
                                      class="c3-shape c3-shape c3-arc c3-arc-Open"
                                      transform=""
                                      style="
                                        fill: rgb(64, 196, 255);
                                        cursor: pointer;
                                      "
                                      d="M7.445852538815907e-15,-121.6A121.6,121.6 0 0,1 52.76026267669507,109.55781433693416L37.574331807580535,78.02390396034949A86.6,86.6 0 0,0 5.302720640308039e-15,-86.6Z"
                                    ></path>
                                  </g>
                                  <text
                                    dy=".35em"
                                    class=""
                                    transform="translate(94.8409872970478,-21.646836455270265)"
                                    style="
                                      opacity: 1;
                                      text-anchor: middle;
                                      pointer-events: none;
                                    "
                                  ></text>
                                </g>
                                <g
                                  class="c3-chart-arc c3-target c3-target-Clicked"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Clicked c3-arcs c3-arcs-Clicked"
                                  >
                                    <path
                                      class="c3-shape c3-shape c3-arc c3-arc-Clicked"
                                      transform=""
                                      style="
                                        fill: rgb(41, 97, 255);
                                        cursor: pointer;
                                      "
                                      d="M-95.07070826811243,-75.81635990602197A121.6,121.6 0 0,1 -2.233755761644772e-14,-121.6L-1.5908161920924117e-14,-86.6A86.6,86.6 0 0,0 -67.70660638173139,-53.99421684096631Z"
                                    ></path>
                                  </g>
                                  <text
                                    dy=".35em"
                                    class=""
                                    transform="translate(-42.20821014135607,-87.64625146954732)"
                                    style="
                                      opacity: 1;
                                      text-anchor: middle;
                                      pointer-events: none;
                                    "
                                  ></text>
                                </g>
                                <g
                                  class="c3-chart-arc c3-target c3-target-Un-opened"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Un-opened c3-arcs c3-arcs-Un-opened"
                                  >
                                    <path
                                      class="c3-shape c3-shape c3-arc c3-arc-Un-opened"
                                      transform=""
                                      style="
                                        fill: rgb(255, 130, 28);
                                        cursor: pointer;
                                      "
                                      d="M52.76026267669507,109.55781433693416A121.6,121.6 0 0,1 -111.81457714225638,47.79184384911712L-79.63110510295562,34.03596774122979A86.6,86.6 0 0,0 37.574331807580535,78.02390396034949Z"
                                    ></path>
                                  </g>
                                  <text
                                    dy=".35em"
                                    class=""
                                    transform="translate(-34.18174288663301,91.07692821583363)"
                                    style="
                                      opacity: 1;
                                      text-anchor: middle;
                                      pointer-events: none;
                                    "
                                  ></text>
                                </g>
                                <g
                                  class="c3-chart-arc c3-target c3-target-Bounced"
                                >
                                  <g
                                    class="c3-shapes c3-shapes-Bounced c3-arcs c3-arcs-Bounced"
                                  >
                                    <path
                                      class="c3-shape c3-shape c3-arc c3-arc-Bounced"
                                      transform=""
                                      style="
                                        fill: rgb(126, 116, 251);
                                        cursor: pointer;
                                      "
                                      d="M-111.81457714225638,47.79184384911712A121.6,121.6 0 0,1 -95.07070826811243,-75.81635990602197L-67.70660638173139,-53.99421684096631A86.6,86.6 0 0,0 -79.63110510295562,34.03596774122979Z"
                                    ></path>
                                  </g>
                                  <text
                                    dy=".35em"
                                    class=""
                                    transform="translate(-96.3995928247847,-13.058212098741512)"
                                    style="
                                      opacity: 1;
                                      text-anchor: middle;
                                      pointer-events: none;
                                    "
                                  ></text>
                                </g>
                              </g>
                              <g class="c3-chart-texts">
                                <g
                                  class="c3-chart-text c3-target c3-target-Open"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g class="c3-texts c3-texts-Open"></g>
                                </g>
                                <g
                                  class="c3-chart-text c3-target c3-target-Clicked"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g class="c3-texts c3-texts-Clicked"></g>
                                </g>
                                <g
                                  class="c3-chart-text c3-target c3-target-Un-opened"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g class="c3-texts c3-texts-Un-opened"></g>
                                </g>
                                <g
                                  class="c3-chart-text c3-target c3-target-Bounced"
                                  style="opacity: 1; pointer-events: none"
                                >
                                  <g class="c3-texts c3-texts-Bounced"></g>
                                </g>
                              </g>
                            </g>
                            <g
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip-grid)"
                              class="c3-grid c3-grid-lines"
                            >
                              <g class="c3-xgrid-lines"></g>
                              <g class="c3-ygrid-lines"></g>
                            </g>
                            <g
                              class="c3-axis c3-axis-x"
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip-xaxis)"
                              transform="translate(0,266)"
                              style="visibility: visible; opacity: 0"
                            >
                              <text
                                class="c3-axis-x-label"
                                transform=""
                                style="text-anchor: end"
                                x="647.2000122070312"
                                dx="-0.5em"
                                dy="-0.5em"
                              ></text>
                              <g
                                class="tick"
                                transform="translate(324, 0)"
                                style="opacity: 1"
                              >
                                <line x1="0" x2="0" y2="6"></line>
                                <text
                                  x="0"
                                  y="9"
                                  transform=""
                                  style="text-anchor: middle; display: block"
                                >
                                  <tspan x="0" dy=".71em" dx="0">0</tspan>
                                </text>
                              </g>
                              <path
                                class="domain"
                                d="M0,6V0H647.2000122070312V6"
                              ></path>
                            </g>
                            <g
                              class="c3-axis c3-axis-y"
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip-yaxis)"
                              transform="translate(0,0)"
                              style="visibility: visible; opacity: 0"
                            >
                              <text
                                class="c3-axis-y-label"
                                transform="rotate(-90)"
                                style="text-anchor: end"
                                x="0"
                                dx="-0.5em"
                                dy="1.2em"
                              ></text>
                              <g
                                class="tick"
                                transform="translate(0,244)"
                                style="opacity: 1"
                              >
                                <line x2="-6"></line>
                                <text x="-9" y="0" style="text-anchor: end">
                                  <tspan x="-9" dy="3">15</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,208)"
                                style="opacity: 1"
                              >
                                <line x2="-6"></line>
                                <text x="-9" y="0" style="text-anchor: end">
                                  <tspan x="-9" dy="3">20</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,171)"
                                style="opacity: 1"
                              >
                                <line x2="-6"></line>
                                <text x="-9" y="0" style="text-anchor: end">
                                  <tspan x="-9" dy="3">25</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,134)"
                                style="opacity: 1"
                              >
                                <line x2="-6"></line>
                                <text x="-9" y="0" style="text-anchor: end">
                                  <tspan x="-9" dy="3">30</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,97)"
                                style="opacity: 1"
                              >
                                <line x2="-6"></line>
                                <text x="-9" y="0" style="text-anchor: end">
                                  <tspan x="-9" dy="3">35</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,60)"
                                style="opacity: 1"
                              >
                                <line x2="-6"></line>
                                <text x="-9" y="0" style="text-anchor: end">
                                  <tspan x="-9" dy="3">40</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,24)"
                                style="opacity: 1"
                              >
                                <line x2="-6"></line>
                                <text x="-9" y="0" style="text-anchor: end">
                                  <tspan x="-9" dy="3">45</tspan>
                                </text>
                              </g>
                              <path class="domain" d="M-6,1H0V266H-6"></path>
                            </g>
                            <g
                              class="c3-axis c3-axis-y2"
                              transform="translate(647.2000122070312,0)"
                              style="visibility: hidden; opacity: 0"
                            >
                              <text
                                class="c3-axis-y2-label"
                                transform="rotate(-90)"
                                style="text-anchor: end"
                                x="0"
                                dx="-0.5em"
                                dy="-0.5em"
                              ></text>
                              <g
                                class="tick"
                                transform="translate(0,266)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,240)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.1</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,213)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.2</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,187)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.3</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,160)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.4</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,134)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.5</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,107)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.6</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,81)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.7</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,54)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.8</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,28)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">0.9</tspan>
                                </text>
                              </g>
                              <g
                                class="tick"
                                transform="translate(0,1)"
                                style="opacity: 1"
                              >
                                <line x2="6" y2="0"></line>
                                <text x="9" y="0" style="text-anchor: start">
                                  <tspan x="9" dy="3">1</tspan>
                                </text>
                              </g>
                              <path class="domain" d="M6,1H0V266H6"></path>
                            </g>
                          </g>
                          <g
                            transform="translate(0.5,290.5)"
                            style="visibility: hidden"
                          >
                            <g
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip-subchart)"
                              class="c3-chart"
                            >
                              <g class="c3-chart-bars"></g>
                              <g class="c3-chart-lines"></g>
                            </g>
                            <g
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip)"
                              class="c3-brush"
                              style="
                                pointer-events: all;
                                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                              "
                            >
                              <rect
                                class="background"
                                x="0"
                                width="376.3999938964844"
                                style="visibility: hidden; cursor: crosshair"
                              ></rect>
                              <rect
                                class="extent"
                                x="0"
                                width="0"
                                style="cursor: move"
                              ></rect>
                              <g
                                class="resize e"
                                transform="translate(0,0)"
                                style="cursor: ew-resize; display: none"
                              >
                                <rect
                                  x="-3"
                                  width="6"
                                  height="6"
                                  style="visibility: hidden"
                                ></rect>
                              </g>
                              <g
                                class="resize w"
                                transform="translate(0,0)"
                                style="cursor: ew-resize; display: none"
                              >
                                <rect
                                  x="-3"
                                  width="6"
                                  height="6"
                                  style="visibility: hidden"
                                ></rect>
                              </g>
                            </g>
                            <g
                              class="c3-axis-x"
                              transform="translate(0,0)"
                              clip-path="url(https://wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index.html#c3-1608195626958-clip-xaxis)"
                              style="visibility: hidden; opacity: 0"
                            >
                              <g
                                class="tick"
                                transform="translate(324, 0)"
                                style="opacity: 1"
                              >
                                <line x1="0" x2="0" y2="6"></line>
                                <text
                                  x="0"
                                  y="9"
                                  transform=""
                                  style="text-anchor: middle; display: block"
                                >
                                  <tspan x="0" dy=".71em" dx="0">0</tspan>
                                </text>
                              </g>
                              <path
                                class="domain"
                                d="M0,6V0H647.2000122070312V6"
                              ></path>
                            </g>
                          </g>
                          <g transform="translate(0,270)">
                            <g
                              class="c3-legend-item c3-legend-item-Open"
                              style="visibility: hidden; cursor: pointer"
                            >
                              <text x="14" y="9" style="pointer-events: none">
                                Open
                              </text>
                              <rect
                                class="c3-legend-item-event"
                                x="0"
                                y="-5"
                                width="0"
                                height="0"
                                style="fill-opacity: 0"
                              ></rect>
                              <line
                                class="c3-legend-item-tile"
                                x1="-2"
                                y1="4"
                                x2="8"
                                y2="4"
                                stroke-width="10"
                                style="
                                  stroke: rgb(64, 196, 255);
                                  pointer-events: none;
                                "
                              ></line>
                            </g>
                            <g
                              class="c3-legend-item c3-legend-item-Clicked"
                              style="visibility: hidden; cursor: pointer"
                            >
                              <text x="14" y="9" style="pointer-events: none">
                                Clicked
                              </text>
                              <rect
                                class="c3-legend-item-event"
                                x="0"
                                y="-5"
                                width="0"
                                height="0"
                                style="fill-opacity: 0"
                              ></rect>
                              <line
                                class="c3-legend-item-tile"
                                x1="-2"
                                y1="4"
                                x2="8"
                                y2="4"
                                stroke-width="10"
                                style="
                                  stroke: rgb(41, 97, 255);
                                  pointer-events: none;
                                "
                              ></line>
                            </g>
                            <g
                              class="c3-legend-item c3-legend-item-Un-opened"
                              style="visibility: hidden; cursor: pointer"
                            >
                              <text x="14" y="9" style="pointer-events: none">
                                Un-opened
                              </text>
                              <rect
                                class="c3-legend-item-event"
                                x="0"
                                y="-5"
                                width="0"
                                height="0"
                                style="fill-opacity: 0"
                              ></rect>
                              <line
                                class="c3-legend-item-tile"
                                x1="-2"
                                y1="4"
                                x2="8"
                                y2="4"
                                stroke-width="10"
                                style="
                                  stroke: rgb(255, 130, 28);
                                  pointer-events: none;
                                "
                              ></line>
                            </g>
                            <g
                              class="c3-legend-item c3-legend-item-Bounced"
                              style="visibility: hidden; cursor: pointer"
                            >
                              <text x="14" y="9" style="pointer-events: none">
                                Bounced
                              </text>
                              <rect
                                class="c3-legend-item-event"
                                x="0"
                                y="-5"
                                width="0"
                                height="0"
                                style="fill-opacity: 0"
                              ></rect>
                              <line
                                class="c3-legend-item-tile"
                                x1="-2"
                                y1="4"
                                x2="8"
                                y2="4"
                                stroke-width="10"
                                style="
                                  stroke: rgb(126, 116, 251);
                                  pointer-events: none;
                                "
                              ></line>
                            </g>
                          </g>
                          <text
                            class="c3-title"
                            x="323.6000061035156"
                            y="0"
                          ></text>
                        </svg> -->
                                            <div class="c3-tooltip-container" style="
                            position: absolute;
                            pointer-events: none;
                            display: none;
                          "></div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-6">
                                        <h1 class="display-6 mb-0 font-medium">45%</h1>
                                        <span>Open Ratio for Campaigns</span>
                                        <ul class="list-style-none">
                                            <li class="mt-3 d-flex align-items-center">
                                                <i class="fas fa-circle mr-2 text-cyan font-12"></i>
                                                Open Ratio <span class="ml-auto">45%</span>
                                            </li>
                                            <li class="mt-3 d-flex align-items-center">
                                                <i class="fas fa-circle mr-1 text-info font-12"></i>
                                                Clicked Ratio <span class="ml-auto">14%</span>
                                            </li>
                                            <li class="mt-3 d-flex align-items-center">
                                                <i class="fas fa-circle mr-1 text-orange font-12"></i>
                                                Un-Open Ratio <span class="ml-auto">25%</span>
                                            </li>
                                            <li class="mt-3 d-flex align-items-center">
                                                <i class="fas fa-circle mr-1 text-primary font-12"></i>
                                                Bounced Ratio <span class="ml-auto">17%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- col -->

                                <!-- col -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-6">
                        <div class="card card-hover">
                            <div class="card-body" style="
                    background: url(../../assets/images/background/active-bg.png)
                      no-repeat top center;
                  ">
                                <div class="pt-3 text-center">
                                    <i class="mdi mdi-file-chart display-4 text-orange d-block"></i>
                                    <span class="display-4 d-block font-medium">368</span>
                                    <span>Active Visitors on Site</span>
                                    <!-- Progress -->
                                    <div class="progress mt-5" style="height: 4px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- Progress -->
                                    <!-- row -->
                                    <div class="row mt-4 mb-3">
                                        <!-- column -->
                                        <div class="col-4 border-right text-left">
                                            <h3 class="mb-0 font-medium">60%</h3>
                                            Desktop
                                        </div>
                                        <!-- column -->
                                        <div class="col-4 border-right">
                                            <h3 class="mb-0 font-medium">28%</h3>
                                            Mobile
                                        </div>
                                        <!-- column -->
                                        <div class="col-4 text-right">
                                            <h3 class="mb-0 font-medium">12%</h3>
                                            Tablet
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)"
                                        class="waves-effect waves-light mt-3 btn btn-lg btn-info accent-4 mb-3">View
                                        More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- anotherrow -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card card-hover">
                            <div class="card-body" style="
                    background: url(../../assets/images/background/active-bg.png)
                      no-repeat top center;
                  ">
                                <div class="pt-3 text-center">
                                    <!-- Progress -->
                                    <h5>Permanent Donors from you </h5>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $row=mysqli_query($con,"SELECT * from `users` where `users`.`refer-by`='$user_id'");
                                        while($data=mysqli_fetch_assoc($row)){
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $data['id'] ?></th>
                                                <td><?php echo $data['name'] ?></td>
                                                <td><?php echo $data['mobile'] ?></td>
                                                <td><?php echo $data['email'] ?></td>
                                            </tr>
                                            <?php }
                                            ?>

                                        </tbody>
                                    </table>


                                    <!-- Progress -->
                                    <!-- row -->

                                    <!-- <a href="javascript:void(0)"
                                        class="waves-effect waves-light mt-3 btn btn-lg btn-info accent-4 mb-3">View
                                        More Details</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- anotherrow -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card bg-info text-white card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Revenue Statistics</h4>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="" id="ravenue">
                                        <canvas width="94" height="100" style="
                          display: inline-block;
                          width: 94px;
                          height: 100px;
                          vertical-align: top;
                        "></canvas>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text mb-0">$351</h3>
                                        <span class="white-text op-5">Jan 10 - Jan 20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card bg-cyan text-white card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Page Views</h4>
                                <h3 class="white-text mb-0">
                                    <i class="ti-arrow-up"></i> 6548
                                </h3>
                            </div>
                            <div class="mt-3" id="views">
                                <canvas width="687" height="72" style="
                      display: inline-block;
                      width: 687.2px;
                      height: 72px;
                      vertical-align: top;
                    "></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Bounce Rate</h4>
                                <div class="d-flex no-block align-items-center mt-4">
                                    <div class="">
                                        <h3 class="font-medium mb-0">56.33%</h3>
                                        <span class="">Total Bounce</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div style="max-width: 150px; height: 60px" class="mb-5">
                                            <div class="chartjs-size-monitor" style="
                            position: absolute;
                            inset: 0px;
                            overflow: hidden;
                            pointer-events: none;
                            visibility: hidden;
                            z-index: -1;
                          ">
                                                <div class="chartjs-size-monitor-expand" style="
                              position: absolute;
                              left: 0;
                              top: 0;
                              right: 0;
                              bottom: 0;
                              overflow: hidden;
                              pointer-events: none;
                              visibility: hidden;
                              z-index: -1;
                            ">
                                                    <div style="
                                position: absolute;
                                width: 1000000px;
                                height: 1000000px;
                                left: 0;
                                top: 0;
                              "></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink" style="
                              position: absolute;
                              left: 0;
                              top: 0;
                              right: 0;
                              bottom: 0;
                              overflow: hidden;
                              pointer-events: none;
                              visibility: hidden;
                              z-index: -1;
                            ">
                                                    <div style="
                                position: absolute;
                                width: 200%;
                                height: 200%;
                                left: 0;
                                top: 0;
                              "></div>
                                                </div>
                                            </div>
                                            <canvas id="bouncerate" width="187" height="93"
                                                class="chartjs-render-monitor"
                                                style="display: block; height: 75px; width: 150px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Projects of the Month</h4>
                      <h5 class="card-subtitle">Overview of Latest Month</h5>
                    </div>
                    <div class="ml-auto d-flex no-block align-items-center">
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
                  <div class="table-responsive">
                    <table class="table no-wrap v-middle">
                      <thead>
                        <tr class="border-0">
                          <th class="border-0">Team Lead</th>
                          <th class="border-0">Project</th>
                          <th class="border-0">Team</th>
                          <th class="border-0">Status</th>
                          <th class="border-0">Weeks</th>
                          <th class="border-0">Budget</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="mr-2">
                                <img
                                  src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/images/users/d1.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 font-16 font-medium">
                                  Hanna Gover
                                </h5>
                                <span>hgover@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a
                                class="btn-circle btn btn-info"
                                href="javascript:void(0)"
                                >SS</a
                              >
                              <a
                                class="btn-circle btn btn-cyan text-white popover-item"
                                href="javascript:void(0)"
                                >DS</a
                              >
                              <a
                                class="btn-circle btn p-0 popover-item"
                                href="javascript:void(0)"
                                ><img
                                  src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/images/users/1.jpg"
                                  class="rounded-circle"
                                  width="39"
                                  alt=""
                              /></a>
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="fa fa-circle text-orange"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="In Progress"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">
                            $96K
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="mr-2">
                                <img
                                  src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/images/users/d2.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 font-16 font-medium">
                                  Daniel Kristeen
                                </h5>
                                <span>Kristeen@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a
                                class="btn-circle btn btn-info"
                                href="javascript:void(0)"
                                >SS</a
                              >
                              <a
                                class="btn-circle btn btn-primary text-white popover-item"
                                href="javascript:void(0)"
                                >DS</a
                              >
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="fa fa-circle text-success"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Active"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">
                            $96K
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="mr-2">
                                <img
                                  src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/images/users/d3.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 font-16 font-medium">
                                  Julian Josephs
                                </h5>
                                <span>Josephs@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a
                                class="btn-circle btn btn-info"
                                href="javascript:void(0)"
                                >SS</a
                              >
                              <a
                                class="btn-circle btn btn-cyan text-white popover-item"
                                href="javascript:void(0)"
                                >DS</a
                              >
                              <a
                                class="btn-circle btn btn-orange text-white popover-item"
                                href="javascript:void(0)"
                                >RP</a
                              >
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="fa fa-circle text-success"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="Active"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">
                            $96K
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex no-block align-items-center">
                              <div class="mr-2">
                                <img
                                  src="https://wrappixel.com/demos/admin-templates/xtreme-admin/assets/images/users/2.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="45"
                                />
                              </div>
                              <div class="">
                                <h5 class="mb-0 font-16 font-medium">
                                  Jan Petrovic
                                </h5>
                                <span>hgover@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <div class="popover-icon">
                              <a
                                class="btn-circle btn btn-orange text-white"
                                href="javascript:void(0)"
                                >RP</a
                              >
                              <a
                                class="btn-circle btn btn-outline-secondary"
                                href="javascript:void(0)"
                                >+</a
                              >
                            </div>
                          </td>
                          <td>
                            <i
                              class="fa fa-circle text-orange"
                              data-toggle="tooltip"
                              data-placement="top"
                              title=""
                              data-original-title="In Progress"
                            ></i>
                          </td>
                          <td>35</td>
                          <td class="blue-grey-text text-darken-4 font-medium">
                            $96K
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
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