<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Reset your STM account password — Service to Mankind, the student-led NGO making a difference.">
    <title>Forgot Password — STM India</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180">
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="accesories/fevicon 32.ico">
    <meta name="theme-color" content="#2c3e50">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js?v=1" data-auto-replace-svg="nest"></script>
    <script src="js/jquery1.js"></script>

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #2c3e50 0%, #16213e 50%, #2c3e50 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        /* ---- Centered responsive card ---- */
        .auth-card {
            background: #fff;
            border-radius: 16px;
            width: 100%;
            max-width: 400px;
            padding: 40px 32px;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.06), 0 24px 60px rgba(0, 0, 0, 0.28);
        }

        .brand-logo-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }
        .brand-logo-wrap img {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            max-width: 100%;
        }
        .brand-name { font-size: 1rem; font-weight: 700; color: #2c3e50; }
        .brand-tagline { font-size: 0.75rem; color: #b2bec3; }

        .form-heading {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 6px;
        }
        .form-sub {
            font-size: 0.85rem;
            color: #636e72;
            margin-bottom: 28px;
        }

        .field-group { margin-bottom: 18px; }
        .field-group label {
            display: block;
            font-size: 0.8rem;
            font-weight: 500;
            color: #2c3e50;
            margin-bottom: 6px;
        }
        .field-group input {
            width: 100%;
            border: 1px solid #dfe6e9;
            border-radius: 10px;
            padding: 11px 14px;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            color: #2c3e50;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
            background: #fafafa;
        }
        .field-group input:focus {
            border-color: #0984e3;
            box-shadow: 0 0 0 3px rgba(9, 132, 227, 0.12);
            background: #fff;
        }

        .btn-primary-stm {
            width: 100%;
            background: linear-gradient(135deg, #0984e3, #8e44ad);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            letter-spacing: .02em;
            transition: box-shadow .2s, transform .15s, opacity .2s;
            margin-top: 6px;
        }
        .btn-primary-stm:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(9, 132, 227, 0.25);
        }
        .btn-primary-stm:active { transform: translateY(0); }
        .btn-primary-stm:disabled { opacity: .6; cursor: not-allowed; transform: none; box-shadow: none; }

        .inline-msg {
            font-size: 0.8rem;
            margin-top: 6px;
            display: block;
            min-height: 1em;
        }
        .email_error, .pass_error { color: #b91c1c; }
        #number_otp_result { color: #15803d; font-weight: 500; }

        .back-link {
            display: block;
            text-align: center;
            font-size: 0.85rem;
            color: #0984e3;
            text-decoration: none;
            margin-top: 22px;
            font-weight: 500;
        }
        .back-link:hover { text-decoration: underline; }

        .helper-text {
            font-size: 0.78rem;
            color: #b2bec3;
            margin-top: 4px;
        }

        /* ---- Mobile ---- */
        @media (max-width: 400px) {
            body { padding: 14px; }
            .auth-card { padding: 32px 22px; border-radius: 14px; }
        }
    </style>
</head>

<body>
    <div class="auth-card container">
        <div class="brand-logo-wrap">
            <img class="brand-logo" src="accesories/service_to_man_kind-20200709-0001.jpg" alt="STM Logo" />
            <div>
                <div class="brand-name">Service To Mankind</div>
                <div class="brand-tagline">STM India</div>
            </div>
        </div>

        <form onsubmit="return false;">
            <div class="form-heading">Forgot Password</div>
            <p class="form-sub">No worries — let's verify your email to reset it.</p>

            <!-- Step 1: Email + send OTP -->
            <div class="field-group">
                <label id="email_title" for="email">Email</label>
                <input class="text" id="email" name="email" type="email" placeholder="Enter your registered email" />
                <span id="email_error" class="email_error inline-msg"></span>
            </div>

            <button name="otp" type="button" class="btn-primary-stm email_sent_otp" onclick="email_sent_otp()">
                Verify
            </button>

            <!-- Step 2: OTP entry + verify -->
            <div class="field-group" style="margin-top:18px;">
                <input class="text email_verify_ootp otp_box" type="text" id="email_otp" placeholder="Enter OTP" hidden />
                <span class="inline-msg" id="number_otp_result"></span>
            </div>
            <button class="btn-primary-stm email_verify_ootp" name="otp" type="button" onclick="email_verify_ootp()"
                style="display: none;">
                Verify OTP
            </button>

            <!-- Step 3: New password -->
            <div class="field-group" style="margin-top:18px;">
                <label id="pass_title" for="pass" style="display: none;">Password</label>
                <input class="text" id="pass" name="pass" type="password" placeholder="Password" hidden />
            </div>
            <div class="field-group">
                <label id="cpass_title" for="cpass" style="display: none;">Re-enter Same Password</label>
                <input class="text" id="cpass" name="cpass" type="password" placeholder="Confirm Password" hidden />
            </div>
            <span class="pass_error inline-msg" id="pass_error"></span>

            <input id="regiter_btn" class="btn-primary-stm" type="button" value="Reset Password" onclick="resetpass()"
                hidden />
        </form>

        <a href="login" class="back-link">&larr; Back to Log In</a>
    </div>

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
                    if (result == "sent") {
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
                        alert(result);
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
                            window.location.href = "login";
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
