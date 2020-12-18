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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
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

    <main role="main">
        <header id="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fund-heading text-center">
                            <h1>DONATE</h1>
                            <!-- <h2>Charity/Nonprofit</h2> -->
                            <div class="typed_wrap">
                                <h2>hi <?php
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
                    <form method="post"
                        action="http://www.nicdarkthemes.com/themes/charity/wp/demo/charity-foundation/donations-thankyou/">

                        <!--start title-->
                        <div class="nd_donations_section nd_donations_height_40"></div>
                        <div class="nd_donations_section">
                            <div class="nd_donations_display_table nd_donations_float_left">

                                <div style="background-color:#d55342;"
                                    class="nd_donations_display_none_responsive nd_donations_height_30 nd_donations_width_30 nd_donations_text_align_center nd_donations_border_radius_100_percentage nd_donations_display_table_cell nd_donations_vertical_align_middle">
                                    <p
                                        class="nd_donations_line_height_30 nd_donations_color_white_important nd_donations_margin_0 nd_donations_padding_0">
                                        <strong>1</strong>
                                    </p>
                                </div>
                                <h4
                                    class="nd_donations_display_table_cell nd_donations_vertical_align_middle nd_options_color_greydark nd_donations_padding_0_responsive nd_donations_padding_left_20 nd_donations_margin_0 nd_donations_padding_top_0">
                                    CHOOSE OR SELECT YOUR AMOUNT</h4>
                            </div>
                        </div>
                        <!--end title-->

                        <div class="nd_donations_section nd_donations_height_20"></div>

                        <!--START hidden value-->
                        <input name="nd_donations_single_cause_form" type="hidden" value="true">
                        <input id="nd_donations_single_cause_form_donation_id" name="nd_donations_id" type="hidden"
                            value="60">
                        <input name="nd_donations_tx" type="hidden" value="978457114">
                        <input id="nd_donations_single_cause_form_donation_value_offline" type="hidden"
                            name="nd_donations_single_cause_form_donation_value_offline" value="">
                        <!--END hidden value-->

                        <div class="nd_donations_section">
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    type="text" readonly="" value="50">
                            </div>
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_left_15 nd_donations_padding_right_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    type="text" readonly="" value="100">
                            </div>
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_left_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    type="text" readonly="" value="150">
                            </div>
                            <div
                                class="nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_left_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input
                                    class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                    type="text" readonly="" value="200">
                            </div>
                        </div>

                        <div class="nd_donations_section nd_donations_height_20"></div>

                        <div id="nd_donations_single_cause_form_donation_value_container"
                            class="nd_donations_section nd_donations_position_relative">
                            <input onclick="nd_donations_single_cause_form_filter()"
                                onchange="nd_donations_single_cause_form_filter()"
                                class="nd_donations_cursor_pointer nd_donations_section nd_donations_single_cause_form_donation_value"
                                id="nd_donations_single_cause_form_donation_value" name="nd_donations_value" type="text"
                                placeholder="Insert custom value">
                        </div>
                        <!--start title-->
                        <div class="nd_donations_section nd_donations_height_40"></div>
                        <!-- ghjhjkh -->
                        <?php 
                        if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ } else {
                        ?>
                        <div class="nd_donations_section">
                            <div class="nd_donations_display_table nd_donations_float_left">

                                <div style="background-color:#d55342;"
                                    class="nd_donations_height_30 nd_donations_display_none_responsive nd_donations_width_30 nd_donations_text_align_center nd_donations_border_radius_100_percentage nd_donations_display_table_cell nd_donations_vertical_align_middle">
                                    <p class="nd_donations_line_height_30 nd_donations_color_white_important">
                                        <strong>2</strong>
                                    </p>
                                </div>
                                <h4
                                    class="nd_donations_line_height_25_all_iphone nd_donations_display_table_cell nd_donations_vertical_align_middle nd_options_color_greydark nd_donations_padding_0_responsive nd_donations_padding_left_20">
                                    YOU ARE DONATING AS GUEST <span
                                        class="nd_donations_font_size_13 nd_donations_margin_0_10">or</span> <a
                                        class="nd_donations_display_inline_block nd_donations_color_white_important  nd_donations_bg_greydark nd_donations_padding_5_10 nd_donations_font_size_13"
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
                                    id="nd_donations_single_cause_form_donation_name" name="nd_donations_name"
                                    type="text" placeholder="Name">
                            </div>
                            <div id="nd_donations_single_cause_form_donation_surname_container"
                                class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_left_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    id="nd_donations_single_cause_form_donation_surname" name="nd_donations_surname"
                                    type="text" placeholder="Surname">
                            </div>
                        </div>
                        <div class="nd_donations_section nd_donations_height_20"></div>
                        <div class="nd_donations_section">
                            <div id="nd_donations_single_cause_form_donation_email_container"
                                class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    id="nd_donations_single_cause_form_donation_email" name="nd_donations_email"
                                    type="text" placeholder="Email">
                            </div>
                            <div
                                class="nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_left_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    name="nd_donations_address" type="text" placeholder="Address">
                            </div>
                        </div>
                        <div class="nd_donations_section nd_donations_height_20"></div>
                        <div class="nd_donations_section">
                            <div id="nd_donations_single_cause_form_donation_city_container"
                                class="nd_donations_padding_bottom_20_important_responsive nd_donations_width_50_percentage nd_donations_float_left nd_donations_position_relative nd_donations_padding_right_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    id="nd_donations_single_cause_form_donation_city" name="nd_donations_city"
                                    type="text" placeholder="City">
                            </div>
                            <div
                                class="nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_left_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                                <input onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                    name="nd_donations_country" type="text" placeholder="Country">
                            </div>
                        </div>
                        <div class="nd_donations_section nd_donations_height_20"></div>
                        <div id="nd_donations_single_cause_form_donation_message_container"
                            class="nd_donations_section nd_donations_position_relative">
                            <textarea onclick="nd_donations_single_cause_form_filter()"
                                onchange="nd_donations_single_cause_form_filter()" class="nd_donations_section"
                                name="nd_donations_message" id="nd_donations_single_cause_form_donation_message"
                                rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="nd_donations_section nd_donations_height_20"></div>
                        <div class="nd_donations_section">
                            <input id="nd_donations_single_cause_form_donation_submit" class="nd_donations_display_none"
                                disabled="disabled" type="submit" value="DONATE NOW">
                        </div>
                        <?php } ?>
                    </form>

                    <button id="nd_donations_single_cause_form_donation_checkout_submit"
                        style="background-color:#d55342;"
                        class="nd_donations_border_radius_30 nd_donations_display_inline_block nd_donations_box_sizing_border_box nd_donations_color_white_important nd_options_first_font nd_donations_padding_10_20 nd_donations_cursor_pointer nd_donations_outline_0 nd_donations_font_size_15 nd_donations_border_width_0"
                        onclick="nd_donations_single_cause_form_validate_fields(1)">CHECKOUT</button>
                    <div class="nd_donations_section nd_donations_height_40"></div>

                    <!--START Tabs-->
                    <div id="nd_donations_tab_payment_selection"
                        class="nd_donations_tabs nd_donations_section nd_donations_position_relative  ui-tabs ui-widget ui-widget-content ui-corner-all">

                        <div style="z-index:0;" id="nd_donations_single_cause_form_filter"
                            class="nd_donations_section nd_donations_position_absolute nd_donations_bg_white_alpha_85 nd_donations_cursor_not_allowed nd_donations_height_100_percentage">
                        </div>

                        <div class="nd_donations_section">

                            <div style="background-color:#d55342;"
                                class="nd_donations_display_none_responsive nd_donations_height_30 nd_donations_width_30 nd_donations_text_align_center nd_donations_border_radius_100_percentage nd_donations_float_left">
                                <p class="nd_donations_line_height_30 nd_donations_color_white_important">
                                    <strong>3</strong>
                                </p>
                            </div>

                            <ul class="nd_donations_list_style_none nd_donations_margin_0 nd_donations_padding_0 nd_donations_padding_0_responsive nd_donations_float_left nd_donations_padding_left_20 ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                                role="tablist">
                                <li class="nd_donations_display_inline_block nd_donations_margin_right_40 ui-state-default ui-corner-top ui-tabs-active ui-state-active"
                                    role="tab" tabindex="0" aria-controls="nd_donations_single_cause_tab_paypal"
                                    aria-labelledby="ui-id-8" aria-selected="true" aria-expanded="true">
                                    <h4>
                                        <a class="nd_donations_outline_0 nd_donations_padding_10_0 nd_donations_padding_top_5 nd_donations_display_inline_block nd_options_first_font nd_options_color_greydark ui-tabs-anchor"
                                            href="#nd_donations_single_cause_tab_paypal" role="presentation"
                                            tabindex="-1" id="ui-id-8">PAYPAL</a>
                                    </h4>
                                </li>
                                <li class="nd_donations_display_inline_block nd_donations_margin_right_40 ui-state-default ui-corner-top"
                                    role="tab" tabindex="-1"
                                    aria-controls="nd_donations_single_cause_tab_offline_donation"
                                    aria-labelledby="ui-id-9" aria-selected="false" aria-expanded="false">
                                    <h4>
                                        <a class="nd_donations_outline_0 nd_donations_padding_10_0 nd_donations_padding_top_5 nd_donations_display_inline_block nd_options_first_font nd_options_color_greydark ui-tabs-anchor"
                                            href="#nd_donations_single_cause_tab_offline_donation" role="presentation"
                                            tabindex="-1" id="ui-id-9">OFFLINE DONATION</a>
                                    </h4>
                                </li>
                            </ul>

                        </div>

                        <div class="nd_donations_section nd_donations_height_30"></div>
                        <div class="nd_donations_section ui-tabs-panel ui-widget-content ui-corner-bottom"
                            id="nd_donations_single_cause_tab_offline_donation" aria-labelledby="ui-id-9"
                            role="tabpanel" aria-hidden="true" style="display: none;">

                            <div class="nd_donations_section nd_donations_box_sizing_border_box">

                                <div
                                    class="nd_donations_section nd_donations_padding_15 nd_donations_box_sizing_border_box nd_donations_border_1_solid_grey">
                                    <div class="nd_donations_display_table nd_donations_float_left">
                                        <img alt=""
                                            class="nd_donations_margin_right_10 nd_donations_display_table_cell nd_donations_vertical_align_middle"
                                            width="15"
                                            src="http://www.nicdarkthemes.com/themes/charity/wp/demo/charity-foundation/wp-content/plugins/nd-donations/assets/img/icons/icon-alert-greydark.svg">
                                        <h6
                                            class="nd_donations_padding_top_0 nd_donations_display_table_cell nd_donations_vertical_align_middle nd_options_color_grey">
                                            <span class="nd_options_color_greydark"><strong>NOTE : </strong></span>YOUR
                                            DONATION WILL BE APPROVED BY THE ADMINISTRATOR ONCE THE TRANSFER WILL BE
                                            COMPLETED
                                        </h6>
                                    </div>
                                </div>

                            </div>

                            <div class="nd_donations_section nd_donations_height_30"></div>

                            <button style="background-color:#d55342;"
                                class="nd_donations_border_radius_30 nd_donations_display_inline_block nd_donations_box_sizing_border_box nd_donations_color_white_important nd_options_first_font nd_donations_padding_10_20 nd_donations_cursor_pointer nd_donations_outline_0 nd_donations_font_size_15 nd_donations_border_width_0"
                                onclick="nd_donations_single_cause_form_validate_fields(0)">DONATE NOW</button>

                        </div>
                        <div class="nd_donations_section ui-tabs-panel ui-widget-content ui-corner-bottom"
                            id="nd_donations_single_cause_tab_paypal" aria-labelledby="ui-id-8" role="tabpanel"
                            aria-hidden="false">

                            <form target="paypal" action="https://www.paypal.com/cgi-bin" method="post">

                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="business" value="newgraphicses@gmail.com">
                                <input type="hidden" name="lc" value="">
                                <input type="hidden" name="item_name" value="New School Teachers">
                                <input type="hidden" name="item_number" value="60">
                                <input id="nd_donations_single_cause_form_donation_message_paypal" type="hidden"
                                    name="custom" value="">
                                <input id="nd_donations_single_cause_form_donation_value_paypal" type="hidden"
                                    name="amount" value="">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="rm" value="2">
                                <input type="hidden" name="return"
                                    value="http://www.nicdarkthemes.com/themes/charity/wp/demo/charity-foundation/donations-thankyou/">
                                <input type="hidden" name="cancel_return" value="">
                                <input type="hidden" name="button_subtype" value="services">
                                <input type="hidden" name="no_note" value="0">
                                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">

                                <div class="nd_donations_section nd_donations_box_sizing_border_box">

                                    <div
                                        class="nd_donations_section nd_donations_padding_15 nd_donations_box_sizing_border_box nd_donations_border_1_solid_grey">
                                        <div class="nd_donations_display_table nd_donations_float_left">
                                            <img alt=""
                                                class="nd_donations_margin_right_10 nd_donations_display_table_cell nd_donations_vertical_align_middle"
                                                width="15"
                                                src="http://www.nicdarkthemes.com/themes/charity/wp/demo/charity-foundation/wp-content/plugins/nd-donations/assets/img/icons/icon-alert-greydark.svg">
                                            <h6
                                                class="nd_donations_padding_top_0 nd_donations_display_table_cell nd_donations_vertical_align_middle nd_options_color_grey">
                                                <span class="nd_options_color_greydark"><strong>NOTE :
                                                    </strong></span>WAIT THE AUTOMATIC RETURN TO THE SITE TO COMPLETE
                                                THE TRANSACTION
                                            </h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="nd_donations_section nd_donations_height_30"></div>

                                <div class="nd_donations_section nd_donations_box_sizing_border_box">
                                    <input
                                        style="background-color:#d55342; background-image:url(http://www.nicdarkthemes.com/themes/charity/wp/demo/charity-foundation/wp-content/plugins/nd-donations/assets/img/icons/icon-paypal-white.svg); background-size: 57px; padding-right: 83px !important; background-position: right 20px top -10px; background-repeat:no-repeat;"
                                        id="nd_donations_single_cause_form_donation_paypal_submit"
                                        class="nd_donations_background_repeat_no_repeat nd_donations_border_radius_30 nd_donations_box_sizing_border_box nd_donations_color_white_important nd_options_first_font nd_donations_padding_10_20_important nd_donations_cursor_pointer nd_donations_outline_0 nd_donations_font_size_15 nd_donations_border_width_0 "
                                        type="submit" disabled="disabled" value="DONATE WITH">
                                </div>

                            </form>

                        </div>
                    </div>
                    <!--END tabs-->

                    <!--END FORM-->

                    <div class="nd_donations_section nd_donations_height_50"></div>

                </div>
                <p>STM</p>
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
</body>

</html>