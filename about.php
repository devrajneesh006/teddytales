<?php
$title = 'About Us — Soft Toys & Fabrics Manufacturer in Delhi';
$page = 'about';
$description = 'Teddy Tales — established 2010 in Rithala, New Delhi. A boutique maker of certified soft toys, signature teddy bears and luxurious toy fabrics.';
include __DIR__ . '/includes/head.php';
?>
<body class="font-body antialiased bg-white">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">

    <!-- ================= PAGE HERO ================= -->
    <section class="relative overflow-hidden bg-brand-dark text-white">
        <img src="assets/images/luxury/about-atelier.jpg" alt="Skilled hands at work in the Teddy Tales atelier"
             class="absolute inset-0 w-full h-full object-cover opacity-35" aria-hidden="true">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/95 via-brand-dark/85 to-brand-dark/60" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-grid-light opacity-10" aria-hidden="true"></div>

        <div class="relative wrap grid lg:grid-cols-2 gap-12 items-center pt-40 lg:pt-44 xl:pt-56 pb-16 lg:pb-20">
            <div>
                <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-white/60">
                    <a href="index.php" data-nav-link class="hover:text-accent transition-colors">Home</a>
                    <span class="text-accent">/</span>
                    <span class="text-accent">About</span>
                </div>
                <h1 class="hero-anim mt-4 font-display font-extrabold text-5xl md:text-6xl leading-[1.05]" style="--d:.1s">
                    The hands <span class="text-gradient">behind the plush</span>
                </h1>
                <p class="hero-anim mt-6 max-w-lg text-white/75 text-lg leading-relaxed" style="--d:.22s">
                    Established in <?= SITE_EST ?>, <?= SITE_FULL ?> is a boutique maker of soft toys in
                    <strong class="text-white">Delhi, India</strong> — crafting teddies, unicorns, character plush and the fabrics that make them.
                </p>
                <div class="hero-anim mt-9 flex flex-wrap items-center gap-5" style="--d:.34s">
                    <div class="flex -space-x-3">
                        <?php foreach (['R', 'F', '16', '+'] as $m): ?>
                            <span class="avatar w-12 h-12 rounded-full border-4 border-brand-dark grid place-items-center font-bold text-white"><?= $m ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <p class="font-semibold">Est. <?= SITE_EST ?> · Rithala, New Delhi</p>
                        <p class="text-xs text-white/60">Manufacturer · Supplier · Wholesale</p>
                    </div>
                </div>
            </div>

            <div class="relative flex justify-center lg:justify-end hero-anim" style="--d:.2s">
                <div class="relative w-72 sm:w-96">
                    <div class="rounded-[2.5rem] overflow-hidden border border-white/20 shadow-2xl">
                        <img src="assets/images/luxury/teddy-floral.jpg" alt="A soft brown teddy bear at rest" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-8 -left-6 bg-white rounded-2xl px-6 py-4 shadow-xl float-badge">
                        <p class="font-display font-bold text-3xl text-brand">16<span class="text-accent text-xl">+</span></p>
                        <p class="text-[11px] uppercase tracking-widest text-bodytext">years of craft</p>
                    </div>
                    <div class="absolute -top-6 right-2 bg-accent text-brand-dark rounded-2xl px-5 py-3 shadow-xl float-badge float-badge-delay">
                        <p class="font-display font-bold text-2xl text-brand-dark">BIS</p>
                        <p class="text-[11px] uppercase tracking-widest text-brand-dark/75">certified batches</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STORY / VALUES ================= -->
    <section class="relative py-24 bg-white overflow-hidden">
        <div class="wrap grid lg:grid-cols-2 gap-16 items-start">
            <div class="lg:sticky lg:top-40">
                <p class="sec-tag text-accent">The Teddy Tales story</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-4xl md:text-5xl leading-tight reveal-up">
                    Softness, safety &amp; <span class="text-gradient">a little wonder</span>
                </h2>
                <div class="mt-8 space-y-6 text-bodytext text-lg leading-relaxed reveal-up" style="--d:.1s">
                    <p>
                        Teddy Tales began with a simple idea: a soft toy should feel as good as it looks. Today we craft teddy bears,
                        unicorns, woodland friends and character plush — alongside polyboa, velvet and super-soft fabrics for fellow makers.
                    </p>
                    <p>
                        Our small, skilled team works end to end — designing, cutting, stitching, inspecting and packing. Because the same
                        hands see a toy from first sketch to final carton, nothing gets lost along the way.
                    </p>
                    <p>
                        Every piece is made with child-friendly, hypoallergenic fabrics, free from harmful chemicals, and inspected for
                        seam strength and finish. Safety, in our workshop, is a quiet everyday habit — not a last-minute check.
                    </p>
                </div>

                <div class="mt-10 space-y-6 stagger reveal-up" style="--d:.18s">
                    <?php foreach ($values as $i => $v): ?>
                        <div class="flex gap-5 feature-tile rounded-3xl p-6" style="--i: <?= $i ?>">
                            <span class="feature-icon w-14 h-14 rounded-2xl p-3.5"><?php $icon = $v['icon']; include __DIR__ . '/includes/icon.php'; ?></span>
                            <div>
                                <h3 class="ftitle font-display font-bold text-xl text-ink"><?= $v['title'] ?></h3>
                                <p class="mt-1.5 text-sm text-bodytext leading-relaxed"><?= $v['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="bg-brand text-white rounded-[2.5rem] p-10 md:p-12 shadow-2xl shadow-brand/25 relative overflow-hidden reveal-right">
                <div class="absolute inset-0 bg-grid-light opacity-25" aria-hidden="true"></div>
                <div class="absolute -top-16 -right-16 w-64 h-64 glow-orange blur-3xl" aria-hidden="true"></div>
                <div class="relative">
                    <p class="sec-tag text-accent">Assured</p>
                    <h3 class="mt-3 font-display font-bold text-2xl text-accent">Certifications that matter</h3>
                    <p class="mt-3 text-white/70 text-sm leading-relaxed">
                        Toys made for India’s children follow India’s standards — with safety checked on every single batch.
                    </p>
                    <ul class="mt-8 space-y-4">
                        <?php
                        $certs = [
                            ['BIS Certification', 'Toys conforming to Indian toy-safety requirements'],
                            ['IS 9873', 'Safety specifications for toys — physical & mechanical properties'],
                            ['Child-Safe Materials', 'Hypoallergenic fabrics, free of harmful chemicals'],
                            ['Rigorous QC', 'Every batch checked for stitching, finish and safety'],
                        ];
                        foreach ($certs as $c): ?>
                            <li class="flex items-center gap-4 bg-white/5 rounded-2xl px-5 py-4 hover:bg-white/10 transition-all duration-300 hover:translate-x-1.5">
                                <span class="grid place-items-center w-9 h-9 rounded-full bg-accent text-white font-bold text-sm p-2"><?php $icon = 'check'; include __DIR__ . '/includes/icon.php'; ?></span>
                                <div>
                                    <p class="font-semibold text-accent text-sm"><?= $c[0] ?></p>
                                    <p class="text-xs text-white/60"><?= $c[1] ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <img src="assets/images/bis-certified/b-6.webp" alt="BIS certification" class="mt-8 w-28 rounded-lg bg-white p-2" loading="lazy">

                    <p class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-accent">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-accent"></span>
                        </span>
                        Certification documents available on request →
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= COMPANY FACTS ================= -->
    <section class="relative py-24 bg-mist overflow-hidden">
        <div class="wrap">
            <div class="text-center max-w-2xl mx-auto">
                <p class="sec-tag text-accent justify-center">The particulars</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-4xl md:text-5xl leading-tight reveal-up">
                    Teddy Tales <span class="text-gradient">at a glance</span>
                </h2>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 stagger">
                <?php foreach ($companyFacts as $i => $f): ?>
                    <div class="feature-tile rounded-3xl p-7 text-center" style="--i: <?= $i ?>">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-muted"><?= $f['label'] ?></p>
                        <p class="mt-3 font-display font-bold text-xl text-ink"><?= $f['value'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= TIMELINE ================= -->
    <section class="relative py-24 bg-ice/60 overflow-hidden">
        <span class="ghost-word absolute bottom-0 right-0 hidden lg:block" aria-hidden="true">Since '10</span>
        <div class="max-w-4xl mx-auto px-5 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <p class="sec-tag text-accent justify-center">Milestones</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-4xl md:text-5xl leading-tight reveal-up">
                    A story unfolding <span class="text-gradient">since <?= SITE_EST ?></span>
                </h2>
            </div>

            <div class="relative mt-16">
                <div class="timeline-line" aria-hidden="true"></div>
                <div class="space-y-12 stagger">
                    <?php foreach ($timeline as $i => $t): ?>
                        <div class="timeline-item <?= $i % 2 ? 'md:pl-[calc(50%+44px)]' : 'md:pl-44' ?>" style="--i: <?= $i ?>">
                            <span class="timeline-dot"><span class="w-2 h-2 rounded-full bg-accent"></span></span>
                            <div class="bg-white rounded-3xl shadow-sm hover:shadow-lg transition-all duration-300 p-7 border border-brand/10">
                                <p class="font-display font-extrabold text-accent text-3xl"><?= $t['year'] ?></p>
                                <p class="mt-2 text-bodytext leading-relaxed"><?= $t['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STATS ================= -->
    <section class="relative py-24 bg-brand-dark text-white overflow-hidden">
        <div class="absolute inset-0 bg-grid-light opacity-25" aria-hidden="true"></div>
        <div class="absolute -top-24 left-1/4 w-80 h-80 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="relative wrap">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 text-center stagger">
                <?php foreach ($stats as $i => $s): ?>
                    <div style="--i: <?= $i ?>">
                        <p class="stat-num font-display font-extrabold text-accent text-5xl md:text-6xl">
                            <span class="counter" data-count="<?= $s['value'] ?>" data-suffix="<?= $s['suffix'] ?>">0<?= $s['suffix'] ?></span>
                        </p>
                        <p class="mt-3 text-sm uppercase tracking-[0.18em] text-white/70 font-medium"><?= $s['label'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="relative py-24 bg-white overflow-hidden">
        <div class="wrap">
            <div class="relative rounded-[2.5rem] bg-gradient-to-br from-brand via-brand-dark to-brand-light p-10 md:p-16 overflow-hidden shadow-2xl shadow-brand/25">
                <div class="absolute inset-0 bg-grid-light opacity-25" aria-hidden="true"></div>
                <div class="absolute -top-20 right-8 w-72 h-72 glow-orange blur-3xl" aria-hidden="true"></div>
                <div class="relative grid md:grid-cols-[1fr_auto] gap-8 items-center reveal-up">
                    <div>
                        <h2 class="font-display font-extrabold text-white text-3xl md:text-4xl leading-tight">
                            Visit the atelier in Rithala, New Delhi
                        </h2>
                        <p class="mt-3 text-white/75">Feel the fabrics and see the stitching for yourself — samples and bulk pricing available on the spot.</p>
                    </div>
                    <a href="contact.php" data-nav-link class="btn-shine bg-accent text-white px-8 py-4 rounded-full font-semibold text-center shadow-xl hover:bg-accent-dark transition-colors">
                        Get in touch →
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>