<?php
$title = 'Gallery — Our Plush Toys & Fabrics Showcase';
$page = 'gallery';
$description = 'The Teddy Tales lookbook — teddy bears, character plush, polyboa furs and luxurious fabrics, photographed at our Delhi atelier.';
include __DIR__ . '/includes/head.php';
?>
<body class="font-body antialiased bg-white">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">

    <!-- ================= PAGE HERO ================= -->
    <section class="relative overflow-hidden bg-brand-dark text-white">
        <img src="assets/images/luxury/hero-teddy.jpg" alt="Plush teddy bears in a warm, cosy setting"
             class="absolute inset-0 w-full h-full object-cover opacity-40" aria-hidden="true">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/95 via-brand-dark/85 to-brand-dark/60" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-grid-light opacity-10" aria-hidden="true"></div>

        <div class="relative wrap text-center max-w-3xl mx-auto pt-40 lg:pt-44 xl:pt-56 pb-16">
            <div class="flex items-center justify-center gap-2 text-xs font-semibold uppercase tracking-widest text-white/60">
                <a href="index.php" data-nav-link class="hover:text-accent transition-colors">Home</a>
                <span class="text-accent">/</span>
                <span class="text-accent">Gallery</span>
            </div>
            <h1 class="hero-anim mt-4 font-display font-extrabold text-5xl md:text-6xl leading-[1.05]" style="--d:.1s">
                The <span class="text-gradient"> Teddy Tales lookbook</span>
            </h1>
            <p class="hero-anim mt-6 text-white/75 text-lg leading-relaxed max-w-2xl mx-auto" style="--d:.22s">
                A closer look at our collections — from signature teddies to sumptuous polyboa furs —
                all made at our atelier in Rithala, New Delhi.
            </p>
        </div>
    </section>

    <!-- ================= GALLERY GRID ================= -->
    <section class="relative py-16 bg-white overflow-hidden">
        <div class="absolute -bottom-24 -right-24 w-80 h-80 glow-orange blur-3xl" aria-hidden="true"></div>
        <div class="wrap space-y-16">

            <?php foreach ($categories as $ci => $cat): ?>
                <div>
                    <div class="flex items-end justify-between gap-4 reveal-up">
                        <div>
                            <p class="sec-tag text-accent">Category <?= str_pad($ci + 1, 2, '0', STR_PAD_LEFT) ?></p>
                            <h2 class="mt-2 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight">
                                <?= $cat['label'] ?>
                            </h2>
                            <p class="mt-2 text-bodytext max-w-2xl"><?= $cat['desc'] ?></p>
                        </div>
                        <a href="products.php?cat=<?= htmlspecialchars($cat['key']) ?>" data-nav-link
                           class="hidden md:inline-flex items-center gap-2 font-semibold text-brand whitespace-nowrap">
                            View in catalogue
                            <span class="arrow-chip grid place-items-center w-9 h-9 rounded-full bg-ice text-brand">→</span>
                        </a>
                    </div>

                    <div class="mt-8 grid gap-5 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 stagger">
                        <?php foreach ($cat['products'] as $i => $p): ?>
                            <button type="button" class="gallery-item group relative overflow-hidden rounded-2xl border border-brand/10 bg-mist aspect-square" style="--i: <?= $i ?>"
                                    data-img="assets/images/<?= htmlspecialchars($cat['folder']) ?>/<?= htmlspecialchars($p['img']) ?>"
                                    data-title="<?= htmlspecialchars($p['name']) ?>">
                                <img src="assets/images/<?= htmlspecialchars($cat['folder']) ?>/<?= htmlspecialchars($p['img']) ?>"
                                     alt="<?= htmlspecialchars($p['name']) ?>"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                                <span class="gi-cap bg-brand/90 text-white text-sm font-medium text-left px-4 py-3">
                                    <?= htmlspecialchars($p['name']) ?>
                                </span>
                                <span class="absolute top-3 right-3 grid place-items-center w-9 h-9 rounded-full bg-accent text-white opacity-0 scale-75 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300 text-lg">+</span>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="relative py-20 bg-ice/60 overflow-hidden">
        <div class="absolute -top-24 right-10 w-72 h-72 glow-blue blur-3xl" aria-hidden="true"></div>
        <div class="wrap rounded-[2.5rem] bg-gradient-to-br from-brand via-brand-dark to-brand-light p-10 md:p-14 overflow-hidden relative">
            <div class="absolute inset-0 bg-grid-light opacity-25" aria-hidden="true"></div>
            <div class="absolute -bottom-20 right-1/4 w-72 h-72 glow-orange blur-3xl" aria-hidden="true"></div>
            <div class="relative grid md:grid-cols-2 gap-8 items-center reveal-up">
                <div>
                    <h2 class="font-display font-extrabold text-white text-3xl md:text-4xl leading-tight">
                        Take a closer look — request a sample pack
                    </h2>
                    <p class="mt-3 text-white/75 text-lg">Custom cutting, one-of-a-kind designs and bulk carton supply — talk to us today.</p>
                </div>
                <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4 md:justify-end">
                    <a href="contact.php" data-nav-link class="btn-shine bg-accent text-white px-8 py-4 rounded-full font-semibold text-center hover:bg-accent-dark transition-colors">
                        Request samples →
                    </a>
                    <a href="<?= 'https://wa.me/' . SITE_WHATSAPP ?>" target="_blank" rel="noopener"
                       class="btn-outline inline-flex items-center justify-center px-8 py-4 rounded-full font-semibold bg-white text-brand hover:bg-ice transition-colors">
                        WhatsApp us
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Lightbox -->
<div id="lightbox" class="fixed inset-0 z-[60] hidden items-center justify-center bg-brand-dark/90 p-4 md:p-10">
    <button id="lightbox-close" aria-label="Close" class="absolute top-5 right-5 w-12 h-12 rounded-full bg-white/10 text-white text-2xl hover:bg-accent transition-colors">×</button>
    <figure class="max-w-4xl w-full text-center">
        <img id="lightbox-img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="" class="mx-auto max-h-[70vh] w-auto rounded-2xl shadow-2xl object-contain bg-white/5">
        <figcaption id="lightbox-title" class="mt-5 font-display font-semibold text-white text-lg"></figcaption>
    </figure>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>