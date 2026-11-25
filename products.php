<?php
$title = 'Products — Teddy Bears, Soft Toys & Fabrics';
$page = 'products';
$description = 'Explore the Teddy Tales collections — signature teddy bears, character plush, polyboa and luxurious fabrics. Wholesale from Delhi.';
include __DIR__ . '/includes/head.php';

$selectedCat = $_GET['cat'] ?? 'all';
$validCat = in_array($selectedCat, array_column($categories, 'key'), true);
if (!$validCat) { $selectedCat = 'all'; }
?>
<body class="font-body antialiased bg-white">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">

    <!-- ================= PAGE HERO ================= -->
    <section class="relative overflow-hidden bg-brand-dark text-white">
        <img src="assets/images/luxury/hero-fabric.jpg" alt="Folded luxury fabrics in neutral tones"
             class="absolute inset-0 w-full h-full object-cover opacity-40" aria-hidden="true">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/95 via-brand-dark/85 to-brand-dark/60" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-grid-light opacity-10" aria-hidden="true"></div>

        <div class="relative wrap text-center max-w-3xl mx-auto pt-40 lg:pt-44 xl:pt-56 pb-16">
            <div class="flex items-center justify-center gap-2 text-xs font-semibold uppercase tracking-widest text-white/60">
                <a href="index.php" data-nav-link class="hover:text-accent transition-colors">Home</a>
                <span class="text-accent">/</span>
                <span class="text-accent">Products</span>
            </div>
            <h1 class="hero-anim mt-4 font-display font-extrabold text-5xl md:text-6xl leading-[1.05]" style="--d:.1s">
                The collection, <span class="text-gradient">made in Delhi</span>
            </h1>
            <p class="hero-anim mt-6 text-white/75 text-lg leading-relaxed max-w-2xl mx-auto" style="--d:.22s">
                Signature teddies, character plush, polyboa furs and super-soft fabrics —
                every range available for wholesale and bulk order.
            </p>
        </div>
    </section>

    <!-- ================= CATEGORY TABS + GRID ================= -->
    <section class="relative py-16 bg-white overflow-hidden">
        <div class="wrap">

            <div id="product-filters" class="flex flex-wrap justify-center gap-3 reveal-up">
                <button type="button" data-filter="all"
                        class="filter-chip px-6 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 hover:-translate-y-0.5
                               <?= $selectedCat === 'all' ? 'bg-brand text-white border-brand shadow-lg shadow-brand/25' : 'bg-white text-brand border border-brand/20 hover:border-brand/60 hover:shadow-md' ?>">
                    Everything
                </button>
                <?php foreach ($categories as $cat): ?>
                    <button type="button" data-filter="<?= htmlspecialchars($cat['key']) ?>"
                            class="filter-chip px-6 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 hover:-translate-y-0.5
                                   <?= $selectedCat === $cat['key'] ? 'bg-brand text-white border-brand shadow-lg shadow-brand/25' : 'bg-white text-brand border border-brand/20 hover:border-brand/60 hover:shadow-md' ?>">
                        <?= $cat['label'] ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <p id="no-products" class="hidden mt-12 text-center text-bodytext">No products in this category yet.</p>

            <div id="product-grid" class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($categories as $cat): ?>
                    <?php foreach ($cat['products'] as $i => $p): ?>
                        <div class="product-cell h-full" data-cat="<?= htmlspecialchars($cat['key']) ?>" style="--i: <?= $i ?>">
                            <?php
                            $item = $p;
                            include __DIR__ . '/includes/product-tile.php';
                            ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <!-- Catalogue structured data -->
            <script type="application/ld+json">
            <?php
            $listItems = [];
            $pos = 1;
            foreach ($categories as $cat) {
                foreach ($cat['products'] as $p) {
                    $listItems[] = [
                        '@type'    => 'ListItem',
                        'position' => $pos++,
                        'name'     => $p['name'],
                    ];
                }
            }
            $listSchema = [
                '@context'        => 'https://schema.org',
                '@type'           => 'ItemList',
                'name'            => 'Teddy Tales products',
                'numberOfItems'   => count($listItems),
                'itemListElement' => $listItems,
            ];
            echo json_encode($listSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            ?>
            </script>

            <div class="mt-16 rounded-[2.5rem] bg-ice/70 p-10 text-center reveal-up">
                <h2 class="font-display font-extrabold text-ink text-2xl md:text-3xl leading-tight">
                    Something special in mind?
                </h2>
                <p class="mt-3 text-bodytext text-lg max-w-xl mx-auto">
                    Wholesale carton rates, quick samples and a custom design service. Call or WhatsApp <?= SITE_PHONE ?>.
                </p>
                <div class="mt-7 flex flex-wrap justify-center gap-4">
                    <a href="contact.php" data-nav-link class="btn-shine bg-accent text-white px-8 py-4 rounded-full font-semibold hover:bg-accent-dark transition-colors shadow-lg shadow-accent/25">
                        Request a quote →
                    </a>
                    <a href="<?= 'https://wa.me/' . SITE_WHATSAPP ?>" target="_blank" rel="noopener"
                       class="btn-outline inline-flex items-center px-8 py-4 rounded-full font-semibold bg-brand text-white hover:bg-brand-light transition-colors">
                        WhatsApp us
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>