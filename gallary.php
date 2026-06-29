<?php
require('includes/functions.php');
include('header.php');

// Gallery sections — single source of truth (keeps markup DRY + accessible)
$gallery = [
    'Donations' => [
        'images/stm/DONATIONS/6.jpg', 'images/stm/DONATIONS/7.jpg',
        'images/stm/DONATIONS/8.jpg', 'images/stm/DONATIONS/3.jpg',
        'images/stm/DONATIONS/11.jpg', 'images/stm/DONATIONS/12.jpg',
        'images/stm/DONATIONS/13.jpg', 'images/stm/DONATIONS/15.jpeg',
    ],
    'Independence Day' => [
        'images/stm/INDEPENDENCE CELEBRATIONS/7.jpg', 'images/stm/INDEPENDENCE CELEBRATIONS/2.jpg',
        'images/stm/INDEPENDENCE CELEBRATIONS/3.jpg', 'images/stm/INDEPENDENCE CELEBRATIONS/4.jpg',
        'images/stm/INDEPENDENCE CELEBRATIONS/6.jpg',
    ],
    'Happy Moments' => [
        'images/stm/HAPPINESS/6.jpg', 'images/stm/HAPPINESS/9.jpg', 'images/stm/HAPPINESS/11.jpg',
    ],
];
?>

<main role="main">
    <section class="stm-gallery">
        <div class="container">
            <div class="stm-gallery-head">
                <h1>Photo <span>Gallery</span></h1>
                <p>Moments from our drives, celebrations and the smiles we get to be part of.</p>
            </div>

            <?php foreach ($gallery as $section => $images): ?>
                <div class="stm-gallery-section">
                    <h3 class="stm-gallery-title"><?php echo htmlspecialchars($section); ?></h3>
                    <div class="stm-gallery-grid">
                        <?php foreach ($images as $i => $img): ?>
                            <button type="button" class="stm-gallery-cell"
                                data-full="<?php echo htmlspecialchars($img); ?>"
                                aria-label="Open image <?php echo $i + 1; ?> from <?php echo htmlspecialchars($section); ?>">
                                <img src="<?php echo htmlspecialchars($img); ?>" loading="lazy"
                                    alt="<?php echo htmlspecialchars($section); ?> — STM activity photo <?php echo $i + 1; ?>">
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="stm-lightbox" id="stmLightbox" role="dialog" aria-modal="true" aria-label="Image preview" hidden>
        <button class="stm-lightbox-close" id="stmLightboxClose" aria-label="Close preview">&times;</button>
        <img src="" alt="Enlarged gallery image" id="stmLightboxImg">
    </div>

    <?php include('footer.php'); ?>
</main>

<style>
.stm-gallery{ font-family:'Inter',sans-serif; background:#f0f2f8; padding:130px 0 70px; }
.stm-gallery-head{ text-align:center; max-width:620px; margin:0 auto 40px; padding:0 16px; }
.stm-gallery-head h1{ font-size:2.2rem; font-weight:700; color:#2c3e50; margin:0 0 10px; }
.stm-gallery-head h1 span{ color:#0984e3; }
.stm-gallery-head p{ color:#636e72; font-size:1rem; margin:0; }

.stm-gallery-section{ max-width:1140px; margin:0 auto 44px; }
.stm-gallery-title{
    font-size:1.15rem; font-weight:700; color:#2c3e50; margin:0 0 18px; padding-left:14px;
    border-left:4px solid #0984e3; line-height:1.2;
}
.stm-gallery-grid{
    display:grid; grid-template-columns:repeat(auto-fill, minmax(210px, 1fr)); gap:16px;
}
.stm-gallery-cell{
    padding:0; border:none; background:#dfe6e9; border-radius:14px; overflow:hidden; cursor:pointer;
    aspect-ratio:4/3; box-shadow:0 2px 10px rgba(0,0,0,.06); position:relative; display:block;
}
.stm-gallery-cell img{
    width:100%; height:100%; object-fit:cover; display:block;
    transition:transform .35s ease;
}
.stm-gallery-cell::after{
    content:'\f00e'; font-family:'Font Awesome 6 Free'; font-weight:900; color:#fff; font-size:1.3rem;
    position:absolute; inset:0; display:flex; align-items:center; justify-content:center;
    background:rgba(9,132,227,.0); opacity:0; transition:background .3s, opacity .3s;
}
.stm-gallery-cell:hover img{ transform:scale(1.08); }
.stm-gallery-cell:hover::after{ background:rgba(20,33,61,.38); opacity:1; }
.stm-gallery-cell:focus-visible{ outline:3px solid #0984e3; outline-offset:2px; }

.stm-lightbox{
    position:fixed; inset:0; z-index:9999; background:rgba(15,23,42,.92);
    display:flex; align-items:center; justify-content:center; padding:30px;
}
.stm-lightbox[hidden]{ display:none; }
.stm-lightbox img{ max-width:92vw; max-height:88vh; border-radius:10px; box-shadow:0 10px 40px rgba(0,0,0,.5); }
.stm-lightbox-close{
    position:absolute; top:18px; right:26px; background:none; border:none; color:#fff;
    font-size:2.4rem; line-height:1; cursor:pointer; opacity:.85;
}
.stm-lightbox-close:hover{ opacity:1; }

@media (max-width:560px){
    .stm-gallery{ padding:110px 0 50px; }
    .stm-gallery-head h1{ font-size:1.7rem; }
    .stm-gallery-grid{ grid-template-columns:repeat(auto-fill, minmax(140px, 1fr)); gap:10px; }
}
</style>

<script>
(function () {
    var box = document.getElementById('stmLightbox');
    var img = document.getElementById('stmLightboxImg');
    var closeBtn = document.getElementById('stmLightboxClose');
    function open(src) { img.src = src; box.hidden = false; document.body.style.overflow = 'hidden'; }
    function close() { box.hidden = true; img.src = ''; document.body.style.overflow = ''; }
    document.querySelectorAll('.stm-gallery-cell').forEach(function (c) {
        c.addEventListener('click', function () { open(c.getAttribute('data-full')); });
    });
    closeBtn.addEventListener('click', close);
    box.addEventListener('click', function (e) { if (e.target === box) close(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !box.hidden) close(); });
})();
</script>

<script src="js/boostrap-4.5.js?v=1"></script>
<script src="main-js/main.js"></script>
</body>
</html>
