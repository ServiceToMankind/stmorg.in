<?php
require('includes/functions.php');
date_default_timezone_set("Asia/Kolkata");
// $date=date('Y-m-d');
$date=date('Y-m-d h:i:s');
$last_month_first_day = date("Y-n-j", strtotime("first day of previous month"));

include('header.php');
 ?>


<main role="main">

    <header id="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fund-heading text-center">
                        <h1>STM</h1>
                        <!-- <h2>Charity/Nonprofit</h2> -->
                        <div class="typed_wrap">
                            <h2> <span class="typed"></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- target block -->
    <div class="overlapping_urgent_cause wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            <div class="urgent_cause_block alt">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="urgent_cause_heading">
                            <div class="power_highlight_tag">This Month Donations</div>
                            <h3>Every Contribution Counts</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="power_progress_content">
                            <div class="power_progress_inner">
                                <div class="power_progress_bar_back">
                                    <?php 
                                        $raised=get_total_price_by_month_api($date);
                                    $rpercent=($raised/10000)*100;
                                    ?>
                                    <div class="power_progress_bar" style="max-width: <?php echo $rpercent ?>%;"
                                        back-ground colour:"blue"><span
                                            class="power_progress_value"><?php echo $rpercent ?>%</span></div>
                                </div>
                                <div class="power_progress_amount"><span><b>Exepected:</b> Rs.10000</span>
                                    <span><b>Raised:</b> Rs.<?php echo $raised; ?></span>
                                </div>
                            </div>
                            <div class="power_button_group">
                                <a href="donate" class="power_button effect_1">
                                    <span class="button_value">Donate Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome -->
    <br>
    <br>

    <!-- 
        <div class="wel" style="color:skyblue; text-align: center">
            <h5>WELCOME TO SERVICE MANKIND</h5>
            <div style="color: black; text-align: center">
                <h3>We Believe that we can save <br> more lifes with you...</h3>
            </div>
        </div> -->


    <!-- boxes -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInLeft"
                        style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="power_iconbox_icon">
                            <i class="fas fa-dove primary-img"></i>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>MISSION</h5>
                            <p>To empower and serve the underprivileged communities by providing them with
                                education, healthcare, and basic necessities, while encouraging volunteerism and
                                creating awareness on social issues.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInRight"
                        style="visibility: visible; animation-name: fadeInRight;">
                        <div class="power_iconbox_icon">
                            <div class="primary-img">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>VISION</h5>
                            <p>To create a just and equitable society where everyone has access to basic needs and
                                opportunities for growth and development, and where volunteerism and social
                                responsibility are integral parts of the community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInDown"
                        style="visibility: visible; animation-name: fadeInDown;">
                        <div class="power_iconbox_icon">
                            <div class="primary-img">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>PERMANENT DONOR</h5>
                            <p>Become a permanent donor and make a lasting impact on the lives of those in need.
                                Join us in our mission to create a better world, one act of kindness at a time.



                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="power_iconbox_icon">
                            <div class="primary-img">
                                <i class="fas fa-child"></i>
                            </div>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>BECOME VOLUNTEER</h5>
                            <p>Join our team of enthusiastic and passionate volunteers. Whether you have a few hours
                                a week or a few hours a month, your time and
                                skills can help us create a better world for everyone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- boxes_end -->

    <div id="aboutus"></div>

    <div class="container marketing">
        <hr class="featurette-divider">

        <div class="section-head col-sm-12">
            <h4><span>About</span> Us</h4>
            <p>Welcome to STM, where we strive to make a positive impact in the world through our volunteer work.
                Our dedicated team of volunteers come from all walks of life and are committed to serving those in
                need. Whether it's providing food and shelter to the homeless, conducting medical camps, or raising
                funds for critical medical cases, we believe that even small acts of kindness can make a big
                difference. Join us in our mission to spread love, compassion, and hope to those who need it the
                most.</p>
        </div>




        <hr class="featurette-divider">
        <div id="themes" class="themescls">
            <div class="feat bg-gray pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="section-head col-sm-12">
                            <h4><span>Our</span> Themes</h4>
                            <p>Join us in making a difference through our diverse themes"</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_one"><img class="themeicon"
                                        src="images/icons/rupee.png" width="50" height="50"></img></span>
                                <h6>A Rupee A Day</h6>
                                <p>Change the world with just a rupee a day! Your small contribution
                                    can go a long way in providing food, shelter, and education to those who need it
                                    most.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_two"><img class="themeicon"
                                        src="images/icons/research.png" width="50" height="50"></span>
                                <h6>Drives, Research & Survey</h6>
                                <p>Be a part of our team in conducting research, surveys, and drives to make a
                                    positive impact in the society</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_three"><img class="themeicon"
                                        src="images/icons/blood.png" width="50" height="50"></span>
                                <h6>Blood Donations</h6>
                                <p>Be a hero, save a life. Join us in our mission to donate blood and help those in
                                    need. Your one pint of blood can save up to three lives.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_four"><img class="themeicon"
                                        src="images/icons/gift.png" width="50" height="50"></span>
                                <h6>Event Celebrations</h6>
                                <p>Celebrate your special occasions with the less fortunate. Make their day as
                                    special as yours.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_five"><img class="themeicon"
                                        src="images/icons/animal.png" width="50" height="50"></span>
                                <h6>Animal Care</h6>
                                <p>Be a hero for the voiceless. Join us in our mission to provide care and love for
                                    our furry friends.</p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-sm-6">
                                <div class="item"> <span class="icon feature_box_col_six"><i
                                            class="fa fa-camera"></i></span>
                                    <h6>Retina Ready</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor Aenean massa.</p>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>

        </div>

        <!-- sponsers & partners -->
        <hr class="featurette-divider">
        <div id="themes" class="themescls">
            <div class="feat bg-gray pt-5 pb-5">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="section-head col-sm-12">
                            <h4><span>Our</span> Sponsers & Patners</h4>
                            <p>Empowering Change Through Generosity and Support</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a href="https://weber.cottonseeds.org">
                                <img class="themeicon" src="images/sponsers/weber_technologies.png" width="350"
                                    alt="Weber Technologies"></img>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a href="https://aims.ac.in/">
                                <img class="themeicon"
                                    src="https://aims.ac.in/wp-content/uploads/2023/04/logo-1024x319.png" width="260"
                                    alt="Weber Technologies"></img>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!--donation centre-->
        <hr class="featurette-divider">


        <?php
        // Fetch monthly data for chart (last 6 months)
        $idx_labels = [];
        $idx_data   = [];
        for ($i = 5; $i >= 0; $i--) {
            $ts = strtotime("-$i month");
            $index_m = date('n', $ts); $index_y = date('Y', $ts);
            $idx_labels[] = date('M', $ts);
            $r = json_decode(get_api_data($api_url . '/logs/donations?month=' . $index_m . '&year=' . $index_y), true);
            $idx_data[] = ($r && $r['status']=='success') ? (int)$r['total_amount'] : 0;
        }
        $this_month_amt = get_total_price_by_month_api($date);
        $today_amt      = get_total_price_by_date_api($date);
        $last_month_amt = get_total_price_by_month_api($last_month_first_day);
        $year_amt       = get_total_price_by_year_api($date);
        $all_amt        = get_total_donations_api();
        $goal           = 10000;
        $pct            = min(100, round(($this_month_amt / $goal) * 100));
        ?>

        <div class="feat pt-4 pb-5">
            <div class="container">

                <!-- Section heading — same style as "Our Themes" -->
                <div class="row">
                    <div class="section-head col-sm-12">
                        <h4><span>Donation</span> Overview</h4>
                        <p>Real-time fundraising progress. Every rupee counts — see our community in action.</p>
                    </div>
                </div>

                <!-- Stat numbers row — 4 columns like the themes grid -->
                <div class="row text-center" style="margin-bottom:32px;">
                    <div class="col-lg-3 col-md-6 col-6" style="margin-bottom:20px;">
                        <div style="padding:20px 10px;border-bottom:3px solid #0984e3;">
                            <div style="font-size:0.72rem;text-transform:uppercase;letter-spacing:.1em;color:#b2bec3;font-weight:600;margin-bottom:6px;">Today</div>
                            <div style="font-size:1.7rem;font-weight:700;color:#0984e3;">₹<?php echo number_format($today_amt); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" style="margin-bottom:20px;">
                        <div style="padding:20px 10px;border-bottom:3px solid #8e44ad;">
                            <div style="font-size:0.72rem;text-transform:uppercase;letter-spacing:.1em;color:#b2bec3;font-weight:600;margin-bottom:6px;">This Month</div>
                            <div style="font-size:1.7rem;font-weight:700;color:#8e44ad;">₹<?php echo number_format($this_month_amt); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" style="margin-bottom:20px;">
                        <div style="padding:20px 10px;border-bottom:3px solid #f91942;">
                            <div style="font-size:0.72rem;text-transform:uppercase;letter-spacing:.1em;color:#b2bec3;font-weight:600;margin-bottom:6px;">This Year</div>
                            <div style="font-size:1.7rem;font-weight:700;color:#f91942;">₹<?php echo number_format($year_amt); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" style="margin-bottom:20px;">
                        <div style="padding:20px 10px;border-bottom:3px solid #27ae60;">
                            <div style="font-size:0.72rem;text-transform:uppercase;letter-spacing:.1em;color:#b2bec3;font-weight:600;margin-bottom:6px;">All Time</div>
                            <div style="font-size:1.7rem;font-weight:700;color:#27ae60;">₹<?php echo number_format($all_amt); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Chart + Goal row -->
                <div class="row" style="align-items:center;">
                    <!-- Trend chart -->
                    <div class="col-lg-8" style="margin-bottom:24px;">
                        <canvas id="indexDonationChart" height="80"></canvas>
                    </div>

                    <!-- Monthly goal + CTA -->
                    <div class="col-lg-4" style="margin-bottom:24px;text-align:center;">
                        <div style="font-size:0.75rem;text-transform:uppercase;letter-spacing:.1em;color:#b2bec3;font-weight:600;margin-bottom:8px;"><?php echo date('F Y'); ?> Goal</div>
                        <div style="font-size:3rem;font-weight:700;color:#0984e3;line-height:1;"><?php echo $pct; ?>%</div>
                        <div style="font-size:0.85rem;color:#636e72;margin:8px 0 14px;">₹<?php echo number_format($this_month_amt); ?> of ₹<?php echo number_format($goal); ?> raised</div>
                        <div style="background:#ecf0f1;border-radius:99px;height:6px;overflow:hidden;margin-bottom:22px;">
                            <div style="height:100%;border-radius:99px;background:linear-gradient(90deg,#0984e3,#8e44ad);width:<?php echo $pct; ?>%;transition:width 1.2s ease;"></div>
                        </div>
                        <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap;">
                            <a href="donate" class="btn btn-primary" style="background:linear-gradient(135deg,#0984e3,#8e44ad);border:none;padding:10px 24px;font-weight:600;border-radius:6px;">Donate Now</a>
                            <a href="dashboard" class="btn" style="border:2px solid #0984e3;color:#0984e3;background:transparent;padding:10px 20px;font-weight:600;border-radius:6px;">Full Dashboard →</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
        <script>
        (function(){
            var ctx = document.getElementById('indexDonationChart');
            if(!ctx) return;
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($idx_labels); ?>,
                    datasets: [{
                        label: 'Donations (₹)',
                        data: <?php echo json_encode($idx_data); ?>,
                        fill: true,
                        backgroundColor: 'rgba(9,132,227,0.08)',
                        borderColor: '#0984e3',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#8e44ad',
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        tension: 0.4,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false },
                        tooltip: { callbacks: { label: c => ' ₹' + c.parsed.y.toLocaleString() } }
                    },
                    scales: {
                        y: { beginAtZero:true, ticks:{ callback: v=>'₹'+v.toLocaleString(), color:'#b2bec3', font:{size:11} }, grid:{color:'#ecf0f1'}, border:{display:false} },
                        x: { ticks:{color:'#b2bec3', font:{size:11}}, grid:{display:false}, border:{display:false} }
                    }
                }
            });
        })();
        </script>

        <hr class="featurette-divider">

        <!--join with us-->


        <!--social acc-->
        <div class="social-index">
            <h1>Let us be social !!</h1>

            <div class="social-btns">
                <a class="sofab btn facebook" href="https://facebook.com/stmorg.in"><i
                        class="sofa fab fa-facebook-f"></i></a>
                <a class="sofab btn twitter" href="https:/twitter.com/STM_ORG"><i class="sofa fab fa-twitter"></i></a>
                <a class="sofab btn google" href="https://www.instagram.com/servicetomankindorg/"><i
                        class="sofa fab fa-instagram"></i></a>
                <a class="sofab btn dribbble"
                    href="https://www.youtube.com/channel/UCbdtIhRfuRYZbAQvM76lBOQ?view_as=subscriber"><i
                        class="sofa fab fa-youtube"></i></a>
            </div>


        </div>

        <!--Contact-->
        <!-- <div class="contact-index">
                <h1>Wanna contact us</h1>
                <h2><a class="con-btn h-surprise" href="contact.html">Click Here.</a></h2>
                <text class="h-surprise">helo!!</text>
            </div> -->
        <!-- <hr class="featurette-divider"> -->

    </div><!-- /.container -->



    <!-- ******************** Footer Starts Here ******************* -->
    <?php include('footer.php') ?>


</main>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script> -->
<script src='js/boostrap-4.5.js'></script>
<script src='js/popper.js'></script>
<script src='js/tweenmax.js'></script>
<script src="main-js/main.js"></script>
<script>
var container = document.getElementById('container');
var graphMeasurement = document.getElementById('graph-measurement');

var allCircles = document.getElementsByTagName('circle');
var allLines = document.getElementsByTagName('line');

// console.log(topSVGNode)



var destArray = [0, 52, 28, 170, 105, 93, 44, 122, 179, 170, 220];


TweenMax.set(allCircles, {
    attr: {
        fill: '#954CE9',
        r: 5
    },
    transformOrigin: '50% 50%',
    scale: 0
})
TweenMax.set([allLines], {
    attr: {
        stroke: '#18B5DD'
    },
    drawSVG: '100% 100%',
    strokeWidth: 2
})
TweenMax.set([graphMeasurement], {
    attr: {
        stroke: '#18B5DD'
    },
    drawSVG: '100% 100%',
    strokeWidth: 1
})

TweenMax.set([allCircles, allLines], {
    y: '+=300'
})

TweenMax.set(graphMeasurement, {
    y: '+=280',
    alpha: 0.3
})
TweenMax.to(graphMeasurement, 3, {
    drawSVG: '0% 100%',
    delay: 1,
    ease: Power2.easeInOut
})
TweenMax.set('svg', {
    alpha: 1
})
for (var i = 0; i < allCircles.length; i++) {

    TweenMax.to(allCircles[i], 2, {
        attr: {
            cy: '-=' + destArray[i]
        },
        onUpdate: moveLines,
        onUpdateParams: [i],
        delay: i / 5,
        ease: Power4.easeInOut
    })
    if (allLines[i]) {

        TweenMax.to(allLines[i], 1, {
            drawSVG: '400',
            delay: i / 5,
            ease: Power4.easeInOut
        })
    }

    TweenMax.to(allCircles[i], 1, {
        scale: 1,
        delay: i / 5,
        ease: Power4.easeInOut
    })

}

function moveLines(i) {

    if (allLines[i]) {

        TweenMax.set(allLines[i], {
            attr: {
                x2: allCircles[i].getAttribute('cx'),
                y2: allCircles[i].getAttribute('cy')
            }
        })
        TweenMax.set(allLines[i], {
            attr: {
                x1: allCircles[i + 1].getAttribute('cx'),
                y1: allCircles[i + 1].getAttribute('cy')
            }
        })


    }
}
</script>

</body>

</html>