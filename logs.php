<?php
require('includes/functions.php');


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
date_default_timezone_set("Asia/Kolkata");

$selected_month = isset($_GET['month']) ? $_GET['month'] : date('m');
$selected_year = isset($_GET['year']) ? $_GET['year'] : date('Y');

// Handle legacy "last" link
if ($selected_month == 'last') {
    $selected_month = date("m", strtotime("first day of previous month"));
    $selected_year = date("Y", strtotime("first day of previous month"));
}

// Base parameters for pagination links
$url_params = "";
if ($selected_month != '') {
    if ($selected_month !== 'all') {
        $selected_month = str_pad($selected_month, 2, '0', STR_PAD_LEFT);
    }
    $url_params .= "&month=" . $selected_month;
}
if ($selected_year != '') {
    $url_params .= "&year=" . $selected_year;
}

// Fetch API data
$data = get_api_data($api_url . "/logs/donations?page=" . $page . $url_params);
$data = json_decode($data, true);
// Check for API errors
if ($data['status'] !== "success") {
    echo "API error: " . $data['message'];
    exit;
}
// Get payment logs data
$total_pages = $data['total_pages'];
$payment_logs = $data['data'];
$total_amount = isset($data['total_amount']) ? $data['total_amount'] : 0;
?>
<?php include('header.php'); ?>
<main role="main">
    <header id="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fund-heading text-center">
                        <h1>Payments Logs</h1>
                        <!-- <h2>Charity/Nonprofit</h2> -->
                        <div class="typed_wrap">
                            <h2> <span class="typed">Check our recent donations</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="section mt-5 mb-5">
        <div class="container marketing">
            <div class="row align-items-center mb-4">
                <div class="col-md-5 col-sm-12 section-head">
                    <?php if ($selected_month == 'all') { ?>
                        <h4><span>All Time Payments Logs</span></h4>
                        <p>All Donations | Total: Rs. <?php echo htmlspecialchars($total_amount); ?></p>
                    <?php } else { ?>
                        <h4><span>Payments logs of
                                <?php echo date("M Y", strtotime("$selected_year-$selected_month-01")); ?></span></h4>
                        <p>Month Donations | Total: Rs. <?php echo htmlspecialchars($total_amount); ?></p>
                    <?php } ?>
                </div>
                <div class="col-md-7 col-sm-12 text-md-right text-sm-left mt-3 mt-md-0">
                    <form method="GET" action="logs.php" class="form-inline justify-content-md-end">
                        <div class="input-group mr-3 mb-2" style="max-width: 200px;">
                            <input type="text" id="tableSearch" class="form-control" placeholder="Search logs...">
                        </div>
                        <select name="month" class="form-control mr-2 mb-2">
                            <option value="all" <?php echo ($selected_month == 'all') ? 'selected' : ''; ?>>All Time
                            </option>
                            <?php
                            for ($m = 1; $m <= 12; $m++) {
                                $m_padded = str_pad($m, 2, '0', STR_PAD_LEFT);
                                $m_name = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                $sel = ($selected_month == $m_padded) ? 'selected' : '';
                                echo "<option value=\"$m_padded\" $sel>$m_name</option>";
                            }
                            ?>
                        </select>
                        <select name="year" class="form-control mr-2 mb-2">
                            <?php
                            $current_year = date('Y');
                            for ($y = $current_year; $y >= 2021; $y--) {
                                $sel = ($selected_year == $y) ? 'selected' : '';
                                echo "<option value=\"$y\" $sel>$y</option>";
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-primary mb-2">Filter</button>
                    </form>
                </div>
            </div>

            <!-- Responsive table starts here -->
            <div class="table-responsive shadow-sm border border-light rounded">
                <table class="table table-striped table-hover table-bordered mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($payment_logs as $row) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['message'] ?: 'NULL'); ?></td>
                                <td>Rs. <?php echo htmlspecialchars($row['amount']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- pagination -->
            <?php if ($total_pages): ?>
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <?php if ($page > 1): ?>
                            <li class="page-item"><a class="page-link"
                                    href="?page=<?php echo $page - 1 . $url_params; ?>">Prev</a></li>
                        <?php endif; ?>

                        <?php if ($page > 3): ?>
                            <li class="page-item"><a class="page-link" href="?page=1<?php echo $url_params; ?>">1</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <?php endif; ?>

                        <?php if ($page - 2 > 0): ?>
                            <li class="page-item"><a class="page-link"
                                    href="?page=<?php echo ($page - 2) . $url_params; ?>"><?php echo $page - 2; ?></a></li>
                        <?php endif; ?>
                        <?php if ($page - 1 > 0): ?>
                            <li class="page-item"><a class="page-link"
                                    href="?page=<?php echo ($page - 1) . $url_params; ?>"><?php echo $page - 1; ?></a></li>
                        <?php endif; ?>

                        <li class="page-item active"><a class="page-link"
                                href="?page=<?php echo $page . $url_params; ?>"><?php echo $page; ?></a></li>

                        <?php if ($page + 1 <= $total_pages): ?>
                            <li class="page-item"><a class="page-link"
                                    href="?page=<?php echo ($page + 1) . $url_params; ?>"><?php echo $page + 1; ?></a></li>
                        <?php endif; ?>
                        <?php if ($page + 2 <= $total_pages): ?>
                            <li class="page-item"><a class="page-link"
                                    href="?page=<?php echo ($page + 2) . $url_params; ?>"><?php echo $page + 2; ?></a></li>
                        <?php endif; ?>

                        <?php if ($page < $total_pages - 2): ?>
                            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link"
                                    href="?page=<?php echo $total_pages . $url_params; ?>"><?php echo $total_pages; ?></a></li>
                        <?php endif; ?>

                        <?php if ($page < $total_pages): ?>
                            <li class="page-item"><a class="page-link"
                                    href="?page=<?php echo ($page + 1) . $url_params; ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>

    <!-- ******************** Footer Starts Here ******************* -->
    <?php include('footer.php'); ?>
</main>
<script src='js/boostrap-4.5.js'></script>
<script src='js/popper.js'></script>
<script src='js/tweenmax.js'></script>
<script src="main-js/main.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var searchInput = document.getElementById("tableSearch");
        if (searchInput) {
            searchInput.addEventListener("keyup", function () {
                var filter = this.value.toUpperCase();
                var rows = document.querySelector(".table tbody").rows;

                for (var i = 0; i < rows.length; i++) {
                    var textCol0 = rows[i].cells[0].textContent.toUpperCase();
                    var textCol1 = rows[i].cells[1].textContent.toUpperCase();
                    var textCol2 = rows[i].cells[2].textContent.toUpperCase();
                    if (textCol0.indexOf(filter) > -1 || textCol1.indexOf(filter) > -1 || textCol2.indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            });
        }
    });
</script>
</body>

</html>