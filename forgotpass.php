<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="STM ( Service to mankind ). STM  is an NGO , which fulfills the needs of homeless childrens and people.">
    <title>STM-INDIA</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="js/jquery1.js"></script>



    <!-- Favicons -->

    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180">
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="accesories/safari-tab.svg" color="#563d7c">
    <link rel="icon" href="accesories/fevicon 32.ico">
    <meta name="theme-color" content="#563d7c">



    <!-- fontaswsome00000 -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="js\jquery1.js">
    </script>
    <link rel="stylesheet" href="css\main\login.css" />
</head>

<body>
    <div class="container" style="width: 370px;">
        <input type="radio" name="tab" id="signin" checked="checked" />
        <input type="radio" name="tab" id="register" />
        <div class="pages">
            <div class="page signup">
                <form>
                    <img class="brand-logo" src="brand-logo.png" alt="" />
                    <h2>Forgot Password</h2>
                    <p>No Worries, Lets verify your email !</p>
                    <!-- <div class="input">
              <div class="title">Name</div>
              <input class="text" type="text" placeholder="" />
            </div> -->
                    <div class="input">
                        <div id="email_title" class="title">Email</div>
                        <input class="text" id="email" name="email" type="email" placeholder="" />
                        <div>
                            <span id="email_error" class="email_error"></span>
                        </div>
                    </div>

                    <!-- <div class="input">
              <button
                class="btn_3 email_sent_otp"
                name="otp"
                type="button"
                onclick="email_sent_otp()"
              >
                send otp
              </button>
            </div> -->
                    <div class="input">
                        <button name="otp" type="button" class="sub-btn email_sent_otp" style="
                  background: #e60023;
                  color: #f6f7f9;
                  height: 40px;
                  line-height: 40px;
                  width: 100%;
                  border: none;
                  border-radius: 4px;
                  font-weight: 600;
                " onclick="email_sent_otp()">
                            Verify
                        </button>
                        <div class="input">
                            <input class="text" type="text" class="email_verify_ootp otp_box" id="email_otp"
                                placeholder="Enter otp" hidden />
                            <span style="color: blue" id="number_otp_result"></span>
                        </div>
                        <button class="btn_3 email_verify_ootp" name="otp" type="button" onclick="email_verify_ootp()"
                            style="
                  background: #e60023;
                  color: #f6f7f9;
                  height: 40px;
                  line-height: 40px;
                  width: 100%;
                  border: none;
                  border-radius: 4px;
                  font-weight: 600;
                  display: none;
                ">
                            Verify otp
                        </button>
                    </div>
                    <div class="input">
                        <div id="pass_title" style="display: none" class="title">
                            Password
                        </div>
                        <input class="text" id="pass" name="pass" type="password" placeholder="Password" hidden />
                    </div>
                    <div class="input">
                        <div id="cpass_title" style="display: none" class="title">
                            Re-enter Same Password
                        </div>
                        <input class="text" id="cpass" name="cpass" placeholder="Confirm Password" hidden />
                    </div>
                    <div>
                        <span class="pass_error" id="pass_error"></span>
                    </div>

                    <div class="input">
                        <input id="regiter_btn" type="button" value="Register-Now" onclick="resetpass()" hidden />
                    </div>
                </form>
            </div>
        </div>
        <div class="tabs">
            <label class="tab" for="signin">
                <div class="text"><a href="login">Already have a Account? Log In</a></div>
            </label>
            <label class="tab" for="register">
                <div class="text"><a href="login">Already have a Account? Log In</a></div>
            </label>
        </div>
    </div>
    <script src="main-js\main.js"></script>
    <script>
    function email_sent_otp() {
        jQuery("#email_error").html("");
        var email = jQuery("#email").val();
        if (email == "") {
            jQuery("#email_error").html("I cannot see any mail here");
        } else {
            jQuery(".email_sent_otp").html("Please Wait..");
            jQuery(".email_sent_otp").attr("disabled", true);
            jQuery(".email_sent_otp");
            jQuery.ajax({
                url: "send_otp",
                type: "post",
                data: "email=" + email + "&type=passreset",
                success: function(result) {
                    if (result == "Sent") {
                        jQuery("#email").attr("disabled", false);
                        jQuery(".email_verify_ootp").show();
                        jQuery("#email_otp").show();
                        jQuery(".email_sent_otp").hide();
                        jQuery("#is_email_verified").html("1");
                    } else if (result == "email_absent") {
                        jQuery(".email_sent_otp").html("Send Again");
                        jQuery(".email_sent_otp").attr("disabled", false);
                        jQuery("#email_error").html("This email is not registered, please use SignUp");
                    } else {
                        jQuery(".email_sent_otp").html("Send Again");
                        jQuery(".email_sent_otp").attr("disabled", false);
                        jQuery("#email_error").html("Please try again later");
                    }
                },
            });
        }
    }

    function email_verify_ootp() {
        jQuery("#email_error").html("");
        var otp = jQuery("#email_otp").val();
        if (otp == "") {
            jQuery("#email_otp_result").html("I sent you an otp, use that");
        } else {
            jQuery(".email_verify_ootp").html("Please Wait..");
            jQuery(".email_verify_ootp").attr("disabled", true);
            jQuery(".email_verify_ootp");
            jQuery.ajax({
                url: "check_otp",
                type: "post",
                data: "otp=" + otp + "&type=otp",
                success: function(result) {
                    if (result == "done") {
                        jQuery(".email_verify_ootp").hide();
                        jQuery("#email").hide();
                        jQuery("#email_title").hide();
                        jQuery("#email_otp").hide();
                        jQuery("#name").show();
                        jQuery("#number").show();
                        jQuery("#name_title").show();
                        jQuery("#number_title").show();
                        jQuery("#pass_title").show();
                        jQuery("#cpass_title").show();
                        jQuery("#pass").show();
                        jQuery("#cpass").show();
                        jQuery("#regiter_btn").show();
                        jQuery("#email_otp_result").html("email Verified");
                        jQuery("#is_email_verified").val("1");

                        if (jQuery("#is_email_verified").val() == 1) {
                            jQuery("#btn-register").attr("disabled", false);
                        }
                    } else {
                        jQuery(".email_verify_ootp").html("Sent Otp");
                        jQuery(".email_verify_ootp").attr("disabled", false);
                        jQuery("#email_otp_result").html("Please enter valid otp");
                    }
                },
            });
        }
    }

    function resetpass() {
        var email = jQuery("#email").val();
        var pass = jQuery("#pass").val();
        var cpass = jQuery("#cpass").val();
        if (pass == cpass) {
            if (email == "") {
                alert(email);
                alert("Email Is Null");
            } else {
                jQuery.ajax({
                    url: "resetpass",
                    type: "post",
                    data: "email=" +
                        email +
                        "&pass=" +
                        pass,
                    success: function(result) {
                        if (result == "done") {
                            alert("Password reset successful, please login to continue");
                        } else {
                            alert("Error Occured ! Please Try Again After Sometime");
                        }
                    },
                });
            }
        } else {
            jQuery("#pass_error").html("Passwords do not matched");
        }
    }
    </script>
</body>

</html>