<?php
require('connection.php');
$user_id=$_SESSION['USER_ID'];
?>
<!DOCTYPE html>
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
                <!-- backup1 -->
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
                <!-- backup2 -->
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