<?php
require('includes/functions.php');
if (isset($_GET['by']) && $_GET['by'] != '') {
    $by = $_GET['by'];
} else {
    $by = '0';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Login to STM — Service to Mankind, the student-led NGO making a difference.">
    <title>Login — STM India</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180">
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png">
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

        /* ---- Split card ---- */
        .auth-card {
            background: #fff;
            border-radius: 24px;
            width: 100%;
            max-width: 920px;
            min-height: 560px;
            display: flex;
            box-shadow: 0 32px 80px rgba(0,0,0,0.4);
            overflow: hidden;
        }

        /* ---- Left brand panel ---- */
        .brand-panel {
            flex: 1;
            background: linear-gradient(160deg, #0984e3 0%, #8e44ad 60%, #2c3e50 100%);
            padding: 56px 44px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .brand-panel::before {
            content: '';
            position: absolute;
            width: 300px; height: 300px;
            border-radius: 50%;
            background: rgba(255,255,255,0.07);
            top: -80px; right: -80px;
        }
        .brand-panel::after {
            content: '';
            position: absolute;
            width: 200px; height: 200px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            bottom: -40px; left: -40px;
        }
        .brand-logo-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
            z-index: 1;
        }
        .brand-logo-wrap img {
            width: 48px; height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .brand-name {
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: .02em;
        }
        .brand-tagline {
            font-size: 0.8rem;
            opacity: 0.75;
        }
        .brand-hero {
            position: relative;
            z-index: 1;
        }
        .brand-hero h2 {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.25;
            margin-bottom: 14px;
        }
        .brand-hero p {
            font-size: 0.9rem;
            opacity: 0.8;
            line-height: 1.6;
        }
        .brand-stats {
            display: flex;
            gap: 32px;
            position: relative;
            z-index: 1;
        }
        .b-stat { display: flex; flex-direction: column; gap: 2px; }
        .b-stat strong { font-size: 1.4rem; font-weight: 700; }
        .b-stat span   { font-size: 0.75rem; opacity: 0.7; }

        /* ---- Right form panel ---- */
        .form-panel {
            width: 400px;
            flex-shrink: 0;
            padding: 52px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .tab-toggle {
            display: flex;
            background: #f5f6fa;
            border-radius: 10px;
            padding: 4px;
            margin-bottom: 32px;
        }
        .tab-toggle button {
            flex: 1;
            border: none;
            background: none;
            padding: 8px 0;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 0.88rem;
            font-weight: 500;
            color: #636e72;
            cursor: pointer;
            transition: all .2s;
        }
        .tab-toggle button.active {
            background: #fff;
            color: #2c3e50;
            font-weight: 600;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        }

        .auth-form { display: none; }
        .auth-form.active { display: block; }

        .form-heading {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 6px;
        }
        .form-sub {
            font-size: 0.85rem;
            color: #b2bec3;
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
            border: 1.5px solid #dfe6e9;
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
            box-shadow: 0 0 0 3px rgba(9,132,227,0.12);
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
            transition: opacity .2s, transform .15s;
            margin-top: 6px;
        }
        .btn-primary-stm:hover { opacity: .9; transform: translateY(-1px); }
        .btn-primary-stm:active { transform: translateY(0); }
        .btn-primary-stm:disabled { opacity: .6; cursor: not-allowed; }

        .btn-secondary-stm {
            width: 100%;
            background: #f5f6fa;
            color: #2c3e50;
            border: none;
            border-radius: 10px;
            padding: 11px;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: background .2s;
            margin-top: 8px;
        }
        .btn-secondary-stm:hover { background: #dfe6e9; }

        .forgot-link {
            display: block;
            text-align: right;
            font-size: 0.8rem;
            color: #0984e3;
            text-decoration: none;
            margin-top: -10px;
            margin-bottom: 18px;
        }
        .forgot-link:hover { text-decoration: underline; }

        .error-msg {
            background: #fee2e2;
            color: #b91c1c;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 0.85rem;
            margin-bottom: 14px;
            display: none;
        }

        .success-msg {
            background: #dcfce7;
            color: #15803d;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 0.85rem;
            margin-bottom: 14px;
            display: none;
        }

        .helper-text {
            font-size: 0.78rem;
            color: #b2bec3;
            margin-top: 4px;
        }

        /* OTP flow states */
        .otp-step { display: none; }

        /* ---- Responsive ---- */
        @media (max-width: 700px) {
            .brand-panel { display: none; }
            .auth-card { max-width: 440px; }
            .form-panel { width: 100%; padding: 40px 28px; }
        }
    </style>
</head>
<body>

<div class="auth-card">

    <!-- Left panel -->
    <div class="brand-panel">
        <div class="brand-logo-wrap">
            <img src="accesories/service_to_man_kind-20200709-0001.jpg" alt="STM Logo">
            <div>
                <div class="brand-name">Service To Mankind</div>
                <div class="brand-tagline">STM India &mdash; Since 2019</div>
            </div>
        </div>

        <div class="brand-hero">
            <h2>Love All,<br>Serve All.</h2>
            <p>Every contribution you make changes lives. Join our community of changemakers and be part of something bigger than yourself.</p>
        </div>

        <div class="brand-stats">
            <div class="b-stat">
                <strong>100+</strong>
                <span>Volunteers</span>
            </div>
            <div class="b-stat">
                <strong>500+</strong>
                <span>Lives Touched</span>
            </div>
            <div class="b-stat">
                <strong>5+</strong>
                <span>Years</span>
            </div>
        </div>
    </div>

    <!-- Right form panel -->
    <div class="form-panel">

        <div class="tab-toggle">
            <button id="tabSignIn" class="active" onclick="switchTab('signin')">Sign In</button>
            <button id="tabRegister" onclick="switchTab('register')">Register</button>
        </div>

        <!-- Sign In -->
        <div id="formSignIn" class="auth-form active">
            <div class="form-heading">Welcome back</div>
            <div class="form-sub">Sign in to your STM account</div>

            <div id="loginError" class="error-msg">Invalid credentials. Please try again.</div>

            <div class="field-group">
                <label for="case">STM ID / Email / Mobile</label>
                <input type="text" id="case" autocomplete="username" placeholder="Enter your ID or email">
            </div>
            <div class="field-group">
                <label for="lopass">Password</label>
                <input type="password" id="lopass" autocomplete="current-password" placeholder="Enter your password">
            </div>

            <a href="forgotpass" class="forgot-link">Forgot password?</a>

            <button class="btn-primary-stm" id="loginBtn" onclick="loginset()">Sign In</button>
            <button class="btn-secondary-stm" onclick="switchTab('register')">Create an account</button>
        </div>

        <!-- Register -->
        <div id="formRegister" class="auth-form">
            <div class="form-heading">Create account</div>
            <div class="form-sub">Verify your email to get started</div>

            <div id="regError" class="error-msg"></div>
            <div id="regSuccess" class="success-msg"></div>

            <!-- Step 1: Email -->
            <div id="step1">
                <div class="field-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <button class="btn-primary-stm" id="otpBtn" onclick="sendOtp()">Send Verification Code</button>
            </div>

            <!-- Step 2: OTP -->
            <div id="step2" class="otp-step">
                <div class="field-group">
                    <label for="email_otp">Verification Code</label>
                    <input type="text" id="email_otp" placeholder="Enter the 6-digit OTP">
                    <div class="helper-text">Check your inbox at <span id="emailHint" style="color:#0984e3;font-weight:500;"></span></div>
                </div>
                <button class="btn-primary-stm" id="verifyOtpBtn" onclick="verifyOtp()">Verify Email</button>
            </div>

            <!-- Step 3: Details -->
            <div id="step3" class="otp-step">
                <div class="field-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" placeholder="Your full name">
                </div>
                <div class="field-group">
                    <label for="number">Mobile Number</label>
                    <input type="text" id="number" placeholder="10-digit mobile number">
                </div>
                <div class="field-group">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" placeholder="Choose a password">
                </div>
                <div class="field-group">
                    <label for="cpass">Confirm Password</label>
                    <input type="password" id="cpass" placeholder="Repeat password">
                </div>
                <div id="passErr" class="error-msg"></div>
                <button class="btn-primary-stm" id="registerBtn" onclick="doRegister()">Create Account</button>
            </div>
        </div>

    </div><!-- /form-panel -->
</div><!-- /auth-card -->

<script>
var emailVerified = false;

function switchTab(tab) {
    document.getElementById('formSignIn').classList.toggle('active', tab === 'signin');
    document.getElementById('formRegister').classList.toggle('active', tab === 'register');
    document.getElementById('tabSignIn').classList.toggle('active', tab === 'signin');
    document.getElementById('tabRegister').classList.toggle('active', tab === 'register');
}

// ---- Login ----
function loginset() {
    const id  = document.getElementById('case').value.trim();
    const pwd = document.getElementById('lopass').value;
    const err = document.getElementById('loginError');
    const btn = document.getElementById('loginBtn');
    err.style.display = 'none';

    if (!id || !pwd) { err.textContent = 'Please fill in both fields.'; err.style.display = 'block'; return; }

    btn.disabled = true;
    btn.textContent = 'Signing in…';

    jQuery.ajax({
        url:  'checklogin',
        type: 'post',
        data: { case: id, pass: pwd },
        success: function(res) {
            if (res === 'valid') {
                window.location.href = 'index.php';
            } else {
                err.textContent = 'Invalid credentials. Please try again.';
                err.style.display = 'block';
                btn.disabled = false;
                btn.textContent = 'Sign In';
            }
        },
        error: function() {
            err.textContent = 'Network error. Please try again.';
            err.style.display = 'block';
            btn.disabled = false;
            btn.textContent = 'Sign In';
        }
    });
}

// ---- Register: Step 1 – Send OTP ----
function sendOtp() {
    const email  = document.getElementById('email').value.trim();
    const errBox = document.getElementById('regError');
    const btn    = document.getElementById('otpBtn');
    errBox.style.display = 'none';

    if (!email) { errBox.textContent = 'Please enter a valid email.'; errBox.style.display = 'block'; return; }

    btn.disabled = true; btn.textContent = 'Sending…';

    jQuery.ajax({
        url:  'send_otp',
        type: 'post',
        data: { email: email, type: 'email' },
        success: function(res) {
            if (res === 'sent') {
                document.getElementById('step1').style.display = 'none';
                document.getElementById('step2').style.display = 'block';
                document.getElementById('emailHint').textContent = email;
            } else if (res === 'email_present') {
                errBox.textContent = 'This email is already registered. Sign in instead.';
                errBox.style.display = 'block';
                btn.disabled = false; btn.textContent = 'Send Verification Code';
            } else {
                errBox.textContent = 'Could not send OTP. Please try again later.';
                errBox.style.display = 'block';
                btn.disabled = false; btn.textContent = 'Send Verification Code';
            }
        }
    });
}

// ---- Register: Step 2 – Verify OTP ----
function verifyOtp() {
    const otp    = document.getElementById('email_otp').value.trim();
    const errBox = document.getElementById('regError');
    const btn    = document.getElementById('verifyOtpBtn');
    errBox.style.display = 'none';

    if (!otp) { errBox.textContent = 'Enter the OTP sent to your email.'; errBox.style.display = 'block'; return; }

    btn.disabled = true; btn.textContent = 'Verifying…';

    jQuery.ajax({
        url:  'check_otp',
        type: 'post',
        data: { otp: otp, type: 'otp' },
        success: function(res) {
            if (res === 'done') {
                emailVerified = true;
                document.getElementById('step2').style.display = 'none';
                document.getElementById('step3').style.display = 'block';
                document.getElementById('regSuccess').textContent = '✓ Email verified! Fill in your details below.';
                document.getElementById('regSuccess').style.display = 'block';
            } else {
                errBox.textContent = 'Incorrect OTP. Please check and try again.';
                errBox.style.display = 'block';
                btn.disabled = false; btn.textContent = 'Verify Email';
            }
        }
    });
}

// ---- Register: Step 3 – Create Account ----
function doRegister() {
    const email  = document.getElementById('email').value.trim();
    const name   = document.getElementById('name').value.trim();
    const number = document.getElementById('number').value.trim();
    const pass   = document.getElementById('pass').value;
    const cpass  = document.getElementById('cpass').value;
    const by     = '<?php echo $by; ?>';
    const passErr = document.getElementById('passErr');
    const btn    = document.getElementById('registerBtn');

    passErr.style.display = 'none';

    if (!name || !number) { passErr.textContent = 'Please fill in all fields.'; passErr.style.display = 'block'; return; }
    if (pass !== cpass)   { passErr.textContent = 'Passwords do not match.'; passErr.style.display = 'block'; return; }
    if (pass.length < 4)  { passErr.textContent = 'Password must be at least 4 characters.'; passErr.style.display = 'block'; return; }

    btn.disabled = true; btn.textContent = 'Creating account…';

    jQuery.ajax({
        url:  'register',
        type: 'post',
        data: { email: email, name: name, number: number, pass: pass, by: by },
        success: function(res) {
            if (res === 'done') {
                alert('Account created successfully! Please sign in.');
                switchTab('signin');
            } else {
                passErr.textContent = 'Registration failed. Please try again.';
                passErr.style.display = 'block';
                btn.disabled = false; btn.textContent = 'Create Account';
            }
        }
    });
}

// Enter key support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        const signinActive = document.getElementById('formSignIn').classList.contains('active');
        if (signinActive) loginset();
    }
});
</script>
</body>
</html>