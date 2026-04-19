<?php
require('includes/functions.php');
date_default_timezone_set("Asia/Kolkata");

$user_id   = isset($_SESSION['USER_ID'])   ? $_SESSION['USER_ID']   : '';
$user_name = isset($_SESSION['USER_NAME']) ? $_SESSION['USER_NAME'] : 'Guest';
$user_cc   = isset($_SESSION['CC'])        ? $_SESSION['CC']        : 'stmo';
$stm_id    = $user_cc . $user_id;
$date      = date('Y-m-d H:i:s');

// ---- Fetch all live stats ----
$dm = get_api_data($api_url . '/logs/donations?month=' . date('n') . '&year=' . date('Y'));
$dm = json_decode($dm, true);
$this_month_total = ($dm && $dm['status'] == 'success') ? $dm['total_amount'] : 0;

$dd = get_api_data($api_url . '/logs/donations?month=' . date('n') . '&year=' . date('Y'));
$dd = json_decode($dd, true);
$today_str = date('Y-m-d');
$today_total = 0;
if ($dd && $dd['status'] == 'success') {
    foreach ($dd['data'] as $d) {
        if (strpos($d['added_on'], $today_str) === 0) $today_total += $d['amount'];
    }
}

$lm_date  = date('Y-m-d', strtotime('first day of previous month'));
$dl = get_api_data($api_url . '/logs/donations?month=' . date('n', strtotime($lm_date)) . '&year=' . date('Y', strtotime($lm_date)));
$dl = json_decode($dl, true);
$last_month_total = ($dl && $dl['status'] == 'success') ? $dl['total_amount'] : 0;

$dy = get_api_data($api_url . '/logs/donations?year=' . date('Y'));
$dy = json_decode($dy, true);
$this_year_total = ($dy && $dy['status'] == 'success') ? $dy['total_amount'] : 0;

$da = get_api_data($api_url . '/logs/donations');
$da = json_decode($da, true);
$all_total = ($da && $da['status'] == 'success') ? $da['total_amount'] : 0;

// Permanent donors (role=1)
$du = get_api_data($api_url . '/global/users?role=1');
$du = json_decode($du, true);
$perm_donors = ($du && $du['status'] == 'success') ? $du['total_pages'] * 10 : 0;

// Monthly breakdown last 6 months for chart
$monthly_data = [];
$monthly_labels = [];
for ($i = 5; $i >= 0; $i--) {
    $ts = strtotime("-$i month");
    $m  = date('n', $ts);
    $y  = date('Y', $ts);
    $monthly_labels[] = date('M', $ts);
    $resp = get_api_data($api_url . '/logs/donations?month=' . $m . '&year=' . $y);
    $resp = json_decode($resp, true);
    $monthly_data[] = ($resp && $resp['status'] == 'success') ? (int)$resp['total_amount'] : 0;
}

// Recent donations (current month, latest)
$recent_resp = get_api_data($api_url . '/logs/donations?month=' . date('n') . '&year=' . date('Y') . '&page=1');
$recent_resp = json_decode($recent_resp, true);
$recent_donations = ($recent_resp && $recent_resp['status'] == 'success') ? array_slice($recent_resp['data'], 0, 8) : [];

// Referrals
$ref_resp = get_api_data($api_url . '/global/users?refer-by=' . $user_id);
$ref_resp = json_decode($ref_resp, true);
$referrals = ($ref_resp && $ref_resp['status'] == 'success' && is_array($ref_resp['data'])) ? $ref_resp['data'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="STM Dashboard — Service to Mankind">
    <title>Dashboard — STM India</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/main/style.css?v=2.8">
    <link rel="stylesheet" href="css/main/banner.css">
    <link rel="stylesheet" href="css/main/btn.css">
    <link rel="stylesheet" href="css/defualt/catto.css">
    <link rel="stylesheet" href="css/defualt/catto.min.css">
    <link rel="stylesheet" href="css/defualt/bootstrap.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="js/jquery1.js"></script>
    <script src="js/jquery-3.5.1-slim.js"></script>
    <script src="js/boostrap.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180">
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="accesories/fevicon 16.ico">
    <meta name="theme-color" content="#2c3e50">

    <script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js?v=1" data-auto-replace-svg="nest"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <style>
        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background: #f0f2f8;
            color: #2c3e50;
            margin: 0;
        }

        /* ---- Dashboard wrapper ---- */
        .dash-wrapper {
            max-width: 1280px;
            margin: 0 auto;
            padding: 110px 24px 48px;
        }

        .dash-greeting {
            margin-bottom: 32px;
        }
        .dash-greeting h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0 0 4px;
            color: #2c3e50;
        }
        .dash-greeting p {
            color: #636e72;
            margin: 0;
            font-size: 0.95rem;
        }

        /* ---- Stat Cards ---- */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: #fff;
            border-radius: 16px;
            padding: 24px 22px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            display: flex;
            flex-direction: column;
            gap: 10px;
            transition: transform .2s, box-shadow .2s;
        }
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.10);
        }
        .stat-card .stat-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem;
        }
        .stat-card .stat-label {
            font-size: 0.8rem;
            font-weight: 500;
            color: #b2bec3;
            text-transform: uppercase;
            letter-spacing: .05em;
        }
        .stat-card .stat-value {
            font-size: 1.7rem;
            font-weight: 700;
            line-height: 1.2;
        }
        .stat-card .stat-sub {
            font-size: 0.78rem;
            color: #b2bec3;
        }

        /* icon bg colors */
        .ic-green  { background: #dcfce7; color: #16a34a; }
        .ic-blue   { background: #dbeafe; color: #2563eb; }
        .ic-violet { background: #ede9fe; color: #7c3aed; }
        .ic-orange { background: #fff7ed; color: #ea580c; }
        .ic-teal   { background: #ccfbf1; color: #0d9488; }
        .ic-rose   { background: #ffe4e6; color: #e11d48; }

        /* ---- Chart & Activity Row ---- */
        .dash-row {
            display: grid;
            grid-template-columns: 1fr 380px;
            gap: 20px;
            margin-bottom: 28px;
        }
        @media (max-width: 900px) {
            .dash-row { grid-template-columns: 1fr; }
        }

        .dash-card {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        }
        .dash-card h3 {
            font-size: 1rem;
            font-weight: 600;
            margin: 0 0 18px;
            color: #2c3e50;
        }
        .dash-card .card-subtitle {
            font-size: 0.8rem;
            color: #b2bec3;
            margin-top: -14px;
            margin-bottom: 18px;
        }

        /* ---- Donations Table ---- */
        .recent-table { width: 100%; border-collapse: collapse; }
        .recent-table th {
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: .06em;
            color: #b2bec3;
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #f5f6fa;
        }
        .recent-table td {
            padding: 10px 12px;
            font-size: 0.88rem;
            border-bottom: 1px solid #f5f6fa;
            vertical-align: middle;
        }
        .recent-table tr:last-child td { border-bottom: none; }
        .recent-table tr:hover td { background: #f5f6fa; }

        .donor-avatar {
            width: 32px; height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0984e3, #8e44ad);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.78rem;
            font-weight: 600;
            margin-right: 8px;
        }
        .donor-cell { display: flex; align-items: center; }

        .badge-success { background: #dcfce7; color: #15803d; border-radius: 20px; padding: 2px 10px; font-size: 0.72rem; font-weight: 600; }
        .badge-pending { background: #fef9c3; color: #a16207; border-radius: 20px; padding: 2px 10px; font-size: 0.72rem; font-weight: 600; }

        /* ---- Referrals panel ---- */
        .ref-list { list-style: none; padding: 0; margin: 0; }
        .ref-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px solid #f5f6fa;
            font-size: 0.88rem;
        }
        .ref-list li:last-child { border-bottom: none; }
        .ref-avatar {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0ea5e9, #2563eb);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 600;
            flex-shrink: 0;
        }
        .ref-info { flex: 1; min-width: 0; }
        .ref-name { font-weight: 500; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .ref-sub  { font-size: 0.75rem; color: #b2bec3; }
        .empty-state { text-align: center; color: #b2bec3; padding: 30px 0; font-size: 0.9rem; }

        /* ---- Progress bar ---- */
        .goal-bar-wrap {
            background: #f5f6fa;
            border-radius: 99px;
            height: 8px;
            margin-top: 8px;
            overflow: hidden;
        }
        .goal-bar {
            height: 100%;
            border-radius: 99px;
            background: linear-gradient(90deg, #0984e3, #8e44ad);
            transition: width 1s ease;
        }
        .goal-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.75rem;
            color: #b2bec3;
            margin-top: 6px;
        }

        /* ---- Footer ---- */
        .dash-footer-note {
            text-align: center;
            color: #b2bec3;
            font-size: 0.8rem;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<main role="main">
<div class="dash-wrapper">

    <!-- Greeting -->
    <div class="dash-greeting">
        <h2>Welcome back, <?php echo htmlspecialchars($user_name); ?> 👋</h2>
        <p><?php echo date('l, d F Y'); ?> &nbsp;·&nbsp; STM Dashboard Overview</p>
    </div>

    <!-- Stat Cards -->
    <div class="stat-grid">
        <div class="stat-card">
            <div class="stat-icon ic-green"><i class="fa-solid fa-indian-rupee-sign"></i></div>
            <div class="stat-label">This Month</div>
            <div class="stat-value">₹<?php echo number_format($this_month_total); ?></div>
            <div class="stat-sub"><?php echo date('F Y'); ?> donations</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon ic-blue"><i class="fa-solid fa-calendar-day"></i></div>
            <div class="stat-label">Today</div>
            <div class="stat-value">₹<?php echo number_format($today_total); ?></div>
            <div class="stat-sub"><?php echo date('d M Y'); ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-icon ic-orange"><i class="fa-solid fa-calendar-minus"></i></div>
            <div class="stat-label">Last Month</div>
            <div class="stat-value">₹<?php echo number_format($last_month_total); ?></div>
            <div class="stat-sub"><?php echo date('F Y', strtotime($lm_date)); ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-icon ic-violet"><i class="fa-solid fa-chart-line"></i></div>
            <div class="stat-label">This Year</div>
            <div class="stat-value">₹<?php echo number_format($this_year_total); ?></div>
            <div class="stat-sub"><?php echo date('Y'); ?> total</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon ic-teal"><i class="fa-solid fa-users"></i></div>
            <div class="stat-label">Donors</div>
            <div class="stat-value"><?php
                // fetch exact count via users API total_pages * 10 approximation; show total pages * page size
                $du2 = get_api_data($api_url . '/global/users?role=1&page=1');
                $du2 = json_decode($du2, true);
                $donor_count = ($du2 && $du2['status'] == 'success') ? $du2['total_pages'] * 10 : '—';
                echo $donor_count;
            ?></div>
            <div class="stat-sub">Permanent donors</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon ic-rose"><i class="fa-solid fa-wallet"></i></div>
            <div class="stat-label">All Time</div>
            <div class="stat-value">₹<?php echo number_format($all_total); ?></div>
            <div class="stat-sub">Total donations ever</div>
        </div>
    </div>

    <!-- Monthly Goal Progress -->
    <div class="dash-card" style="margin-bottom:20px;">
        <?php
        $goal = 10000;
        $pct  = min(100, round(($this_month_total / $goal) * 100));
        ?>
        <h3>Monthly Goal Progress</h3>
        <div style="display:flex;justify-content:space-between;align-items:baseline;margin-bottom:4px;">
            <span style="font-weight:600;font-size:1.1rem;">₹<?php echo number_format($this_month_total); ?></span>
            <span style="font-size:0.85rem;color:#b2bec3;"><?php echo $pct; ?>% of ₹<?php echo number_format($goal); ?> goal</span>
        </div>
        <div class="goal-bar-wrap">
            <div class="goal-bar" style="width:<?php echo $pct; ?>%"></div>
        </div>
        <div class="goal-meta">
            <span>₹0</span><span>₹<?php echo number_format($goal); ?></span>
        </div>
    </div>

    <!-- Chart + Referrals -->
    <div class="dash-row">
        <div class="dash-card">
            <h3>6-Month Donation Trend</h3>
            <p class="card-subtitle">Monthly donation totals (₹)</p>
            <canvas id="donationChart" height="90"></canvas>
        </div>

        <div class="dash-card">
            <h3>People You Referred</h3>
            <p class="card-subtitle">Members who joined via your link</p>
            <?php if (empty($referrals)): ?>
                <div class="empty-state">
                    <i class="fa-solid fa-user-group" style="font-size:2rem;margin-bottom:10px;display:block;"></i>
                    No referrals yet.<br>Share your link to invite friends!
                </div>
            <?php else: ?>
                <ul class="ref-list">
                    <?php foreach (array_slice($referrals, 0, 8) as $ref): ?>
                        <li>
                            <div class="ref-avatar"><?php echo strtoupper(substr($ref['name'], 0, 2)); ?></div>
                            <div class="ref-info">
                                <div class="ref-name"><?php echo htmlspecialchars($ref['name']); ?></div>
                                <div class="ref-sub"><?php echo htmlspecialchars($ref['mail']); ?></div>
                            </div>
                            <span style="font-size:0.75rem;color:#b2bec3;"><?php echo date('d M', strtotime($ref['added_on'])); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <!-- Recent Donations Table -->
    <div class="dash-card">
        <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;margin-bottom:18px;">
            <div>
                <h3 style="margin:0;">Recent Donations</h3>
                <p style="margin:4px 0 0;font-size:0.8rem;color:#b2bec3;"><?php echo date('F Y'); ?></p>
            </div>
            <div style="display:flex;gap:10px;flex-wrap:wrap;">
                <input id="dashSearch" type="text" placeholder="Search donor…"
                       style="border:1px solid #dfe6e9;border-radius:8px;padding:7px 14px;font-size:0.88rem;outline:none;width:180px;">
                <a href="logs" style="background:linear-gradient(135deg,#0984e3,#8e44ad);color:#fff;border-radius:8px;padding:7px 18px;font-size:0.88rem;text-decoration:none;font-weight:500;">View All</a>
            </div>
        </div>

        <?php if (empty($recent_donations)): ?>
            <div class="empty-state">No donations recorded this month.</div>
        <?php else: ?>
        <div style="overflow-x:auto;">
            <table class="recent-table" id="recentTable">
                <thead>
                    <tr>
                        <th>Donor</th>
                        <th>Message</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($recent_donations as $don): ?>
                    <tr>
                        <td>
                            <div class="donor-cell">
                                <div class="donor-avatar"><?php echo strtoupper(substr($don['name'], 0, 2)); ?></div>
                                <div>
                                    <div style="font-weight:500;"><?php echo htmlspecialchars($don['name']); ?></div>
                                    <div style="font-size:0.75rem;color:#b2bec3;"><?php echo htmlspecialchars($don['mail']); ?></div>
                                </div>
                            </div>
                        </td>
                        <td style="color:#636e72;"><?php echo htmlspecialchars($don['message'] ?: '—'); ?></td>
                        <td style="font-weight:600;color:#15803d;">₹<?php echo number_format($don['amount']); ?></td>
                        <td>
                            <?php if ($don['payment_status'] == 1): ?>
                                <span class="badge-success"><i class="fa-solid fa-check" style="font-size:0.65rem;"></i> Verified</span>
                            <?php else: ?>
                                <span class="badge-pending"><i class="fa-solid fa-clock" style="font-size:0.65rem;"></i> Pending</span>
                            <?php endif; ?>
                        </td>
                        <td style="color:#b2bec3;font-size:0.82rem;"><?php echo date('d M, h:iA', strtotime($don['added_on'])); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>

    <p class="dash-footer-note">STM India &copy; <?php echo date('Y'); ?> &mdash; Every contribution counts.</p>

</div><!-- /dash-wrapper -->

<!-- ---- Footer ---- -->
<?php include('footer.php'); ?>
</main>

<script src="js/boostrap.js"></script>
<script src="main-js/main.js"></script>
<script>
// Chart
const ctx = document.getElementById('donationChart');
if (ctx) {
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($monthly_labels); ?>,
            datasets: [{
                label: 'Donations (₹)',
                data: <?php echo json_encode($monthly_data); ?>,
                backgroundColor: 'rgba(9,132,227,0.15)',
                borderColor: '#0984e3',
                borderWidth: 2,
                borderRadius: 8,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#0984e3',
                pointRadius: 5,
                hoverBackgroundColor: 'rgba(9,132,227,0.35)',
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: ctx => ' ₹' + ctx.parsed.y.toLocaleString()
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: v => '₹' + v.toLocaleString(),
                        color: '#b2bec3'
                    },
                    grid: { color: '#f5f6fa' }
                },
                x: { ticks: { color: '#b2bec3' }, grid: { display: false } }
            }
        }
    });
}

// Table search
document.getElementById('dashSearch')?.addEventListener('keyup', function() {
    const q = this.value.toUpperCase();
    document.querySelectorAll('#recentTable tbody tr').forEach(r => {
        r.style.display = r.textContent.toUpperCase().includes(q) ? '' : 'none';
    });
});
</script>
</body>
</html>