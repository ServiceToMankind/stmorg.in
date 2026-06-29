<?php
require('includes/functions.php');
if(isset($_SESSION['USER_ID']) && $_SESSION['USER_ID']!=''){
    $id=$_SESSION['USER_ID'];
    $cc = isset($_SESSION['CC']) ? $_SESSION['CC'] : 'stmo';
    
    $data = get_api_data($api_url . '/global/users?uid=' . $cc . $id);
    $resp = json_decode($data, true);
    
    if($resp && $resp['status'] == 'success' && !empty($resp['data'])){
        $row = $resp['data'][0];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $email=$row['mail'];
    } else {
        $name = '';
        $mobile = '';
        $email = '';
    }
}else{
    $id='0';
}
include('header.php');
?>

<main role="main">
    <header id="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fund-heading text-center">
                        <h1>DONATE</h1>
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
                <h3 class="stm-donate-title"><strong>DONATE NOW</strong></h3>

                <div class="stm-gateway-notice" role="status">
                    <span class="stm-gateway-badge">Temporarily Unavailable</span>
                    <p>Our payment gateway isn't working right now. Please scan the Google&nbsp;Pay
                        code below or pay to <strong>+91&nbsp;7729817298</strong> to donate.</p>
                </div>

                <div class="stm-gpay-wrap">
                    <!-- Image added using the <img> element -->
                    <img src="images/pics/google%20pay%20stm.jpg"
                        alt="Google Pay number is +91 7729817298" class="stm-gpay-img">
                </div>

                <!--START FORM-->
                <form method="post" action="https://apis.stmorg.in/pay/start" class="stm-donate-form">
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
                    <!-- danger text  -->
                    <p class="stm-amount-note">Online checkout is temporarily unavailable &mdash; amounts shown for
                        reference.</p>
                    <!--end title-->

                    <div class="nd_donations_section nd_donations_height_20"></div>

                    <div class="nd_donations_section stm-amount-grid">
                        <div
                            class="stm-amount-cell nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                            <input
                                class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                name="amount" type="text" readonly="" value="50" />
                        </div>
                        <div
                            class="stm-amount-cell nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_left_15 nd_donations_padding_right_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                            <input
                                class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                type="text" readonly="" value="100" />
                        </div>
                        <div
                            class="stm-amount-cell nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_left_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                            <input
                                class="nd_donations_cursor_pointer nd_donations_section nd_donations_fixed_value_donation nd_donations_single_cause_form_donation_value"
                                type="text" readonly="" value="150" />
                        </div>
                        <div
                            class="stm-amount-cell nd_donations_width_25_percentage nd_donations_float_left nd_donations_padding_0_responsive nd_donations_padding_left_15 nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
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
                    <input name="uid" value="<?php echo $_SESSION['USER_ID'] ?>" hidden />
                    <input name="name" value="<?php echo $name ?>" hidden />
                    <input name="mail" value="<?php echo $email ?>" hidden />
                    <input name="mobile" value="<?php echo $mobile ?>" hidden />
                    <?php
                         } else {
                        ?>
                    <input name="uid" value="0" hidden />
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
                                    href="login">LOGIN</a>
                            </h4>
                        </div>
                    </div>
                    <!--end title-->

                    <div class="nd_donations_section nd_donations_height_20"></div>

                    <div class="nd_donations_section">
                        <div id="nd_donations_single_cause_form_donation_name_container"
                            class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                            <input class="nd_donations_section" id="stm_name" name="name" type="text" placeholder="Name"
                                required />
                        </div>
                        <div id="nd_donations_single_cause_form_donation_surname_container"
                            class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_left_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                            <input class="nd_donations_section" id="stm_mobile" name="mobile" type="text"
                                placeholder="mobile" />
                        </div>
                    </div>
                    <div class="nd_donations_section nd_donations_height_20"></div>
                    <div class="nd_donations_section">
                        <div id="nd_donations_single_cause_form_donation_email_container"
                            class="nd_donations_position_relative nd_donations_width_50_percentage nd_donations_float_left nd_donations_padding_bottom_20_important_responsive nd_donations_padding_right_15 nd_donations_padding_0_responsive nd_donations_box_sizing_border_box nd_donations_width_100_percentage_responsive">
                            <input class="nd_donations_section" id="nd_donations_single_cause_form_donation_email"
                                name="mail" type="text" placeholder="Email " required />
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
                        <textarea class="nd_donations_section" name="message"
                            id="nd_donations_single_cause_form_donation_message" rows="5"
                            placeholder="Message (Optional)"></textarea>
                    </div>
                    <div class="nd_donations_section nd_donations_height_20"></div>
                    <div class="nd_donations_section">
                        <input id="validate_fields_subset" value="Donate" type="submit" />
                        <!-- class="nd_donations_display_none" -->
                    </div>
                </form>

                <!-- <button id="validate_fields_sub" style="background-color: #d55342"
                        class="nd_donations_border_radius_30 nd_donations_display_inline_block nd_donations_box_sizing_border_box nd_donations_color_white_important nd_options_first_font nd_donations_padding_10_20 nd_donations_cursor_pointer nd_donations_outline_0 nd_donations_font_size_15 nd_donations_border_width_0"
                        onclick="validate_fields_sub()">
                        CHECKOUT
                    </button> -->
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
    <?php
 include 'footer.php';
 ?>
</main>

<style>
/* ===== STM donate page modernization (scoped, additive) ===== */
#nd_donations_single_cause_form_section{
    font-family:'Inter',sans-serif;
    /* neutralise legacy nd_donations_section float AND contain the inner floated
       blocks (amount grid / guest section) so the card wraps all content and the
       footer sits cleanly below it */
    float:none !important; display:flow-root;
    max-width:760px; margin:24px auto; padding:34px 32px;
    background:#fff; border-radius:16px;
    box-shadow:0 2px 16px rgba(0,0,0,.06);
    box-sizing:border-box;
}
#nd_donations_single_cause_form_section .stm-donate-title{
    font-size:1.5rem; color:#2c3e50; margin:0 0 18px;
}
#nd_donations_single_cause_form_section h4{
    color:#2c3e50;
}

/* Gateway / unavailable notice */
.stm-gateway-notice{
    display:flex; flex-wrap:wrap; align-items:center; gap:10px 14px;
    background:#fef9c3; border:1px solid #fde68a; border-radius:12px;
    padding:14px 16px; margin:0 0 22px;
}
.stm-gateway-badge{
    display:inline-block; background:#fef9c3; color:#a16207;
    border:1px solid #fcd34d; font-weight:600; font-size:.78rem;
    letter-spacing:.03em; text-transform:uppercase;
    padding:5px 12px; border-radius:999px; white-space:nowrap;
}
.stm-gateway-notice p{
    margin:0; color:#854d0e; font-size:.95rem; line-height:1.5; flex:1 1 240px;
}
.stm-gateway-notice strong{ color:#713f12; white-space:nowrap; }

/* Google Pay image — responsive, no fixed em width */
.stm-gpay-wrap{ text-align:center; margin:0 0 6px; }
.stm-gpay-img{
    display:block; width:100%; max-width:260px; height:auto; margin:0 auto;
    border-radius:14px; border:1px solid #eef0f4;
    box-shadow:0 2px 16px rgba(0,0,0,.06);
}

/* Amount reference note */
.stm-amount-note{
    color:#636e72; font-size:.9rem; margin:6px 0 0;
}

/* Amount options: CSS grid so they wrap / stack cleanly */
.stm-amount-grid{
    display:grid; grid-template-columns:repeat(4,1fr); gap:14px;
}
.stm-amount-grid::after{ content:none; } /* neutralise legacy float clearfix */
.stm-amount-grid .stm-amount-cell{
    float:none !important; width:auto !important; padding:0 !important;
}
.stm-amount-grid .nd_donations_fixed_value_donation{
    width:100%; box-sizing:border-box; text-align:center; font-weight:600;
    color:#2c3e50; background:#f8fafc; border:1px solid #dfe6e9;
    border-radius:10px; padding:11px 14px; font-family:inherit; font-size:.95rem;
    transition:border-color .2s, box-shadow .2s, background .2s, transform .2s;
}
.stm-amount-grid .nd_donations_fixed_value_donation:hover{
    border-color:#0984e3; transform:translateY(-2px);
    box-shadow:0 6px 16px rgba(9,132,227,.14);
}

/* Token styling for the text inputs + textarea inside the form */
.stm-donate-form input[type="text"]:not(.nd_donations_fixed_value_donation),
.stm-donate-form textarea{
    width:100%; box-sizing:border-box;
    border:1px solid #dfe6e9; border-radius:10px; padding:11px 14px;
    font-family:inherit; font-size:.95rem; color:#2c3e50; background:#f8fafc;
    transition:border-color .2s, box-shadow .2s, background .2s; outline:none;
}
.stm-donate-form textarea{ resize:vertical; min-height:120px; }
.stm-donate-form input[type="text"]:not(.nd_donations_fixed_value_donation):focus,
.stm-donate-form textarea:focus{
    border-color:#0984e3; background:#fff; box-shadow:0 0 0 3px rgba(9,132,227,.12);
}
.stm-donate-form input::placeholder,
.stm-donate-form textarea::placeholder{ color:#b2bec3; }

/* LOGIN pill */
.stm-donate-form a.nd_donations_bg_greydark{
    background:linear-gradient(135deg,#0984e3,#8e44ad) !important;
    border-radius:8px; text-decoration:none;
}

/* Donate submit button — token gradient + hover */
#validate_fields_subset{
    -webkit-appearance:none; appearance:none;
    border:none; border-radius:10px; padding:12px 30px; cursor:pointer;
    background:linear-gradient(135deg,#0984e3,#8e44ad); color:#fff;
    font-family:inherit; font-size:.95rem; font-weight:600;
    transition:transform .2s, box-shadow .2s;
}
#validate_fields_subset:hover{
    transform:translateY(-2px); box-shadow:0 8px 20px rgba(9,132,227,.32);
}

@media (max-width:600px){
    #nd_donations_single_cause_form_section{ padding:24px 18px; margin:16px 12px; }
    .stm-amount-grid{ grid-template-columns:repeat(2,1fr); }
    #validate_fields_subset{ width:100%; }
}
@media (max-width:380px){
    .stm-amount-grid{ grid-template-columns:1fr 1fr; gap:10px; }
}
</style>

<!--
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script> -->
<script src='js/boostrap-4.5.js'></script>
<script src='js/popper.js'></script>
<script src='js/tweenmax.js'></script>
<script src="main-js/main.js"></script>
<script>
// function validate_fields_sub() {
//     document.getElementById("validate_fields_subset").click();
// }
</script>
</body>

</html>