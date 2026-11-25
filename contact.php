<?php
$title = 'Contact Us — Quotes, Samples & Wholesale';
$page = 'contact';
$description = 'Contact Teddy Tales for wholesale quotes, sample packs and bulk orders. Rithala, New Delhi — call +91 9811353012 or WhatsApp us.';
include __DIR__ . '/includes/head.php';

$productParam = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : '';
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
?>
<body class="font-body antialiased bg-white">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">
    <!-- ================= PAGE HERO ================= -->
    <section class="relative overflow-hidden bg-brand-dark text-white">
        <img src="assets/images/luxury/gift-box.jpg" alt="A plush bear presented in a gift box"
             class="absolute inset-0 w-full h-full object-cover opacity-35" aria-hidden="true">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/95 via-brand-dark/85 to-brand-dark/60" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-grid-light opacity-10" aria-hidden="true"></div>

        <div class="relative wrap text-center pt-40 lg:pt-44 xl:pt-56 pb-16">
            <div class="flex items-center justify-center gap-2 text-xs font-semibold uppercase tracking-widest text-white/60">
                <a href="index.php" data-nav-link class="hover:text-accent transition-colors">Home</a>
                <span class="text-accent">/</span>
                <span class="text-accent">Contact</span>
            </div>
            <h1 class="hero-anim mt-4 font-display font-extrabold text-ink text-5xl md:text-6xl leading-[1.05] text-white" style="--d:.1s">
                Let’s make something <span class="text-gradient">wonderful</span>
            </h1>
            <p class="hero-anim mt-5 max-w-xl mx-auto text-white/75 text-lg" style="--d:.22s">
                Wholesale quotes, sample packs, a custom design or a visit to the atelier — tell us what you have in mind.
            </p>
        </div>
    </section>

    <!-- ================= CONTACT ================= -->
    <section class="relative py-20 bg-white overflow-hidden">
        <div class="absolute -top-20 -left-20 w-80 h-80 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="wrap grid lg:grid-cols-5 gap-12">

            <!-- info column -->
            <div class="lg:col-span-2 space-y-6">
                <h2 class="font-display font-extrabold text-3xl text-ink reveal-up">Write to us <span class="text-accent-dark">directly</span></h2>

                <?php
                $contactCards = [
                    ['icon' => 'pin',   'title' => 'Head office', 'lines' => [SITE_ADDRESS]],
                    ['icon' => 'phone', 'title' => 'Call / WhatsApp', 'lines' => [SITE_PHONE]],
                    ['icon' => 'mail',  'title' => 'Email', 'lines' => [SITE_EMAIL]],
                    ['icon' => 'clock', 'title' => 'Working hours', 'lines' => [SITE_HOURS]],
                ];
                foreach ($contactCards as $i => $c): ?>
                    <div class="flex gap-5 contact-card rounded-3xl bg-white border border-brand/10 p-6 reveal-up" style="--d:.<?= $i + 1 ?>s">
                        <span class="contact-icon grid place-items-center w-14 h-14 shrink-0 rounded-2xl bg-ice text-brand p-3"><?php $icon = $c['icon']; include __DIR__ . '/includes/icon.php'; ?></span>
                        <div>
                            <h3 class="font-display font-bold text-lg text-ink"><?= $c['title'] ?></h3>
                            <p class="mt-1 text-sm text-bodytext leading-relaxed"><?= nl2br(implode("\n", $c['lines'])) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <a href="<?= 'https://wa.me/' . SITE_WHATSAPP ?>" target="_blank" rel="noopener"
                   class="btn-shine inline-flex items-center justify-center gap-2 w-full bg-accent text-white px-6 py-4 rounded-full font-semibold hover:bg-accent-dark transition-colors shadow-lg shadow-accent/25">
                    Chat on WhatsApp →
                </a>

                <div class="rounded-[2rem] overflow-hidden border border-brand/10 shadow-sm reveal-up">
                    <iframe title="Teddy Tales location — Rithala, New Delhi"
                            src="https://www.google.com/maps?q=Rithala,%20New%20Delhi&output=embed"
                            class="w-full h-64" style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- form / success column -->
            <div class="lg:col-span-3">
                <?php if ($submitted): ?>
                    <!-- ---- Success state ---- -->
                    <div class="bg-white rounded-[2.5rem] shadow-xl border border-brand/10 overflow-hidden reveal-zoom in-view">
                        <div class="bg-gradient-to-br from-brand via-brand-dark to-brand-light px-10 py-12 text-center">
                            <div class="mx-auto w-20 h-20 rounded-full bg-accent grid place-items-center">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <h2 class="mt-5 font-display font-extrabold text-white text-3xl">Message received!</h2>
                            <p class="mt-2 text-white/70">We’ll get back to you within one business day.</p>
                        </div>
                        <div class="p-10">
                            <dl class="space-y-4 text-sm">
                                <?php
                                $thanks = [
                                    ['Name', 'name'], ['Company', 'company'], ['Email', 'email'],
                                    ['Product of interest', 'product'], ['Message', 'message'],
                                ];
                                foreach ($thanks as $row): ?>
                                    <div class="flex gap-4 border-b border-brand/10 pb-3">
                                        <dt class="w-40 shrink-0 font-semibold text-muted"><?= $row[0] ?></dt>
                                        <dd class="text-ink"><?= isset($_POST[$row[1]]) ? htmlspecialchars($_POST[$row[1]]) : '—' ?></dd>
                                    </div>
                                <?php endforeach; ?>
                            </dl>
                            <a href="index.php" data-nav-link class="btn-shine mt-8 inline-flex bg-brand text-white px-8 py-3.5 rounded-full font-semibold hover:bg-brand-light transition-colors">
                                Back to home →
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- ---- Form ---- -->
                    <form id="contact-form" method="post" action="contact.php" class="bg-white rounded-[2.5rem] shadow-xl border border-brand/10 p-8 md:p-12 reveal-up" novalidate>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="text-sm font-semibold text-ink mb-2 block">Full name *</label>
                                <input id="name" name="name" required class="field-input" placeholder="Your name">
                            </div>
                            <div>
                                <label for="company" class="text-sm font-semibold text-ink mb-2 block">Company / shop</label>
                                <input id="company" name="company" class="field-input" placeholder="Shop or brand name">
                            </div>
                            <div>
                                <label for="email" class="text-sm font-semibold text-ink mb-2 block">Email *</label>
                                <input id="email" name="email" type="email" required class="field-input" placeholder="you@example.com">
                            </div>
                            <div>
                                <label for="phone" class="text-sm font-semibold text-ink mb-2 block">Phone / WhatsApp</label>
                                <input id="phone" name="phone" type="tel" class="field-input" placeholder="+91 …">
                            </div>
                            <div class="md:col-span-2">
                                <label for="product" class="text-sm font-semibold text-ink mb-2 block">Product of interest</label>
                                <select id="product" name="product" class="field-input appearance-none">
                                    <option value="General enquiry">General enquiry</option>
                                    <?php foreach ($categories as $cat): ?>
                                        <option value="<?= htmlspecialchars($cat['label']) ?>" <?= $productParam === $cat['label'] ? 'selected' : '' ?>><?= $cat['label'] ?></option>
                                    <?php endforeach; ?>
                                    <option value="Custom design / bulk order">Custom design / bulk order</option>
                                    <option value="Something else">Something else</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label for="message" class="text-sm font-semibold text-ink mb-2 block">Tell us about the order *</label>
                                <textarea id="message" name="message" required rows="5" class="field-input resize-none"
                                          placeholder="Quantities, sizes, timelines, fabric preferences..."><?= $productParam ? 'Hi! I’m interested in: ' . $productParam . '.' : '' ?></textarea>
                            </div>
                        </div>
                        <button type="submit" data-nav-link class="btn-shine mt-8 w-full md:w-auto inline-flex items-center justify-center gap-3 bg-brand text-white px-10 py-4 rounded-full font-semibold text-sm hover:bg-brand-light transition-colors shadow-xl shadow-brand/25">
                            Send enquiry
                            <span class="grid place-items-center w-7 h-7 rounded-full bg-accent text-white">→</span>
                        </button>
                        <p class="mt-4 text-xs text-muted">We usually reply within one business day. You can also call us directly during working hours.</p>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section class="relative py-20 bg-mist overflow-hidden">
        <span class="ghost-word absolute top-0 right-0 hidden lg:block" aria-hidden="true">FAQ</span>
        <div class="absolute -bottom-24 -left-24 w-80 h-80 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="max-w-3xl mx-auto px-5 lg:px-8">
            <div class="text-center">
                <p class="sec-tag text-accent justify-center">Good to know</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-4xl md:text-5xl leading-tight reveal-up">A few quick answers</h2>
            </div>

            <div class="mt-12 space-y-4 stagger">
                <?php
                $faqs = [
                    ['q' => 'What is the minimum order quantity?', 'a' => 'We work with shops, labels and exporters at wholesale volumes, with flexible minimums on most ranges. Tell us your quantities and we’ll confirm pricing.'],
                    ['q' => 'Can I see a sample before ordering?', 'a' => 'Of course. We can courier physical samples of plush and fabric, or share detailed photographs and specifications first for a quick comparison.'],
                    ['q' => 'Are the toys safety certified?', 'a' => 'Yes — our toys are made to conform to BIS toy-safety requirements (IS 9873), using hypoallergenic, child-safe materials that are checked on every batch.'],
                    ['q' => 'Do you create custom designs?', 'a' => 'We love a bespoke brief. Share a sketch, photo or idea and we’ll work with you on plush shapes, sizes, fabrics and finishing details.'],
                    ['q' => 'Do you supply fabrics to other makers?', 'a' => 'Yes — polyboa, super-soft, nylex, velvet and more are supplied by the roll, in bulk, with custom cutting available.'],
                ];
                foreach ($faqs as $i => $f): ?>
                    <details class="faq bg-white rounded-2xl overflow-hidden shadow-sm group open:shadow-lg transition-shadow border border-brand/10 <?= $i === 0 ? 'open' : '' ?>" style="--i: <?= $i ?>">
                        <summary class="flex items-center justify-between gap-4 cursor-pointer px-6 py-5 font-display font-bold text-ink list-none hover:text-brand transition-colors">
                            <?= $f['q'] ?>
                            <span class="faq-chevron shrink-0 grid place-items-center w-8 h-8 rounded-full bg-ice group-open:bg-accent group-open:rotate-45 transition-all duration-300 text-sm">+</span>
                        </summary>
                        <p class="px-6 pb-5 text-sm text-bodytext leading-relaxed"><?= $f['a'] ?></p>
                    </details>
                <?php endforeach; ?>
            </div>

            <!-- FAQ structured data for rich results -->
            <script type="application/ld+json">
            <?php
            $faqSchema = [
                '@context'   => 'https://schema.org',
                '@type'      => 'FAQPage',
                'mainEntity' => array_map(function ($f) {
                    return [
                        '@type'          => 'Question',
                        'name'           => $f['q'],
                        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
                    ];
                }, $faqs),
            ];
            echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            ?>
            </script>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>