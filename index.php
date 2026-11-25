<?php
$title = 'BIS Certified Soft Toys & Fabrics Manufacturer';
$page = 'home';
$description = 'BIS certified soft toys, teddy bears & fabrics manufacturer and supplier — Rithala, New Delhi.';
include __DIR__ . '/includes/head.php';
$catByKey = [];
foreach ($categories as $cat) { $catByKey[$cat['key']] = $cat; }
$aboutPoints = [
    'Among Delhi’s most trusted plush makers',
    'Chosen by gift shops, labels & exporters',
    'Certified batches, individually inspected',
    'Cut, stitched and finished in-house',
];
?>
<body class="font-body antialiased bg-white">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">

    <!-- ================= HERO SLIDER ================= -->
    <section id="home-slider" class="slider-section relative text-white bg-brand-dark overflow-hidden">
        <div id="hero-curtain" class="hero-curtain" aria-hidden="true"></div>
        <div class="slider-viewport">
            <div id="slider-track" class="slider-track">

                <?php foreach ($slides as $i => $s): ?>
                    <div class="slider-slide relative" <?= $i > 0 ? 'aria-hidden="true"' : '' ?>>
                        <img src="<?= $s['img'] ?>" alt="<?= htmlspecialchars($s['title']) ?>"
                             <?= $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"' ?>
                             class="hero-image absolute inset-0 w-full h-full object-cover">
                        <div class="hero-overlay absolute inset-0 bg-gradient-to-r from-brand-dark/95 via-brand-dark/78 to-brand-dark/35" aria-hidden="true"></div>

                        <div class="wrap relative grid min-h-[500px] md:min-h-[600px] xl:min-h-[660px] items-center pt-40 lg:pt-44 xl:pt-56 pb-16">
                            <div class="max-w-2xl">
                                <p class="hero-anim text-xs font-bold uppercase tracking-[0.3em] text-accent" style="--d:.05s">
                                    <span class="inline-flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-accent"></span><?= $s['eyebrow'] ?>
                                    </span>
                                </p>
                                <?php if ($i === 0): ?>
                                    <h1 class="hero-title mt-5 font-display font-extrabold text-4xl md:text-6xl leading-[1.05] text-white [text-shadow:0_2px_30px_rgba(6,42,80,0.5)]" style="--d:.15s">
                                        <?= $s['title'] ?>
                                    </h1>
                                <?php else: ?>
                                    <h2 class="hero-title mt-5 font-display font-extrabold text-4xl md:text-6xl leading-[1.05] text-white [text-shadow:0_2px_30px_rgba(6,42,80,0.5)]" style="--d:.15s">
                                        <?= $s['title'] ?>
                                    </h2>
                                <?php endif; ?>
                                <p class="hero-anim mt-6 max-w-xl text-white/85 text-lg leading-relaxed" style="--d:.28s"><?= $s['text'] ?></p>
                                <div class="hero-btn mt-9 flex flex-wrap items-center gap-4" style="--d:.42s">
                                    <a href="<?= $s['cta'][0] ?>" data-nav-link
                                       class="btn-shine inline-flex items-center gap-2 bg-accent text-white px-8 py-4 rounded-full font-semibold text-sm hover:bg-accent-dark transition-colors shadow-xl shadow-accent/20">
                                        <?= $s['cta'][1] ?> →
                                    </a>
                                    <a href="<?= $s['cta2'][0] ?>" data-nav-link
                                       class="btn-outline inline-flex items-center px-8 py-4 rounded-full font-semibold text-sm border-2 border-white/35 text-white hover:border-accent hover:text-accent-light hover:scale-[1.03] transition-all duration-300">
                                        <?= $s['cta2'][1] ?>
                                    </a>
                                </div>
                                <p class="hero-anim mt-8 text-xs font-semibold uppercase tracking-widest text-white/60" style="--d:.55s"><?= $s['note'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <button id="slider-prev" aria-label="Previous slide"
                    class="slider-nav-btn absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-10">←</button>
            <button id="slider-next" aria-label="Next slide"
                    class="slider-nav-btn absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-10">→</button>

            <div id="slider-dots" class="absolute bottom-6 left-1/2 -translate-x-1/2 z-10 flex items-center gap-2" aria-label="Slider navigation"></div>
        </div>
    </section>

    <!-- ================= STATS ================= -->
    <section id="stats" class="relative bg-brand-dark text-white overflow-hidden">
        <div class="absolute inset-0 bg-grid-light opacity-25" aria-hidden="true"></div>
        <div class="absolute top-0 right-0 w-80 h-80 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="relative wrap grid grid-cols-2 md:grid-cols-4 gap-10 py-12 md:py-14 text-center">
            <?php foreach ($stats as $i => $s): ?>
                <div class="group cursor-default" style="--i:<?= $i ?>">
                    <p class="stat-num font-display font-extrabold text-accent text-5xl md:text-6xl">
                        <span class="counter" data-count="<?= $s['value'] ?>" data-suffix="<?= $s['suffix'] ?>">0<?= $s['suffix'] ?></span>
                    </p>
                    <p class="mt-3 text-sm uppercase tracking-[0.18em] text-white/70 font-medium transition-colors duration-300 group-hover:text-accent-light"><?= $s['label'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= ABOUT TEASER ================= -->
    <section class="relative py-20 lg:py-24 bg-white overflow-hidden">
        <div class="wrap grid lg:grid-cols-2 gap-14 items-center">
            <div class="relative order-2 lg:order-1 reveal-left">
                <div class="rounded-[2rem] overflow-hidden shadow-xl border border-brand/10">
                    <img src="assets/images/luxury/about-atelier.jpg" alt="Artisan stitching plush at the Teddy Tales atelier" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="absolute -bottom-6 -left-4 md:-left-8 bg-brand text-white rounded-2xl px-6 py-4 shadow-2xl float-badge">
                    <p class="font-display font-bold text-3xl text-accent">16<span class="text-white text-xl">+</span></p>
                    <p class="text-[11px] uppercase tracking-widest text-white/70">years of craft</p>
                </div>
                <div class="absolute -top-5 right-6 bg-accent text-brand-dark rounded-2xl px-5 py-3 shadow-2xl float-badge float-badge-delay">
                    <p class="font-display font-bold text-2xl text-brand-dark">BIS</p>
                    <p class="text-[11px] uppercase tracking-widest text-brand-dark/75">certified batches</p>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <p class="sec-tag text-accent">Our house</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl lg:text-[2.6rem] leading-tight reveal-up">
                    Teddy bears & plush <span class="text-gradient">made to be loved for years</span>
                </h2>
                <p class="mt-6 text-bodytext leading-relaxed text-lg reveal-up" style="--d:.1s">
                    A teddy bear is more than a toy — it is a first friend, a bedtime companion, a small keepsake of childhood.
                    Since <?= SITE_EST ?>, Teddy Tales has made teddies, unicorns and character plush with child-safe materials,
                    patient hands and a fondness for beautiful fabric.
                </p>
                <ul class="mt-8 grid sm:grid-cols-2 gap-x-6 gap-y-4 stagger reveal-up" style="--d:.18s">
                    <?php foreach ($aboutPoints as $pt): ?>
                        <li class="flex items-center gap-3 text-sm font-medium text-ink">
                            <span class="grid place-items-center w-7 h-7 shrink-0 rounded-full bg-accent text-white p-1.5"><?php $icon = 'check'; include __DIR__ . '/includes/icon.php'; ?></span>
                            <?= $pt ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="mt-9 flex flex-wrap items-center gap-4 reveal-up" style="--d:.26s">
                    <a href="about.php" data-nav-link class="btn-shine inline-flex items-center gap-2 bg-brand text-white px-8 py-4 rounded-full font-semibold text-sm hover:bg-brand-light transition-colors shadow-xl shadow-brand/20">
                        Our story <span aria-hidden="true">→</span>
                    </a>
                    <a href="gallery.php" data-nav-link class="group inline-flex items-center gap-2 font-semibold text-brand hover:text-brand-light transition-colors">
                        View the lookbook
                        <span class="arrow-chip grid place-items-center w-9 h-9 rounded-full bg-ice text-brand">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SERVICES / WHY US ================= -->
    <section class="relative py-20 lg:py-24 bg-mist overflow-hidden">
        <div class="absolute -top-16 -right-16 w-72 h-72 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="wrap">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <p class="sec-tag text-accent">The Teddy Tales promise</p>
                    <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight reveal-up">
                        Craft you can <span class="text-gradient">feel</span>
                    </h2>
                </div>
                <p class="text-bodytext text-lg max-w-md reveal-up" style="--d:.1s">
                    Beautiful materials, rigorous safety and dependable supply — the quiet promises behind every carton we dispatch.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4 stagger">
                <?php foreach ($features as $i => $f): ?>
                    <div class="feature-tile p-7" style="--i: <?= $i ?>">
                        <span class="feature-icon"><?php $icon = $f['icon']; include __DIR__ . '/includes/icon.php'; ?></span>
                        <h3 class="ftitle mt-5 font-display font-bold text-ink text-lg"><?= $f['title'] ?></h3>
                        <p class="mt-2 text-sm text-bodytext leading-relaxed"><?= $f['text'] ?></p>
                        <span class="mt-5 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-accent-dark">
                            Assured <span class="w-6 h-0.5 bg-accent rounded-full"></span>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= FEATURED PRODUCTS ================= -->
    <section class="relative py-20 lg:py-24 bg-white overflow-hidden">
        <div class="wrap">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <p class="sec-tag text-accent">Selected pieces</p>
                    <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight reveal-up">
                        Signature plush & fabrics, <span class="text-gradient">from our Delhi atelier</span>
                    </h2>
                </div>
                <div class="flex items-center gap-3 reveal-up" style="--d:.1s">
                    <a href="products.php" data-nav-link class="group inline-flex items-center gap-2 font-semibold text-brand hover:text-brand-light transition-colors whitespace-nowrap">
                        Full collection
                        <span class="arrow-chip grid place-items-center w-9 h-9 rounded-full bg-ice text-brand">→</span>
                    </a>
                </div>
            </div>

            <div id="feat-viewport" class="mt-12 overflow-hidden">
                <div id="feat-track" class="feat-track">
                    <?php foreach (array_chunk(array_slice($featured, 0, 3), 3) as $chunk): ?>
                        <div class="feat-page grid grid-cols-1 sm:grid-cols-3 gap-5 md:gap-6 shrink-0 w-full">
                            <?php foreach ($chunk as $f): ?>
                                <?php
                                $cat = $catByKey[$f['cat']];
                                $item = ['img' => $f['img'], 'name' => $f['name']];
                                ?>
                                <?php include __DIR__ . '/includes/product-tile.php'; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="feat-dots" class="mt-8 flex items-center justify-center gap-2" aria-label="Featured products navigation"></div>
        </div>
    </section>

    <!-- ================= CATEGORIES ================= -->
    <section class="relative py-20 lg:py-24 bg-ice/60 overflow-hidden">
        <div class="wrap">
            <div class="text-center max-w-2xl mx-auto">
                <p class="sec-tag text-accent justify-center">The collections</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight reveal-up">
                    Six considered ranges for <span class="text-gradient">retail &amp; making</span>
                </h2>
                <p class="mt-4 text-bodytext text-lg reveal-up" style="--d:.1s">Teddies, character plush, sumptuous fabrics and fills — all under one certified roof in Rithala.</p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 stagger">
                <?php foreach (array_slice($categories, 0, 3) as $i => $cat): ?>
                    <a href="products.php?cat=<?= htmlspecialchars($cat['key']) ?>" data-nav-link
                       class="cat-card group relative rounded-3xl overflow-hidden bg-brand-dark min-h-[240px] flex items-end reveal-zoom" style="--i: <?= $i ?>">
                        <img src="assets/images/<?= $cat['folder'] ?>/<?= $cat['products'][0]['img'] ?>"
                             alt="<?= htmlspecialchars($cat['label']) ?>"
                             class="absolute inset-0 w-full h-full object-cover opacity-70" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand-dark/40 to-transparent" aria-hidden="true"></div>
                        <div class="relative p-6 w-full">
                            <p class="cat-title font-display font-bold text-white text-xl leading-snug"><?= $cat['label'] ?></p>
                            <p class="cat-arr mt-2 text-xs text-white/75"><?= count($cat['products']) ?> designs · Explore →</p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="mt-10 text-center reveal-up">
                <a href="gallery.php" data-nav-link
                   class="group inline-flex items-center gap-3 bg-accent text-white pl-5 pr-7 py-3.5 rounded-full font-semibold text-sm shadow-lg shadow-accent/25 hover:bg-accent-dark hover:scale-[1.04] transition-all duration-300">
                    <span class="grid place-items-center w-8 h-8 rounded-full bg-white/25 text-lg leading-none font-bold">+</span>
                    View the full lookbook <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= FABRICS ================= -->
    <section class="relative py-20 lg:py-24 bg-white overflow-hidden">
        <div class="absolute -bottom-20 -left-20 w-80 h-80 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="wrap">
            <div class="text-center max-w-2xl mx-auto">
                <p class="sec-tag text-accent justify-center">The material library</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight reveal-up">
                    Beautiful fabrics, <span class="text-gradient">chosen with care</span>
                </h2>
                <p class="mt-4 text-bodytext text-lg reveal-up" style="--d:.1s">Texture is everything. We work across all of these — and help you choose the right one.</p>
            </div>

            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-5 stagger">
                <?php foreach ($fabrics as $i => $f): ?>
                    <div class="fabric-card rounded-2xl p-6 text-center" style="--i: <?= $i ?>">
                        <p class="fname font-display font-bold text-ink text-lg"><?= $f['name'] ?></p>
                        <p class="mt-2 text-sm text-bodytext leading-relaxed"><?= $f['text'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= MATERIAL NOTES ================= -->
    <section class="relative py-20 lg:py-24 bg-white overflow-hidden">
        <div class="absolute -top-24 right-0 w-80 h-80 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="wrap grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <div class="lg:sticky lg:top-32 reveal-left">
                <p class="sec-tag text-accent">The material notes</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight">
                    What makes a plush <span class="text-gradient">worth keeping</span>
                </h2>
                <p class="mt-4 text-bodytext text-lg leading-relaxed">
                    The feel of a toy begins long before the first stitch. Pile height, fibre, filling and finish
                    all shape how a piece is held, cleaned and remembered. Here is what we look for.
                </p>
                <div class="mt-8 rounded-2xl overflow-hidden border border-brand/10 shadow-xl">
                    <img src="assets/images/luxury/fabric-scraps.jpg"
                         alt="A close-up of plush fabrics and trims in the Teddy Tales studio"
                         class="w-full h-64 object-cover" loading="lazy">
                </div>
                <div class="mt-5 grid grid-cols-2 gap-4">
                    <div class="rounded-xl border border-brand/10 bg-mist p-4">
                        <p class="font-display font-bold text-2xl text-brand">35–60&quot;</p>
                        <p class="mt-1 text-[11px] uppercase tracking-[0.16em] text-muted font-semibold">fabric widths</p>
                    </div>
                    <div class="rounded-xl border border-brand/10 bg-mist p-4">
                        <p class="font-display font-bold text-2xl text-brand">7–20mm</p>
                        <p class="mt-1 text-[11px] uppercase tracking-[0.16em] text-muted font-semibold">polyboa pile</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4 stagger">
                <details class="faq bg-mist rounded-2xl overflow-hidden group open:shadow-lg transition-shadow border border-brand/10" open>
                    <summary class="flex items-center justify-between gap-4 cursor-pointer px-6 py-5 font-display font-bold text-ink list-none hover:text-brand transition-colors">
                        Which fabric suits a first teddy?
                        <span class="faq-chevron shrink-0 grid place-items-center w-8 h-8 rounded-full bg-white group-open:bg-accent group-open:rotate-45 transition-all duration-300 text-sm">+</span>
                    </summary>
                    <p class="px-6 pb-5 text-sm text-bodytext leading-relaxed">
                        A short, dense pile such as velboa or minky is easiest to clean and feels gentle against skin.
                        For a more tactile heirloom, a longer faux fur adds warmth — we can send both in a sample pack.
                    </p>
                </details>
                <details class="faq bg-mist rounded-2xl overflow-hidden group open:shadow-lg transition-shadow border border-brand/10">
                    <summary class="flex items-center justify-between gap-4 cursor-pointer px-6 py-5 font-display font-bold text-ink list-none hover:text-brand transition-colors">
                        What does BIS certification cover?
                        <span class="faq-chevron shrink-0 grid place-items-center w-8 h-8 rounded-full bg-white group-open:bg-accent group-open:rotate-45 transition-all duration-300 text-sm">+</span>
                    </summary>
                    <p class="px-6 pb-5 text-sm text-bodytext leading-relaxed">
                        Our toys are made to conform to IS 9873 requirements for mechanical and physical safety,
                        flammability and migration of certain elements. Every batch is checked for seam strength,
                        secure eyes and clean filling before packing.
                    </p>
                </details>
                <details class="faq bg-mist rounded-2xl overflow-hidden group open:shadow-lg transition-shadow border border-brand/10">
                    <summary class="flex items-center justify-between gap-4 cursor-pointer px-6 py-5 font-display font-bold text-ink list-none hover:text-brand transition-colors">
                        How should I care for a plush toy?
                        <span class="faq-chevron shrink-0 grid place-items-center w-8 h-8 rounded-full bg-white group-open:bg-accent group-open:rotate-45 transition-all duration-300 text-sm">+</span>
                    </summary>
                    <p class="px-6 pb-5 text-sm text-bodytext leading-relaxed">
                        Surface-wash with a soft cloth and mild soap, then air-dry away from direct heat. For deeper
                        cleaning, check the care label and use a gentle cycle in a laundry bag. Brushing the pile
                        restores the finish.
                    </p>
                </details>
                <details class="faq bg-mist rounded-2xl overflow-hidden group open:shadow-lg transition-shadow border border-brand/10">
                    <summary class="flex items-center justify-between gap-4 cursor-pointer px-6 py-5 font-display font-bold text-ink list-none hover:text-brand transition-colors">
                        Can I mix fabrics within one collection?
                        <span class="faq-chevron shrink-0 grid place-items-center w-8 h-8 rounded-full bg-white group-open:bg-accent group-open:rotate-45 transition-all duration-300 text-sm">+</span>
                    </summary>
                    <p class="px-6 pb-5 text-sm text-bodytext leading-relaxed">
                        Yes. We often pair a smooth velboa body with a faux-fur accent, or use minky for contrast.
                        Share your palette and we will suggest pile heights that sit well together.
                    </p>
                </details>
                <details class="faq bg-mist rounded-2xl overflow-hidden group open:shadow-lg transition-shadow border border-brand/10">
                    <summary class="flex items-center justify-between gap-4 cursor-pointer px-6 py-5 font-display font-bold text-ink list-none hover:text-brand transition-colors">
                        Do you supply fabric by the roll?
                        <span class="faq-chevron shrink-0 grid place-items-center w-8 h-8 rounded-full bg-white group-open:bg-accent group-open:rotate-45 transition-all duration-300 text-sm">+</span>
                    </summary>
                    <p class="px-6 pb-5 text-sm text-bodytext leading-relaxed">
                        We supply polyboa, super-soft, nylex and velvet by the roll or in cut lengths, with custom
                        cutting available. Tell us your width and quantity and we will confirm availability.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- ================= CHOOSING GUIDE ================= -->
    <section class="relative py-20 lg:py-24 bg-mist overflow-hidden">
        <span class="ghost-word absolute top-0 right-0 hidden lg:block" aria-hidden="true">GUIDE</span>
        <div class="wrap">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                <div class="max-w-2xl">
                    <p class="sec-tag text-accent">A plush for every story</p>
                    <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight reveal-up">
                        Choose with <span class="text-gradient">confidence</span>
                    </h2>
                    <p class="mt-4 text-bodytext text-lg reveal-up" style="--d:.1s">
                        A few quiet notes from our studio — whether you are buying a first teddy or building a shelf for a shop.
                    </p>
                </div>
                <a href="products.php" data-nav-link class="inline-flex items-center gap-3 font-semibold text-brand whitespace-nowrap reveal-up" style="--d:.15s">
                    Browse all collections
                    <span class="arrow-chip grid place-items-center w-9 h-9 rounded-full bg-white text-brand">→</span>
                </a>
            </div>

            <div class="mt-12 grid md:grid-cols-3 gap-6 stagger">
                <article class="feature-tile group bg-white rounded-2xl p-8 h-full" style="--i: 0">
                    <div class="flex items-center justify-between">
                        <span class="font-display font-bold text-5xl text-accent/50">01</span>
                        <span class="grid place-items-center w-12 h-12 rounded-full bg-ice text-brand p-3"><?php $icon = 'heart'; include __DIR__ . '/includes/icon.php'; ?></span>
                    </div>
                    <h3 class="mt-5 font-display font-bold text-2xl text-ink">For little hands</h3>
                    <p class="mt-3 text-sm text-bodytext leading-relaxed">
                        Soft, light and easy to hold. We choose short-pile fabrics, rounded shapes and securely fixed details for the first companion.
                    </p>
                    <ul class="mt-5 space-y-2 text-sm text-bodytext">
                        <li class="flex gap-2"><span class="text-accent">•</span> Short-pile, easy-clean fabrics</li>
                        <li class="flex gap-2"><span class="text-accent">•</span> Embroidered or locked-in features</li>
                        <li class="flex gap-2"><span class="text-accent">•</span> Lightweight, huggable filling</li>
                    </ul>
                    <a href="products.php?cat=teddy-bears" data-nav-link class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand hover:text-accent-dark transition-colors">
                        Explore teddy bears <span>→</span>
                    </a>
                </article>

                <article class="feature-tile group bg-white rounded-2xl p-8 h-full" style="--i: 1">
                    <div class="flex items-center justify-between">
                        <span class="font-display font-bold text-5xl text-accent/50">02</span>
                        <span class="grid place-items-center w-12 h-12 rounded-full bg-ice text-brand p-3"><?php $icon = 'ribbon'; include __DIR__ . '/includes/icon.php'; ?></span>
                    </div>
                    <h3 class="mt-5 font-display font-bold text-2xl text-ink">For a gift that stays</h3>
                    <p class="mt-3 text-sm text-bodytext leading-relaxed">
                        A keepsake should feel considered from the first touch to the final ribbon. Choose a richer pile and a gift-ready finish.
                    </p>
                    <ul class="mt-5 space-y-2 text-sm text-bodytext">
                        <li class="flex gap-2"><span class="text-accent">•</span> Dense plush and faux fur</li>
                        <li class="flex gap-2"><span class="text-accent">•</span> Gift-ready carton packing</li>
                        <li class="flex gap-2"><span class="text-accent">•</span> Personal notes on request</li>
                    </ul>
                    <a href="products.php?cat=teddy-bears" data-nav-link class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand hover:text-accent-dark transition-colors">
                        See gift favourites <span>→</span>
                    </a>
                </article>

                <article class="feature-tile group bg-white rounded-2xl p-8 h-full" style="--i: 2">
                    <div class="flex items-center justify-between">
                        <span class="font-display font-bold text-5xl text-accent/50">03</span>
                        <span class="grid place-items-center w-12 h-12 rounded-full bg-ice text-brand p-3"><?php $icon = 'box'; include __DIR__ . '/includes/icon.php'; ?></span>
                    </div>
                    <h3 class="mt-5 font-display font-bold text-2xl text-ink">For your shelves</h3>
                    <p class="mt-3 text-sm text-bodytext leading-relaxed">
                        Buying for a shop, label or export order? We work at wholesale volumes with flexible minimums and dependable dispatch.
                    </p>
                    <ul class="mt-5 space-y-2 text-sm text-bodytext">
                        <li class="flex gap-2"><span class="text-accent">•</span> Flexible MOQs on most ranges</li>
                        <li class="flex gap-2"><span class="text-accent">•</span> Samples before you commit</li>
                        <li class="flex gap-2"><span class="text-accent">•</span> Pan-India dispatch</li>
                    </ul>
                    <a href="contact.php" data-nav-link class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-brand hover:text-accent-dark transition-colors">
                        Start a wholesale enquiry <span>→</span>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <!-- ================= PROCESS ================= -->
    <section class="relative py-20 lg:py-24 bg-mist overflow-hidden">
        <div class="wrap">
            <div class="text-center max-w-2xl mx-auto">
                <p class="sec-tag text-accent justify-center">How it’s made</p>
                <h2 class="mt-3 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight reveal-up">
                    From fabric roll to <span class="text-gradient">a treasured toy</span>
                </h2>
                <p class="mt-4 text-bodytext text-lg reveal-up" style="--d:.1s">Six careful steps keep every batch consistent, safe and on schedule.</p>
            </div>

            <div class="mt-14 grid md:grid-cols-2 lg:grid-cols-3 gap-7 stagger">
                <?php foreach ($process as $i => $step): ?>
                    <div class="step-card flex gap-5 rounded-2xl p-6" style="--i: <?= $i ?>">
                        <div class="relative shrink-0">
                            <span class="step-icon grid place-items-center w-16 h-16 rounded-2xl bg-brand text-white p-4"><?php $icon = $step['icon']; include __DIR__ . '/includes/icon.php'; ?></span>
                            <span class="step-chip absolute -top-3 -right-3 grid place-items-center w-8 h-8 rounded-full bg-accent text-white text-[11px] font-bold"><?= $step['step'] ?></span>
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg text-ink"><?= $step['title'] ?></h3>
                            <p class="mt-2 text-sm text-bodytext leading-relaxed"><?= $step['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= ATELIER BAND ================= -->
    <section class="relative overflow-hidden bg-brand-dark text-white">
        <img src="assets/images/luxury/atelier-vintage.jpg" alt="A tailor's workspace at the Teddy Tales atelier"
             class="absolute inset-0 w-full h-full object-cover opacity-45" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/95 via-brand-dark/80 to-brand-dark/60" aria-hidden="true"></div>
        <div class="relative wrap py-20 lg:py-28">
            <div class="max-w-3xl reveal-up">
                <p class="sec-tag text-accent">Inside the atelier</p>
                <h2 class="mt-5 font-display font-extrabold text-3xl md:text-5xl leading-tight">
                    Every stitch is a <span class="text-gradient">small act of care</span>
                </h2>
                <p class="mt-6 text-white/75 text-lg leading-relaxed max-w-2xl">
                    Our makers cut, stitch and finish each piece by hand in Rithala — choosing the fabric, setting the face,
                    checking the seam. That is how a soft toy becomes a companion.
                </p>
                <a href="about.php" data-nav-link class="mt-9 inline-flex items-center gap-3 text-accent-light font-semibold hover:text-white transition-colors">
                    Meet the people behind the plush <span class="text-xl">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONIALS ================= -->
    <section class="relative py-20 lg:py-24 bg-brand-dark text-white overflow-hidden">
        <div class="absolute inset-0 bg-grid-light opacity-25" aria-hidden="true"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="relative max-w-4xl mx-auto px-5 lg:px-8 text-center">
            <p class="sec-tag text-accent justify-center">In their words</p>
            <h2 class="mt-3 font-display font-extrabold text-3xl md:text-4xl leading-tight reveal-up">
                Beloved by <span class="text-gradient">makers &amp; retailers</span>
            </h2>

            <div class="testimonial-viewport mt-10 reveal-up" style="--d:.1s">
                <div id="testimonial-track" class="testimonial-track">
                    <?php foreach ($testimonials as $t): ?>
                        <div class="testimonial-slide px-2">
                            <div class="text-5xl text-accent leading-none">“</div>
                            <blockquote class="mt-2 font-display text-xl md:text-2xl leading-relaxed text-white/90 italic">
                                <?= $t['quote'] ?>
                            </blockquote>
                            <div class="mt-8 flex items-center justify-center gap-4">
                                <span class="avatar w-12 h-12 rounded-full grid place-items-center font-bold text-white"><?= strtoupper(substr($t['name'], 0, 1)) ?></span>
                                <div class="text-left">
                                    <p class="font-semibold text-accent"><?= $t['name'] ?></p>
                                    <p class="text-xs text-white/60"><?= $t['role'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div id="testimonial-dots" class="mt-8 flex items-center justify-center gap-2" aria-label="Testimonial navigation"></div>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="relative py-20 bg-white">
        <div class="wrap">
            <div class="relative rounded-[2.5rem] bg-gradient-to-br from-brand via-brand-dark to-brand-light p-10 md:p-16 overflow-hidden shadow-2xl shadow-brand/25">
                <img src="assets/images/luxury/gift-box.jpg" alt="A plush bear in a beautiful gift box"
                     class="absolute inset-0 w-full h-full object-cover opacity-35" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/95 via-brand-dark/80 to-brand-dark/45" aria-hidden="true"></div>
                <div class="absolute inset-0 bg-grid-light opacity-10" aria-hidden="true"></div>
                <div class="relative grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h2 class="font-display font-extrabold text-white text-3xl md:text-4xl leading-tight reveal-up">
                            A beautiful range, ready <span class="underline decoration-accent decoration-4 underline-offset-4">for your shelves</span>
                        </h2>
                        <p class="mt-5 text-white/75 text-lg reveal-up" style="--d:.1s">Wholesale pricing, quick samples and on-time dispatch across India. Call or WhatsApp us today.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4 md:justify-end">
                        <a href="<?= 'tel:' . SITE_PHONE_RAW ?>" data-nav-link class="btn-shine bg-accent text-white px-8 py-4 rounded-full font-semibold text-center shadow-lg hover:bg-accent-dark transition-colors">
                            <?= SITE_PHONE ?> → Call now
                        </a>
                        <a href="contact.php" data-nav-link class="btn-outline bg-white/15 text-white border border-white/30 px-8 py-4 rounded-full font-semibold text-center hover:bg-white/25 transition-colors">
                            Send an enquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>