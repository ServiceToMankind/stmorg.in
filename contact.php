<?php
include 'header.php';
?>

<main role="main">

    <!-- Start contact-page Area -->
    <section class="stm-contact">
        <div class="container">

            <div class="stm-contact-head">
                <h1>Get in <span>Touch</span></h1>
                <p>Have a question, an idea, or want to volunteer? We'd love to hear from you.</p>
            </div>

            <div class="stm-contact-grid">

                <!-- Info card -->
                <aside class="stm-contact-info">
                    <h2>Contact Information</h2>
                    <p class="stm-info-sub">Reach out to us anytime — we usually respond within a day.</p>

                    <ul class="stm-info-list">
                        <li>
                            <span class="stm-info-ic"><i class="fas fa-map-marker-alt"></i></span>
                            <div>
                                <strong>Our Address</strong>
                                Ft No. 25/24, Bowrampet,<br>500043, Hyderabad, Telangana
                            </div>
                        </li>
                        <li>
                            <span class="stm-info-ic"><i class="fas fa-phone-alt"></i></span>
                            <div>
                                <strong>Call Us</strong>
                                <a href="tel:+917729817298">+91 77298 17298</a>
                            </div>
                        </li>
                        <li>
                            <span class="stm-info-ic"><i class="far fa-envelope"></i></span>
                            <div>
                                <strong>Email Us</strong>
                                <a href="mailto:reach@stmorg.in">reach@stmorg.in</a>
                            </div>
                        </li>
                    </ul>

                    <div class="stm-info-social">
                        <a href="https://facebook.com/stmorg.in" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/STM_ORG" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/servicetomankindorg/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCbdtIhRfuRYZbAQvM76lBOQ" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </aside>

                <!-- Form card -->
                <div class="stm-contact-formcard">
                    <form id="stmContactForm" action="mail.php" method="post">
                        <div class="stm-form-row">
                            <div class="stm-field">
                                <label for="c-name">Full Name</label>
                                <input id="c-name" name="name" type="text" placeholder="Your name" required>
                            </div>
                            <div class="stm-field">
                                <label for="c-mobile">Mobile</label>
                                <input id="c-mobile" name="mobile" type="text" placeholder="Your phone number">
                            </div>
                        </div>
                        <div class="stm-form-row">
                            <div class="stm-field">
                                <label for="c-email">Email Address</label>
                                <input id="c-email" name="email" type="email"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    placeholder="you@example.com" required>
                            </div>
                            <div class="stm-field">
                                <label for="c-subject">Subject</label>
                                <input id="c-subject" name="subject" type="text" placeholder="How can we help?" required>
                            </div>
                        </div>
                        <div class="stm-field">
                            <label for="c-message">Message</label>
                            <textarea id="c-message" name="message" rows="6" placeholder="Write your message…" required></textarea>
                        </div>

                        <div class="stm-form-foot">
                            <div class="stm-form-status" id="stmFormStatus" role="status" aria-live="polite"></div>
                            <button type="submit" class="stm-send-btn">
                                <i class="far fa-paper-plane"></i> Send Message
                            </button>
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

<style>
.stm-contact{
    font-family:'Inter',sans-serif; background:#f0f2f8;
    padding:130px 0 70px; min-height:70vh;
}
.stm-contact-head{ text-align:center; max-width:620px; margin:0 auto 38px; padding:0 16px; }
.stm-contact-head h1{ font-size:2.2rem; font-weight:700; color:#2c3e50; margin:0 0 10px; }
.stm-contact-head h1 span{ color:#0984e3; }
.stm-contact-head p{ color:#636e72; font-size:1rem; margin:0; }

.stm-contact-grid{
    display:grid; grid-template-columns:0.9fr 1.1fr; gap:24px;
    max-width:1040px; margin:0 auto; align-items:stretch;
}

/* Info card */
.stm-contact-info{
    background:linear-gradient(150deg,#2c3e50 0%,#0984e3 100%);
    color:#fff; border-radius:18px; padding:34px 30px;
    box-shadow:0 10px 30px rgba(9,132,227,.18); position:relative; overflow:hidden;
}
.stm-contact-info::after{
    content:''; position:absolute; width:220px; height:220px; border-radius:50%;
    background:rgba(255,255,255,.07); right:-70px; bottom:-70px;
}
.stm-contact-info h2{ font-size:1.3rem; font-weight:700; margin:0 0 6px; position:relative; }
.stm-info-sub{ font-size:.9rem; opacity:.8; margin:0 0 26px; position:relative; }
.stm-info-list{ list-style:none; padding:0; margin:0 0 26px; position:relative; }
.stm-info-list li{ display:flex; gap:14px; align-items:flex-start; margin-bottom:20px; }
.stm-info-ic{
    flex-shrink:0; width:42px; height:42px; border-radius:11px; background:rgba(255,255,255,.16);
    display:flex; align-items:center; justify-content:center; font-size:1rem;
}
.stm-info-list strong{ display:block; font-size:.78rem; text-transform:uppercase; letter-spacing:.05em; opacity:.7; margin-bottom:3px; font-weight:600; }
.stm-info-list div{ font-size:.95rem; line-height:1.5; }
.stm-info-list a{ color:#fff; text-decoration:none; border-bottom:1px solid rgba(255,255,255,.35); }
.stm-info-list a:hover{ border-color:#fff; }
.stm-info-social{ position:relative; display:flex; gap:12px; }
.stm-info-social a{
    width:40px; height:40px; border-radius:10px; background:rgba(255,255,255,.15); color:#fff;
    display:flex; align-items:center; justify-content:center; text-decoration:none; transition:background .2s, transform .2s;
}
.stm-info-social a:hover{ background:rgba(255,255,255,.32); transform:translateY(-2px); }

/* Form card */
.stm-contact-formcard{
    background:#fff; border-radius:18px; padding:34px 32px;
    box-shadow:0 2px 18px rgba(0,0,0,.06);
}
.stm-form-row{ display:grid; grid-template-columns:1fr 1fr; gap:16px; }
.stm-field{ margin-bottom:16px; display:flex; flex-direction:column; }
.stm-field label{ font-size:.8rem; font-weight:600; color:#2c3e50; margin-bottom:6px; }
.stm-field input, .stm-field textarea{
    width:100%; border:1px solid #dfe6e9; border-radius:10px; padding:11px 14px;
    font-size:.92rem; font-family:inherit; color:#2c3e50; background:#f8fafc;
    transition:border-color .2s, box-shadow .2s, background .2s; outline:none;
}
.stm-field textarea{ resize:vertical; min-height:120px; }
.stm-field input:focus, .stm-field textarea:focus{
    border-color:#0984e3; background:#fff; box-shadow:0 0 0 3px rgba(9,132,227,.12);
}
.stm-field input::placeholder, .stm-field textarea::placeholder{ color:#b2bec3; }
.stm-form-foot{ display:flex; align-items:center; justify-content:space-between; gap:14px; flex-wrap:wrap; margin-top:6px; }
.stm-form-status{ font-size:.88rem; font-weight:500; }
.stm-form-status.ok{ color:#15803d; }
.stm-form-status.err{ color:#c0392b; }
.stm-send-btn{
    border:none; border-radius:10px; padding:12px 26px; cursor:pointer;
    background:linear-gradient(135deg,#0984e3,#8e44ad); color:#fff; font-size:.92rem; font-weight:600;
    font-family:inherit; transition:transform .2s, box-shadow .2s; margin-left:auto;
}
.stm-send-btn:hover{ transform:translateY(-2px); box-shadow:0 8px 20px rgba(9,132,227,.32); }
.stm-send-btn:disabled{ opacity:.6; cursor:not-allowed; transform:none; box-shadow:none; }

@media (max-width:880px){
    .stm-contact-grid{ grid-template-columns:1fr; }
}
@media (max-width:520px){
    .stm-contact{ padding:110px 0 50px; }
    .stm-contact-head h1{ font-size:1.7rem; }
    .stm-form-row{ grid-template-columns:1fr; gap:0; }
    .stm-contact-info, .stm-contact-formcard{ padding:26px 20px; }
    .stm-send-btn{ width:100%; justify-content:center; }
}
</style>

<script>
(function () {
    var form = document.getElementById('stmContactForm');
    var status = document.getElementById('stmFormStatus');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var btn = form.querySelector('.stm-send-btn');
        status.className = 'stm-form-status';
        status.textContent = 'Sending…';
        btn.disabled = true;
        fetch(form.action, { method: 'POST', body: new FormData(form) })
            .then(function (r) { return r.text(); })
            .then(function (t) {
                if (t.toLowerCase().indexOf('sent') !== -1) {
                    status.className = 'stm-form-status ok';
                    status.textContent = '✓ Thanks! Your message has been sent.';
                    form.reset();
                } else {
                    status.className = 'stm-form-status err';
                    status.textContent = 'Sorry, something went wrong. Please email reach@stmorg.in.';
                }
            })
            .catch(function () {
                status.className = 'stm-form-status err';
                status.textContent = 'Network error. Please email reach@stmorg.in.';
            })
            .finally(function () { btn.disabled = false; });
    });
})();
</script>
</html>
