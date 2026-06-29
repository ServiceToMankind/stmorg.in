<div class="footer-ablove">
    <div class="container">
        <div class="row">
            <p class="foot-p">Love All , Serve All !
                <a href="donate" class="btn btn-default">Donate Now</a>
            </p>
        </div>
    </div>
</div>
<footer class="container-fluid footer-cont">
    <div class="container">
        <div class="footer-top row">
            <div class="col-md-4 foot-logo">
                <h2>Service To Mankind</h2>
            </div>
            <div class="col-md-8 foot-addr">
                <p>At STM, we believe in the power of student-led action to make a positive impact in our
                    communities. Our unwavering dedication to serving those in need has driven us to push beyond
                    our limits and strive for excellence in all that we do. With a shared passion for creating a
                    better world, we work tirelessly to bring hope and support to those who need it most. Join
                    us on this incredible journey and help us make a difference, one step at a time.</p>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Ft No. 25/24, Bowrampet, 500043, Hyderabad,
                        Telangana
                    </li>
                    <li><i class="fas fa-mobile-alt"></i> +91 7729817298 </li>
                    <li><i class="far fa-envelope"></i> reach@stmorg.in </li>
                </ul>
            </div>
        </div>
        <div class="foot-botom row">
            <div class="col-md-4 col-sm-6">
                <div class="fotter-coo">
                    <h5>IMPORTANT LINKS</h5>
                    <ul>
                        <li><a href='index#aboutus'><i class="fas fa-caret-right"></i> ABOUT US</a></li>
                        <li><a href='donate'><i class="fas fa-caret-right"></i> DONATE</a></li>
                        <li><a href='contact'><i class="fas fa-caret-right"></i> CONTACT US</a></li>
                    </ul>
                </div>
                <div class="fotter-coo">
                    <h5>POLICIES</h5>
                    <ul>
                        <li><a href="terms-of-service"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                        <li><a href="privacy-policy"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                        <li><a href="cancellation"><i class="fas fa-caret-right"></i> Cancellation and Refund</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="fotter-coo">
                    <h5>LATEST LOGS</h5>
                    <ul>
                        <li><a href="logs"><i class="fas fa-caret-right"></i> Payment Logs</a></li>
                        <li><a href="activities"><i class="fas fa-caret-right"></i> Activities</a></li>
                        <li><a href="spends"><i class="fas fa-caret-right"></i> Spends</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="fotter-coo">
                    <h5>PHOTO GALLERY</h5>
                    <div class="gallery-row row">
                        <div class="col-4 gall-col">
                            <a href="gallary"><img src="images/pics/f1.jpeg" alt="STM service activity"></a>
                        </div>
                        <div class="col-4 gall-col">
                            <a href="gallary"><img src="images/pics/f2.jpeg" alt="STM volunteers distributing aid"></a>
                        </div>
                        <div class="col-4 gall-col">
                            <a href="gallary"><img src="images/pics/f6.jpeg" alt="STM community outreach"></a>
                        </div>
                    </div>
                    <a href="gallary" class="gall-viewall">View full gallery <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copy">
    <div class="container">
        <a href="https://www.stmorg.in/">&copy; <?php echo date('Y'); ?> All Rights Reserved | Designed and Developed by
            STM</a>

        <span>
            <a href="https://www.youtube.com/channel/UCbdtIhRfuRYZbAQvM76lBOQ" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/servicetomankindorg/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/STM_ORG" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://facebook.com/stmorg.in" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>

</div>

<style>
/* --- Footer polish (scoped, complements banner.css) --- */
.footer-ablove .foot-p .btn-default{
    display:inline-block; margin-left:14px; padding:8px 22px; border:none; border-radius:8px;
    background:linear-gradient(135deg,#0984e3,#8e44ad); color:#fff !important; font-weight:600;
    text-decoration:none; transition:transform .2s, box-shadow .2s;
}
.footer-ablove .foot-p .btn-default:hover{ transform:translateY(-2px); box-shadow:0 6px 18px rgba(9,132,227,.35); color:#fff; }
.footer-cont .gallery-row{ margin:0 -4px; }
.footer-cont .gall-col{ padding:4px; }
.footer-cont .gall-col img{
    width:100%; aspect-ratio:1/1; object-fit:cover; border-radius:8px; display:block;
    transition:transform .25s, filter .25s; filter:brightness(.92);
}
.footer-cont .gall-col a:hover img{ transform:scale(1.04); filter:brightness(1); }
.footer-cont .gall-viewall{ display:inline-block; margin-top:12px; color:#4aa3ff; font-size:.85rem; text-decoration:none; }
.footer-cont .gall-viewall:hover{ color:#fff; }
.footer-cont .gall-viewall i{ font-size:.72rem; margin-left:4px; transition:margin-left .2s; }
.footer-cont .gall-viewall:hover i{ margin-left:8px; }
.copy span a{ transition:color .2s, transform .2s; display:inline-block; }
.copy span a:hover{ transform:translateY(-2px); }
@media (max-width:767px){
    .footer-cont .foot-botom .col-md-4{ margin-bottom:26px; }
    .footer-cont .foot-addr ul{ float:none; }
}
</style>
