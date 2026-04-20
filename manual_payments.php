<?php require('includes/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manual Payments — STM India</title>
    <link rel="icon" href="accesories/fevicon 32.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js?v=1" data-auto-replace-svg="nest"></script>
    <meta http-equiv="refresh" content="8;url=https://management.stmorg.in/manage_donations">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f5f6fa 0%, #ecf0f1 100%);
            padding: 24px;
        }
        .card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 40px rgba(0,0,0,0.10);
            max-width: 520px;
            width: 100%;
            padding: 52px 44px 44px;
            text-align: center;
        }
        .icon-wrap {
            width: 72px; height: 72px;
            border-radius: 50%;
            background: rgba(249,25,66,0.10);
            color: #f91942;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 24px;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 12px;
        }
        p {
            font-size: 0.95rem;
            color: #636e72;
            line-height: 1.65;
            margin-bottom: 8px;
        }
        .divider {
            border: none;
            border-top: 1px solid #ecf0f1;
            margin: 28px 0;
        }
        .new-portal-label {
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: #b2bec3;
            font-weight: 600;
            margin-bottom: 12px;
        }
        .portal-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #0984e3, #8e44ad);
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            padding: 14px 32px;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .02em;
            box-shadow: 0 4px 18px rgba(9,132,227,0.30);
            transition: transform .2s, box-shadow .2s;
        }
        .portal-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(9,132,227,0.40);
            color: #fff;
            text-decoration: none;
        }
        .countdown {
            margin-top: 20px;
            font-size: 0.82rem;
            color: #b2bec3;
        }
        .countdown span {
            font-weight: 600;
            color: #0984e3;
        }
        .back-link {
            display: block;
            margin-top: 18px;
            font-size: 0.82rem;
            color: #b2bec3;
            text-decoration: none;
        }
        .back-link:hover { color: #636e72; }
    </style>
</head>
<body>

<div class="card">
    <div class="icon-wrap">
        <i class="fa-solid fa-ban"></i>
    </div>

    <h1>Manual Payments Discontinued</h1>
    <p>Manual payment recording on this portal has been permanently retired.</p>
    <p>All donation management is now handled exclusively through the <strong>STM Management Portal</strong>.</p>

    <hr class="divider">

    <div class="new-portal-label">Redirecting you to</div>
    <a href="https://management.stmorg.in/manage_donations" class="portal-btn" id="portalBtn">
        <i class="fa-solid fa-arrow-up-right-from-square"></i>
        STM Management Portal
    </a>

    <p class="countdown">Redirecting automatically in <span id="sec">8</span> seconds…</p>
    <a href="index" class="back-link">← Back to Home</a>
</div>

<script>
var s = 8;
var t = setInterval(function() {
    s--;
    document.getElementById('sec').textContent = s;
    if (s <= 0) {
        clearInterval(t);
        window.location.href = 'https://management.stmorg.in/manage_donations';
    }
}, 1000);
</script>

</body>
</html>