<?php
require('includes/functions.php');
date_default_timezone_set("Asia/Kolkata");

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

$selected_month = isset($_GET['month']) ? $_GET['month'] : date('m');
$selected_year  = isset($_GET['year'])  ? $_GET['year']  : date('Y');

// Handle legacy "last" link
if ($selected_month == 'last') {
    $selected_month = date('m', strtotime('first day of previous month'));
    $selected_year  = date('Y', strtotime('first day of previous month'));
}

// Build URL parameters for pagination
$url_params = '';
if ($selected_month !== '') {
    if ($selected_month !== 'all') {
        $selected_month = str_pad($selected_month, 2, '0', STR_PAD_LEFT);
    }
    $url_params .= '&month=' . $selected_month;
}
if ($selected_year !== '') {
    $url_params .= '&year=' . $selected_year;
}

// Fetch donations from API
$api_query = $api_url . '/logs/donations?page=' . $page . $url_params;
$raw = get_api_data($api_query);
$data = json_decode($raw, true);

if (!$data || $data['status'] !== 'success') {
    $payment_logs = [];
    $total_pages   = 0;
    $total_amount  = 0;
} else {
    $payment_logs = $data['data'];
    $total_pages  = $data['total_pages'];
    $total_amount = isset($data['total_amount']) ? $data['total_amount'] : 0;
}

// Human-readable heading
if ($selected_month === 'all') {
    $period_label = 'All Time';
} else {
    $period_label = date('F Y', mktime(0, 0, 0, (int)$selected_month, 1, (int)$selected_year));
}
?>
<?php include('header.php'); ?>
<main role="main">

    <!-- Hero banner -->
    <header id="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fund-heading text-center">
                        <h1>Donation Logs</h1>
                        <div class="typed_wrap">
                            <h2><span class="typed">Transparency in every rupee</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section style="padding: 48px 0 64px; background: #f0f2f8; min-height: 70vh;">
        <div class="container">

            <!-- Summary bar -->
            <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;margin-bottom:28px;">
                <div>
                    <h2 style="font-family:'Inter',sans-serif;font-size:1.5rem;font-weight:700;margin:0;color:#2c3e50;">
                        <?php echo $period_label; ?> Donations
                    </h2>
                    <p style="margin:4px 0 0;color:#636e72;font-size:0.9rem;">
                        <?php echo count($payment_logs) . ($total_pages > 1 ? '+ entries this page' : ' entries'); ?>
                        &nbsp;&middot;&nbsp;
                        <strong style="color:#15803d;">Total: ₹<?php echo number_format($total_amount); ?></strong>
                    </p>
                </div>

                <!-- Filter form -->
                <form method="GET" action="logs" style="display:flex;flex-wrap:wrap;gap:8px;align-items:center;">
                    <input type="text" id="tableSearch" placeholder="&#128269; Search donors…"
                           style="border:1px solid #dfe6e9;border-radius:8px;padding:8px 14px;font-size:0.88rem;outline:none;width:180px;font-family:'Inter',sans-serif;">

                    <select name="month" style="border:1px solid #dfe6e9;border-radius:8px;padding:8px 12px;font-size:0.88rem;background:#fff;font-family:'Inter',sans-serif;">
                        <option value="all" <?php echo ($selected_month == 'all') ? 'selected' : ''; ?>>All Time</option>
                        <?php for ($m = 1; $m <= 12; $m++):
                            $mv = str_pad($m, 2, '0', STR_PAD_LEFT);
                            $mn = date('F', mktime(0,0,0,$m,1));
                        ?>
                            <option value="<?php echo $mv; ?>" <?php echo ($selected_month == $mv) ? 'selected' : ''; ?>>
                                <?php echo $mn; ?>
                            </option>
                        <?php endfor; ?>
                    </select>

                    <select name="year" style="border:1px solid #dfe6e9;border-radius:8px;padding:8px 12px;font-size:0.88rem;background:#fff;font-family:'Inter',sans-serif;">
                        <?php for ($y = date('Y'); $y >= 2021; $y--):
                            echo "<option value=\"$y\"" . ($selected_year == $y ? ' selected' : '') . ">$y</option>";
                        endfor; ?>
                    </select>

                    <button type="submit" style="background:linear-gradient(135deg,#0984e3,#8e44ad);color:#fff;border:none;border-radius:8px;padding:8px 20px;font-size:0.88rem;font-weight:500;cursor:pointer;font-family:'Inter',sans-serif;">
                        Filter
                    </button>
                    <a href="logs" style="color:#636e72;font-size:0.85rem;text-decoration:none;padding-left:4px;">Reset</a>
                </form>
            </div>

            <!-- Table card -->
            <div style="background:#fff;border-radius:16px;box-shadow:0 2px 16px rgba(0,0,0,0.06);overflow:hidden;">
                <?php if (empty($payment_logs)): ?>
                    <div style="padding:60px 24px;text-align:center;color:#b2bec3;font-family:'Inter',sans-serif;">
                        <i class="fa-solid fa-receipt" style="font-size:2.8rem;margin-bottom:16px;display:block;"></i>
                        No donations found for this period.
                    </div>
                <?php else: ?>
                <div style="overflow-x:auto;">
                    <table id="logsTable" style="width:100%;border-collapse:collapse;font-family:'Inter',sans-serif;">
                        <thead>
                            <tr style="background:#f5f6fa;border-bottom:2px solid #f5f6fa;">
                                <th style="padding:14px 18px;text-align:left;font-size:0.72rem;text-transform:uppercase;letter-spacing:.06em;color:#b2bec3;font-weight:600;">#</th>
                                <th style="padding:14px 18px;text-align:left;font-size:0.72rem;text-transform:uppercase;letter-spacing:.06em;color:#b2bec3;font-weight:600;">Donor</th>
                                <th style="padding:14px 18px;text-align:left;font-size:0.72rem;text-transform:uppercase;letter-spacing:.06em;color:#b2bec3;font-weight:600;">Message</th>
                                <th style="padding:14px 18px;text-align:left;font-size:0.72rem;text-transform:uppercase;letter-spacing:.06em;color:#b2bec3;font-weight:600;">Amount</th>
                                <th style="padding:14px 18px;text-align:left;font-size:0.72rem;text-transform:uppercase;letter-spacing:.06em;color:#b2bec3;font-weight:600;">Status</th>
                                <th style="padding:14px 18px;text-align:left;font-size:0.72rem;text-transform:uppercase;letter-spacing:.06em;color:#b2bec3;font-weight:600;">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($payment_logs as $i => $row): ?>
                            <tr style="border-bottom:1px solid #f5f6fa;transition:background .15s;" onmouseover="this.style.background='#f5f6fa'" onmouseout="this.style.background=''">
                                <td style="padding:13px 18px;color:#b2bec3;font-size:0.82rem;"><?php echo (($page-1)*20) + $i + 1; ?></td>
                                <td style="padding:13px 18px;">
                                    <div style="display:flex;align-items:center;gap:10px;">
                                        <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#0984e3,#8e44ad);color:#fff;display:flex;align-items:center;justify-content:center;font-size:0.8rem;font-weight:600;flex-shrink:0;">
                                            <?php echo strtoupper(substr($row['name'], 0, 2)); ?>
                                        </div>
                                        <div>
                                            <div style="font-weight:500;font-size:0.9rem;"><?php echo htmlspecialchars($row['name']); ?></div>
                                            <div style="font-size:0.75rem;color:#b2bec3;"><?php echo htmlspecialchars($row['mail']); ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td style="padding:13px 18px;color:#636e72;font-size:0.88rem;"><?php echo htmlspecialchars($row['message'] ?: '—'); ?></td>
                                <td style="padding:13px 18px;font-weight:600;color:#15803d;font-size:0.95rem;">
                                    ₹<?php echo number_format($row['amount']); ?>
                                </td>
                                <td style="padding:13px 18px;">
                                    <?php if ($row['payment_status'] == 1): ?>
                                        <span style="background:#dcfce7;color:#15803d;border-radius:20px;padding:3px 12px;font-size:0.73rem;font-weight:600;">
                                            <i class="fa-solid fa-circle-check" style="font-size:0.65rem;"></i> Verified
                                        </span>
                                    <?php else: ?>
                                        <span style="background:#fef9c3;color:#a16207;border-radius:20px;padding:3px 12px;font-size:0.73rem;font-weight:600;">
                                            <i class="fa-solid fa-clock" style="font-size:0.65rem;"></i> Pending
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td style="padding:13px 18px;color:#b2bec3;font-size:0.82rem;">
                                    <?php echo date('d M Y, h:iA', strtotime($row['added_on'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
            <nav style="display:flex;justify-content:center;gap:6px;margin-top:28px;flex-wrap:wrap;">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page-1 . $url_params; ?>" style="<?php echo $pgBtn; ?>">← Prev</a>
                <?php endif; ?>

                <?php
                $pgBtn = 'display:inline-flex;align-items:center;justify-content:center;min-width:38px;height:38px;border-radius:8px;padding:0 12px;font-size:0.85rem;font-family:Inter,sans-serif;text-decoration:none;font-weight:500;background:#fff;color:#2c3e50;border:1px solid #dfe6e9;';
                $pgActive = 'display:inline-flex;align-items:center;justify-content:center;min-width:38px;height:38px;border-radius:8px;padding:0 12px;font-size:0.85rem;font-family:Inter,sans-serif;text-decoration:none;font-weight:600;background:linear-gradient(135deg,#0984e3,#8e44ad);color:#fff;border:none;';
                $start = max(1, $page - 2);
                $end   = min($total_pages, $page + 2);
                if ($start > 1): ?><a href="?page=1<?php echo $url_params; ?>" style="<?php echo $pgBtn; ?>">1</a><?php if ($start > 2): ?><span style="<?php echo $pgBtn; ?>">…</span><?php endif; endif;
                for ($p = $start; $p <= $end; $p++):
                    echo '<a href="?page=' . $p . $url_params . '" style="' . ($p == $page ? $pgActive : $pgBtn) . '">' . $p . '</a>';
                endfor;
                if ($end < $total_pages): if ($end < $total_pages - 1): ?><span style="<?php echo $pgBtn; ?>">…</span><?php endif; ?><a href="?page=<?php echo $total_pages . $url_params; ?>" style="<?php echo $pgBtn; ?>"><?php echo $total_pages; ?></a><?php endif; ?>

                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?php echo $page+1 . $url_params; ?>" style="<?php echo $pgBtn; ?>">Next →</a>
                <?php endif; ?>
            </nav>
            <?php endif; ?>

        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</main>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js?v=1" data-auto-replace-svg="nest"></script>
<script src='js/boostrap-4.5.js'></script>
<script src="main-js/main.js"></script>
<script>
document.getElementById('tableSearch')?.addEventListener('keyup', function () {
    const q = this.value.toUpperCase();
    document.querySelectorAll('#logsTable tbody tr').forEach(r => {
        r.style.display = r.textContent.toUpperCase().includes(q) ? '' : 'none';
    });
});
</script>
</body>
</html>