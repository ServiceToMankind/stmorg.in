<?php
// include the header
include 'header.php';

// Public legal / compliance documents hosted under /legal
$stm_legal_docs = [
    [
        'title' => 'Certificate of Registration',
        'desc'  => 'Society registered under the Telangana Societies Registration Act, 2001.',
        'file'  => 'legal-docs/registration-certificate.pdf',
        'icon'  => 'fa-stamp',
    ],
    [
        'title' => 'Registration Certificate — Attachment',
        'desc'  => 'Annexure to the Certificate of Registration.',
        'file'  => 'legal-docs/registration-certificate-attachment.pdf',
        'icon'  => 'fa-paperclip',
    ],
    [
        'title' => 'Memorandum of Association (MOA)',
        'desc'  => 'Objectives, aims and founding members of the Society.',
        'file'  => 'legal-docs/memorandum-of-association.pdf',
        'icon'  => 'fa-file-contract',
    ],
    [
        'title' => 'Byelaws',
        'desc'  => 'Rules and regulations governing the functioning of the Society.',
        'file'  => 'legal-docs/byelaws.pdf',
        'icon'  => 'fa-gavel',
    ],
    [
        'title' => '12A Registration',
        'desc'  => 'Income-tax registration under Section 12A (URN ACAAS2188NE20241).',
        'file'  => 'legal-docs/12a-certificate.pdf',
        'icon'  => 'fa-landmark',
    ],
    [
        'title' => '80G Approval',
        'desc'  => 'Donations are eligible for tax deduction under Section 80G (URN ACAAS2188NF20241).',
        'file'  => 'legal-docs/80g-certificate.pdf',
        'icon'  => 'fa-hand-holding-heart',
    ],
    [
        'title' => 'NGO Darpan (NITI Aayog)',
        'desc'  => 'Registration on the Government of India NGO Darpan portal.',
        'file'  => 'legal-docs/ngo-darpan.pdf',
        'icon'  => 'fa-id-card',
    ],
];
?>

<main class="stm-legal-main">
    <div class="stm-legal-wrap">

        <header class="stm-legal-head">
            <span class="stm-legal-eyebrow">Transparency &amp; Trust</span>
            <h1>Legal &amp; Compliance</h1>
            <p>Service to Mankind (Service to Mankind Welfare Association) is a registered, non-profit
                student-led society. Our statutory registrations and compliance documents are published
                here in the interest of full transparency with our donors, volunteers and the public.</p>
        </header>

        <!-- Registration snapshot -->
        <section class="stm-legal-facts" aria-label="Registration details">
            <div class="stm-fact">
                <span class="stm-fact-label">Legal Name</span>
                <span class="stm-fact-value">Service to Mankind Welfare Association</span>
            </div>
            <div class="stm-fact">
                <span class="stm-fact-label">Registered Under</span>
                <span class="stm-fact-value">Telangana Societies Registration Act, 2001</span>
            </div>
            <div class="stm-fact">
                <span class="stm-fact-label">PAN</span>
                <span class="stm-fact-value">ACAAS2188N</span>
            </div>
            <div class="stm-fact">
                <span class="stm-fact-label">12A URN</span>
                <span class="stm-fact-value">ACAAS2188NE20241</span>
            </div>
            <div class="stm-fact">
                <span class="stm-fact-label">80G URN</span>
                <span class="stm-fact-value">ACAAS2188NF20241</span>
            </div>
            <div class="stm-fact">
                <span class="stm-fact-label">Registered Office</span>
                <span class="stm-fact-value">Flat No. 25/24, Bowrampet, Hyderabad, Telangana &ndash; 500043</span>
            </div>
        </section>

        <!-- 80G highlight -->
        <div class="stm-legal-80g" role="note">
            <i class="fas fa-circle-info"></i>
            <p><strong>Donations to STM are eligible for tax exemption under Section 80G</strong> of the
                Income Tax Act, 1961. Please retain your donation receipt to claim the deduction.</p>
        </div>

        <!-- Document grid -->
        <h2 class="stm-legal-subhead">Our Documents</h2>
        <div class="stm-legal-grid">
            <?php foreach ($stm_legal_docs as $doc): ?>
            <a class="stm-doc-card" href="<?php echo htmlspecialchars($doc['file']); ?>" target="_blank"
                rel="noopener">
                <span class="stm-doc-icon"><i class="fas <?php echo $doc['icon']; ?>"></i></span>
                <span class="stm-doc-body">
                    <span class="stm-doc-title"><?php echo htmlspecialchars($doc['title']); ?></span>
                    <span class="stm-doc-desc"><?php echo htmlspecialchars($doc['desc']); ?></span>
                </span>
                <span class="stm-doc-action"><i class="fas fa-arrow-up-right-from-square"></i> View</span>
            </a>
            <?php endforeach; ?>
        </div>

        <p class="stm-legal-foot-note">For any clarification regarding our registration or compliance,
            write to us at <a href="mailto:reach@stmorg.in">reach@stmorg.in</a>.</p>

    </div>

    <?php
    include 'footer.php';
    ?>
</main>

<style>
/* ===== Legal & Compliance page (scoped) ===== */
.stm-legal-main{ padding:120px 0 60px; background:#f8fafc; font-family:'Inter',sans-serif; }
.stm-legal-wrap{ max-width:960px; width:100%; margin:0 auto; padding:0 22px; box-sizing:border-box; }

.stm-legal-head{ text-align:center; margin-bottom:34px; }
.stm-legal-eyebrow{
    display:inline-block; text-transform:uppercase; letter-spacing:.08em; font-size:.75rem;
    font-weight:700; color:#0984e3; background:#e8f3fe; padding:5px 14px; border-radius:999px;
}
.stm-legal-head h1{ margin:16px 0 12px; color:#2c3e50; font-size:2.1rem; font-weight:700; }
.stm-legal-head p{ color:#5a6672; line-height:1.7; max-width:680px; margin:0 auto; }

/* Registration snapshot */
.stm-legal-facts{
    display:grid; grid-template-columns:repeat(3,1fr); gap:14px; margin:0 0 26px;
}
.stm-fact{
    background:#fff; border:1px solid #eef0f4; border-radius:12px; padding:16px 18px;
    display:flex; flex-direction:column; gap:6px; box-shadow:0 2px 12px rgba(0,0,0,.04);
}
.stm-fact-label{
    font-size:.72rem; text-transform:uppercase; letter-spacing:.05em; color:#8a94a0; font-weight:600;
}
.stm-fact-value{ color:#2c3e50; font-weight:600; font-size:.95rem; line-height:1.4; word-break:break-word; }

/* 80G highlight */
.stm-legal-80g{
    display:flex; align-items:flex-start; gap:12px;
    background:#ecfdf5; border:1px solid #a7f3d0; border-radius:14px; padding:16px 18px; margin:0 0 36px;
}
.stm-legal-80g i{ color:#059669; font-size:1.15rem; margin-top:2px; }
.stm-legal-80g p{ margin:0; color:#065f46; line-height:1.6; font-size:.95rem; }

/* Document grid */
.stm-legal-subhead{ color:#2c3e50; font-size:1.35rem; font-weight:700; margin:0 0 18px; }
.stm-legal-grid{ display:grid; grid-template-columns:repeat(2,1fr); gap:16px; }
.stm-doc-card{
    display:flex; align-items:center; gap:16px; text-decoration:none;
    background:#fff; border:1px solid #eef0f4; border-radius:14px; padding:18px 20px;
    box-shadow:0 2px 12px rgba(0,0,0,.04); transition:transform .2s, box-shadow .2s, border-color .2s;
}
.stm-doc-card:hover{
    transform:translateY(-3px); border-color:#cfe4fb; box-shadow:0 10px 24px rgba(9,132,227,.14);
}
.stm-doc-icon{
    flex:0 0 auto; width:48px; height:48px; border-radius:12px;
    display:flex; align-items:center; justify-content:center; font-size:1.2rem; color:#fff;
    background:linear-gradient(135deg,#0984e3,#8e44ad);
}
.stm-doc-body{ display:flex; flex-direction:column; gap:3px; flex:1 1 auto; min-width:0; }
.stm-doc-title{ color:#2c3e50; font-weight:700; font-size:1rem; }
.stm-doc-desc{ color:#6b7684; font-size:.85rem; line-height:1.45; }
.stm-doc-action{
    flex:0 0 auto; color:#0984e3; font-size:.82rem; font-weight:600; white-space:nowrap;
}
.stm-doc-action i{ font-size:.75rem; margin-right:4px; }

.stm-legal-foot-note{ margin:34px 0 0; text-align:center; color:#6b7684; font-size:.92rem; }
.stm-legal-foot-note a{ color:#0984e3; text-decoration:none; }

@media (max-width:820px){
    .stm-legal-facts{ grid-template-columns:repeat(2,1fr); }
}
@media (max-width:600px){
    .stm-legal-main{ padding:100px 0 50px; }
    .stm-legal-head h1{ font-size:1.7rem; }
    .stm-legal-facts{ grid-template-columns:1fr; }
    .stm-legal-grid{ grid-template-columns:1fr; }
    .stm-doc-action span{ display:none; }
}
</style>

</body>

</html>
