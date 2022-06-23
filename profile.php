<?php
require('connection.php');
$user_id=$_SESSION['USER_ID'];
$res=mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$user_id'");
$row=mysqli_fetch_assoc($res);
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
                                        <!-- <h4 class="card-title">Profile</h4> -->
                                        <!-- <h5 class="card-subtitle">Overview of Latest Month</h5> -->
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
                                <div class="row prorow">
                                    <!-- column -->
                                    <div class="col-lg-4 proholder">
                                        <img src="images\pics\theme2.jpeg" width="200px" />
                                        <a class="btn btn-info mt-3 p-15 pl-4 pr-4 mb-3" href="donate.php">
                                            edit</a>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-8">
                                        <div class="campaign ct-charts">
                                            <div class="chartist-tooltip"></div>
                                            <h1 class="proti"><?php echo $row['name']; ?></h1>
                                            <h5><strong>ID : </strong><?php echo 'STMO000'.$row['id']; ?></h5>
                                            <h5><strong>Mail : </strong><?php echo $row['mail']; ?></h5>
                                            <h5><strong>Mobile : </strong><?php echo $row['mobile']; ?></h5>
                                            <h5><strong>Role : </strong><?php echo $row['role']; ?></h5>
                                            <h5><strong>Designation : </strong><?php echo $row['designation']; ?></h5>
                                            <p>Joined on <?php echo $row['added_on']; ?></p>
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
                                    <h5>Permanent Donors from you</h5>
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