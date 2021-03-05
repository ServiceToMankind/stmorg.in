<?php
require('connection.php');
$id=$_SESSION['USER_ID'];
$res=mysqli_query($con,"SELECT * FROM `users` WHERE `users`.`id`='$id'");
$row=mysqli_fetch_assoc($res);

$name=$row['name'];
$mobile=$row['mobile'];
$email=$row['mail'];
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

    <main role="main">
        <header id="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fund-heading text-center">
                            <h1>DONATE</h1>
                            <!-- <h2>Charity/Nonprofit</h2> -->
                            <div class="typed_wrap">
                                <h2>
                                    hi
                                    <?php
        if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!='') {  echo $_SESSION['USER_NAME']; } ?>,
                                    <span class="typed2"></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <!-- dashcon -->
            <div>
                <div id="nd_donations_single_cause_form_section"
                    class="nd_donations_section nd_donations_padding_15 nd_donations_box_sizing_border_box">
                    <h3><strong>DONATE NOW</strong></h3>

                    <!--START FORM-->
                    <form method="post" action="Paytm_Gateway-main\TxnTest.php">
                        <!--start title-->
                        <div class="nd_donations_section nd_donations_height_40"></div>
                        <div class="nd_donations_section">
                            <div class="nd_donations_display_table nd_donations_float_left">
                                <div style="background-color: #d55342"
                                    class="nd_donations_display_none_responsive nd_donations_height_30 nd_donations_width_30 nd_donations_text_align_center nd_donations_border_radius_100_percentage nd_donations_display_table_cell nd_donations_vertical_align_middle">
                                    <p
                                        class="nd_donations_line_height_30 nd_donations_color_white_important nd_donations_margin_0 nd_donations_padding_0">
                                        <strong>1</strong>
                                    </p>
                                </div>
                                <h4
                                    class="nd_donations_display_table_cell nd_donations_vertical_align_middle nd_options_color_greydark nd_donations_padding_0_responsive nd_donations_padding_left_20 nd_donations_margin_0 nd_donations_padding_top_0">
                                    CHOOSE OR SELECT YOUR AMOUNT
                                </h4>
                            </div>
                        </div>
                        <!--end title-->

                        <div class="nd_donations_section nd_donations_height_20"></div>

                        <div class="nd_donations_section">
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    name="amount" type="text" readonly="" value="50" />
                            </div>
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_left_15 nd_donations_padding_right_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    type="text" readonly="" value="100" />
                            </div>
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_left_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    type="text" readonly="" value="150" />
                            </div>
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_left_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    type="text" readonly="" value="200" />
                            </div>
                        </div>
                        <!-- sssssssss -->
                        <script type="text/javascript">
                        //<![CDATA[

                        jQuery(document).ready(function() {
                            jQuery(".nd_donations_single_cause_form_donation_value").on(
                                "click",
                                function(e) {
                                    jQuery(
                                        ".nd_donations_single_cause_form_donation_value"
                                    ).removeClass(
                                        "nd_donations_fixed_value_donation_selected"
                                    );
                                    jQuery(
                                        ".nd_donations_single_cause_form_donation_value"
                                    ).removeAttr("name", "amount");
                                    jQuery(this).addClass(
                                        "nd_donations_fixed_value_donation_selected"
                                    );
                                    jQuery(this).attr("name", "amount");
                                }
                            );
                        });

                        //]]>
                        </script>
                        <style type="text/css">
                        .nd_donations_single_cause_form_donation_value.nd_donations_fixed_value_donation_selected {
                            background-color: #00baa3 !important;
                            border: 1px solid #00baa3 !important;
                        }

                        .nd_donations_single_cause_form_donation_value.nd_donations_fixed_value_donation_selected::-webkit-input-placeholder {
                            color: #fff !important;
                        }

                        .nd_donations_single_cause_form_donation_value.nd_donations_fixed_value_donation_selected::-moz-placeholder {
                            color: #fff !important;
                        }

                        .nd_donations_single_cause_form_donation_value.nd_donations_fixed_value_donation_selected:-ms-input-placeholder {
                            color: #fff !important;
                        }

                        .nd_donations_single_cause_form_donation_value.nd_donations_fixed_value_donation_selected:-moz-placeholder {
                            color: #fff !important;
                        }
                        </style>
                        <!-- ssssssssssssssssss -->

                        <div class="nd_donations_section nd_donations_height_20"></div>

                        <div id="nd_donations_single_cause_form_donation_value_container"
                            class="nd_donations_section nd_donations_position_relative">
                            <input onclick="nd_donations_single_cause_form_filter()"
                                onchange="nd_donations_single_cause_form_filter()"
                                class="nd_donations_cursor_pointer nd_donations_section nd_donations_single_cause_form_donation_value"
                                id="nd_donations_single_cause_form_donation_value" name="nd_donations_value" type="text"
                                placeholder="Insert custom value" />
                        </div>
                        <!--start title-->

                        <div class="nd_donations_section nd_donations_height_40"></div>
                        <!-- ghjhjkh -->
                        <?php 
                        if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){
?>
                        <div class="nd_donations_section">
                            <div class="nd_donations_display_table nd_donations_float_left">
                                <div style="background-color: #d55342"
                                    class="nd_donations_height_30 nd_donations_display_none_responsive nd_donations_width_30 nd_donations_text_align_center nd_donations_border_radius_100_percentage nd_donations_display_table_cell nd_donations_vertical_align_middle">
                                    <p class="nd_donations_line_height_30 nd_donations_color_white_important">
                                        <strong>2</strong>
                                    </p>
                                </div>
                                <h4
                                    class="nd_donations_line_height_25_all_iphone nd_donations_display_table_cell nd_donations_vertical_align_middle nd_options_color_greydark nd_donations_padding_0_responsive nd_donations_padding_left_20">
                                    YOU
                                </h4>
                            </div>
                        </div>
                        <input name="name" value="<?php echo $name ?>" hidden />
                        <input name="mail" value="<?php echo $email ?>" hidden />
                        <input name="mobile" value="<?php echo $mobile ?>" hidden />
                        <?php
                         } else {
                        ?>
                        <div class="nd_donations_section">
                            <div class="nd_donations_display_table nd_donations_float_left">
                                <div style="background-color: #d55342"
                                    class="nd_donations_display_none_responsive nd_donations_height_30 nd_donations_width_30 nd_donations_text_align_center nd_donations_border_radius_100_percentage nd_donations_display_table_cell nd_donations_vertical_align_middle">
                                    <p
                                        class="nd_donations_line_height_30 nd_donations_color_white_important nd_donations_margin_0 nd_donations_padding_0">
                                        <strong>2</strong>
                                    </p>
                                </div>
                                <h4
                                    class="nd_donations_line_height_25_all_iphone nd_donations_display_table_cell nd_donations_vertical_align_middle nd_options_color_greydark nd_donations_padding_0_responsive nd_donations_padding_left_20">
                                    YOU ARE DONATING AS GUEST
                                    <span class="nd_donations_font_size_13 nd_donations_margin_0_10">or</span>
                                    <a class="nd_donations_display_inline_block nd_donations_color_white_important nd_donations_bg_greydark nd_donations_padding_5_10 nd_donations_font_size_13"
                                        href="http://www.nicdarkthemes.com/themes/charity/wp/demo/charity-foundation/donations-account/">LOGIN</a>
                                </h4>
                            </div>
                        </div>
                        <!--end title-->

                        <div class="nd_donations_section nd_donations_height_20"></div>

                        <div class="nd_donations_section">
                            <div id="nd_donations_single_cause_form_donation_name_container"
                                class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    id="stm_name" name="nd_donations_name" type="text" placeholder="Name" required />
                            </div>
                            <div id="nd_donations_single_cause_form_donation_surname_container"
                                class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_left_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    id="stm_mobile" name="mobile" type="text" placeholder="mobile" />
                            </div>
                        </div>
                        <div class="nd_donations_section nd_donations_height_20"></div>
                        <div class="nd_donations_section">
                            <div id="nd_donations_single_cause_form_donation_email_container"
                                class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    id="nd_donations_single_cause_form_donation_email" name="nd_donations_email"
                                    type="text" placeholder="Email " required />
                            </div>
                            <!-- <div
                                class="nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_left_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    name="nd_donations_address" type="text" placeholder="Address">
                            </div> -->
                        </div>
                        <?php } ?>
                        <div class="nd_donations_section nd_donations_height_20"></div>
                        <div id="nd_donations_single_cause_form_donation_message_container"
                            class="nd_donations_section nd_donations_position_relative">
                            <textarea onclick="nd_donations_single_cause_form_filter()"
                                onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                name="message" id="nd_donations_single_cause_form_donation_message" rows="5"
                                placeholder="Message (Optional)"></textarea>
                        </div>
                        <div class="nd_donations_section nd_donations_height_20"></div>
                        <div class="nd_donations_section">
                            <input id="validate_fields_subset" class="nd_donations_display_none" type="submit"
                                value="DONATE NOW" />
                        </div>
                    </form>

                    <button id="validate_fields_sub" style="background-color: #d55342"
                        class="nd_donations_border_radius_30 nd_donations_display_inline_block nd_donations_box_sizing_border_box nd_donations_color_white_important nd_options_first_font nd_donations_padding_10_20 nd_donations_cursor_pointer nd_donations_outline_0 nd_donations_font_size_15 nd_donations_border_width_0"
                        onclick="validate_fields_sub()">
                        CHECKOUT
                    </button>
                    <div class="nd_donations_section nd_donations_height_40"></div>

                    <!--START Tabs-->

                    <!--END tabs-->

                    <!--END FORM-->

                    <div class="nd_donations_section nd_donations_height_50"></div>
                </div>
                <p><br>.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script>
    function validate_fields_sub() {
        document.getElementById("validate_fields_subset").click();
    }
    </script>
</body>

</html>