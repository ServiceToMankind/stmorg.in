<?php
include 'header.php';
?>

<main role="main">

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container" style="margin-top:150px; margin-bottom:50px">
            <div class="row">
                <!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> -->
                <div class="col-lg-4  flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Ft No. 25/24 </h5>
                            <p>
                                Bowrampet, 500043, Hyderabad,
                                Telangana
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>+91 7729817298</h5>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <p><strong>reach@stmorg.in</strong></p>
                            <p>Send us your query anytime! </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="form-area contact-form text-right" id="myForm"
                        action="https://stmindia.000webhostapp.com/mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your name'"
                                    class="common-input mb-20 form-control" required="" type="text">
                                <input name="mobile" placeholder="Enter your Number" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your number'"
                                    class="common-input mb-20 form-control" required="" type="text">
                                <input name="email" placeholder="Enter email address"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    class="common-input mb-20 form-control" required="" type="email">

                                <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control"
                                    required="" type="text">
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" rows="9" name="message"
                                    placeholder="Enter Messege" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="genric-btn primary btn" style="float: right;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->







    <!-- FOOTER , min show undali -->
    <?php include('footer.php') ?>
</main>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/jquery.barfiller.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

</html>