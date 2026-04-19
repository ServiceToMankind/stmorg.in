<?php
require('includes/functions.php');
date_default_timezone_set("Asia/Kolkata");

$date = date('Y-m-d H:i:s');
$ouid = isset($_SESSION['USER_ID'])   ? $_SESSION['USER_ID']   : '';
$uid  = 'stmo' . $ouid;

if (!$ouid) {
    header('Location: login'); exit;
}

// User details via local API
$user_raw     = get_api_data($api_url . '/global/users?uid=' . $uid);
$user_resp    = json_decode($user_raw, true);
$user_details = [];
if ($user_resp && $user_resp['status'] === 'success' && is_array($user_resp['data']) && isset($user_resp['data'][0])) {
    $user_details = $user_resp['data'][0];
}

// Volunteering activity count
$vol_raw   = get_api_data($api_url . '/activities/activities_vol?uid=' . $ouid . '&count=true');
$vol_resp  = json_decode($vol_raw, true);
$vol_count = ($vol_resp && isset($vol_resp['data']['data'])) ? $vol_resp['data']['data'] : 0;

// User's personal donation total
$don_raw   = get_api_data($api_url . '/logs/donations');
$don_resp  = json_decode($don_raw, true);
$my_don_total = 0;
$my_don_count = 0;
if ($don_resp && $don_resp['status'] === 'success') {
    foreach ($don_resp['data'] as $d) {
        if ($d['custid'] == $ouid || $d['custid'] == $uid) {
            $my_don_total += $d['amount'];
            $my_don_count++;
        }
    }
}

// Role label
$role_id    = isset($user_details['role_id']) ? $user_details['role_id'] : '';
$role_label = isset($user_details['role'])    ? $user_details['role']    : 'Member';

// Member since
$member_since = '';
if (isset($user_details['added_on'])) {
    $member_since = date('F Y', strtotime($user_details['added_on']));
}

// Avatar initials
$name_parts = explode(' ', trim($user_details['name'] ?? 'U'));
$initials   = strtoupper(substr($name_parts[0], 0, 1) . (isset($name_parts[1]) ? substr($name_parts[1], 0, 1) : ''));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="My STM Profile — Service to Mankind">
    <title>My Profile — STM India</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/main/style.css?v=2.8">
    <link rel="stylesheet" href="css/main/banner.css">
    <link rel="stylesheet" href="css/main/btn.css">
    <link rel="stylesheet" href="css/defualt/catto.css">
    <link rel="stylesheet" href="css/defualt/bootstrap.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="js/jquery1.js"></script>
    <script src="js/boostrap.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js?v=1" data-auto-replace-svg="nest"></script>

    <!-- Favicons -->
    <link rel="icon" href="accesories/fevicon 32.ico">
    <meta name="theme-color" content="#2c3e50">

    <style>
        body { background: #f0f2f8; font-family: 'Inter', sans-serif; }

        .prof-wrap {
            max-width: 900px;
            margin: 0 auto;
            padding: 110px 20px 60px;
        }

        /* ---- Hero card ---- */
        .prof-hero {
            background: linear-gradient(135deg, #2c3e50 0%, #0984e3 100%);
            border-radius: 20px;
            padding: 40px 36px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 28px;
            margin-bottom: 22px;
            position: relative;
            overflow: hidden;
        }
        .prof-hero::before {
            content: '';
            position: absolute;
            width: 240px; height: 240px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
            top: -60px; right: -60px;
        }
        .prof-avatar-lg {
            width: 96px; height: 96px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            border: 3px solid rgba(255,255,255,0.4);
            display: flex; align-items: center; justify-content: center;
            font-size: 2rem; font-weight: 700;
            flex-shrink: 0;
            position: relative; z-index: 1;
        }
        .prof-hero-info { position: relative; z-index: 1; flex: 1; }
        .prof-hero-info h2 { font-size: 1.6rem; font-weight: 700; margin: 0 0 4px; }
        .prof-hero-info .prof-id { font-size: 0.85rem; opacity: .7; }
        .prof-role-badge {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 20px;
            padding: 4px 14px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-top: 8px;
        }
        .prof-hero-actions {
            display: flex; gap: 10px; flex-wrap: wrap;
            position: relative; z-index: 1;
        }
        .prof-hero-actions a {
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.25);
            color: #fff;
            border-radius: 10px;
            padding: 9px 18px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            transition: background .2s;
        }
        .prof-hero-actions a:hover { background: rgba(255,255,255,0.28); color: #fff; }

        /* ---- Stats row ---- */
        .prof-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 22px;
        }
        .prof-stat-card {
            background: #fff;
            border-radius: 14px;
            padding: 22px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }
        .prof-stat-card .stat-num {
            font-size: 1.9rem; font-weight: 700; color: #0984e3; line-height: 1;
        }
        .prof-stat-card .stat-lbl {
            font-size: 0.8rem; color: #b2bec3; margin-top: 6px; font-weight: 500;
        }

        /* ---- Info grid ---- */
        .prof-info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-bottom: 22px;
        }
        @media(max-width:600px){
            .prof-stats { grid-template-columns: 1fr 1fr; }
            .prof-info-grid { grid-template-columns: 1fr; }
            .prof-hero { flex-direction: column; text-align: center; }
            .prof-hero-actions { justify-content: center; }
        }

        .prof-card {
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }
        .prof-card h4 {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: .06em;
            color: #b2bec3;
            font-weight: 600;
            margin: 0 0 18px;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px solid #f5f6fa;
            font-size: 0.9rem;
        }
        .info-row:last-child { border-bottom: none; }
        .info-row .info-icon {
            width: 34px; height: 34px;
            border-radius: 9px;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.9rem;
            flex-shrink: 0;
        }
        .info-row .info-label { color: #b2bec3; font-size: 0.78rem; }
        .info-row .info-val   { font-weight: 500; color: #2c3e50; }

        /* Social icons */
        .prof-social {
            display: flex; gap: 12px; flex-wrap: wrap; margin-top: 4px;
        }
        .prof-social a {
            width: 40px; height: 40px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
            text-decoration: none;
            transition: transform .2s, opacity .2s;
        }
        .prof-social a:hover { transform: translateY(-2px); opacity: .85; }
        .soc-fb  { background: #1877f2; color: #fff; }
        .soc-tw  { background: #1da1f2; color: #fff; }
        .soc-ig  { background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); color: #fff; }
        .soc-yt  { background: #ff0000; color: #fff; }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<main role="main">
<div class="prof-wrap">

    <!-- Hero -->
    <div class="prof-hero">
        <div class="prof-avatar-lg"><?php echo htmlspecialchars($initials ?: '?'); ?></div>
        <div class="prof-hero-info">
            <h2><?php echo htmlspecialchars($user_details['name'] ?? 'STM Member'); ?></h2>
            <div class="prof-id"><?php echo htmlspecialchars($uid); ?> &nbsp;&middot;&nbsp; Member since <?php echo $member_since; ?></div>
            <div class="prof-role-badge">
                <i class="fa-solid fa-shield-halved" style="font-size:.7rem;margin-right:4px;"></i>
                <?php echo htmlspecialchars($role_label); ?>
            </div>
        </div>
        <div class="prof-hero-actions">
            <a href="logs"><i class="fa-solid fa-receipt"></i> Donation Logs</a>
            <a href="dashboard"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
            <a href="logout" style="background:rgba(239,68,68,0.2);border-color:rgba(239,68,68,0.3);"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a>
        </div>
    </div>

    <!-- Stats -->
    <div class="prof-stats">
        <div class="prof-stat-card">
            <div class="stat-num"><?php echo $vol_count ?: '0'; ?></div>
            <div class="stat-lbl">Volunteering Activities</div>
        </div>
        <div class="prof-stat-card">
            <div class="stat-num"><?php echo $my_don_count; ?></div>
            <div class="stat-lbl">Donations Made</div>
        </div>
        <div class="prof-stat-card">
            <div class="stat-num">₹<?php echo number_format($my_don_total); ?></div>
            <div class="stat-lbl">Total Contributed</div>
        </div>
    </div>

    <!-- Info grid -->
    <div class="prof-info-grid">

        <!-- Personal Info -->
        <div class="prof-card">
            <h4>Personal Information</h4>

            <div class="info-row">
                <div class="info-icon" style="background:#ede9fe;color:#7c3aed;"><i class="fa-solid fa-user"></i></div>
                <div><div class="info-label">Full Name</div><div class="info-val"><?php echo htmlspecialchars($user_details['name'] ?? '—'); ?></div></div>
            </div>
            <div class="info-row">
                <div class="info-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-envelope"></i></div>
                <div><div class="info-label">Email</div><div class="info-val"><?php echo htmlspecialchars($user_details['mail'] ?? '—'); ?></div></div>
            </div>
            <div class="info-row">
                <div class="info-icon" style="background:#dcfce7;color:#16a34a;"><i class="fa-solid fa-mobile-screen"></i></div>
                <div><div class="info-label">Mobile</div><div class="info-val"><?php echo htmlspecialchars($user_details['mobile'] ?? '—'); ?></div></div>
            </div>
            <div class="info-row">
                <div class="info-icon" style="background:#fff7ed;color:#ea580c;"><i class="fa-solid fa-venus-mars"></i></div>
                <div>
                    <div class="info-label">Gender</div>
                    <div class="info-val"><?php
                        $g = $user_details['gender'] ?? '';
                        echo $g == 1 ? 'Male' : ($g == 2 ? 'Female' : '—');
                    ?></div>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon" style="background:#ccfbf1;color:#0d9488;"><i class="fa-solid fa-calendar-plus"></i></div>
                <div><div class="info-label">Member Since</div><div class="info-val"><?php echo $member_since ?: '—'; ?></div></div>
            </div>
        </div>

        <!-- STM Info + Social -->
        <div class="prof-card">
            <h4>STM Details</h4>

            <div class="info-row">
                <div class="info-icon" style="background:#ede9fe;color:#7c3aed;"><i class="fa-solid fa-id-badge"></i></div>
                <div><div class="info-label">STM ID</div><div class="info-val"><?php echo htmlspecialchars($uid); ?></div></div>
            </div>
            <div class="info-row">
                <div class="info-icon" style="background:#dbeafe;color:#2563eb;"><i class="fa-solid fa-shield-halved"></i></div>
                <div><div class="info-label">Role</div><div class="info-val"><?php echo htmlspecialchars($role_label); ?></div></div>
            </div>
            <div class="info-row">
                <div class="info-icon" style="background:#fef9c3;color:#a16207;"><i class="fa-solid fa-circle-dot"></i></div>
                <div>
                    <div class="info-label">Account Status</div>
                    <div class="info-val"><?php
                        $s = $user_details['status'] ?? 1;
                        echo $s == 1 ? '<span style="color:#15803d;">Active</span>' : '<span style="color:#b91c1c;">Inactive</span>';
                    ?></div>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon" style="background:#ccfbf1;color:#0d9488;"><i class="fa-solid fa-map-marker-alt"></i></div>
                <div><div class="info-label">Location</div><div class="info-val">India</div></div>
            </div>

            <!-- Social links -->
            <div style="margin-top:20px;border-top:1px solid #f5f6fa;padding-top:18px;">
                <div style="font-size:0.78rem;color:#b2bec3;font-weight:600;text-transform:uppercase;letter-spacing:.06em;margin-bottom:12px;">Follow STM</div>
                <div class="prof-social">
                    <a href="https://facebook.com/stmorg.in" class="soc-fb" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/STM_ORG" class="soc-tw" target="_blank" title="Twitter / X"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/servicetomankindorg/" class="soc-ig" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCbdtIhRfuRYZbAQvM76lBOQ" class="soc-yt" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

</div><!-- /prof-wrap -->

<!-- Footer -->
<?php include('footer.php'); ?>
</main>

<script src="main-js/main.js"></script>
</body>
</html>