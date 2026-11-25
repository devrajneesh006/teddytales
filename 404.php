<?php
/** 404 page — search engines get a proper "404 Not Found" status. */
http_response_code(404);
$title = 'Page Not Found';
$page = 'error';
include __DIR__ . '/includes/head.php';
?>
<body class="font-body antialiased bg-white">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="pt-40 lg:pt-44 xl:pt-56 pb-24">
    <section class="wrap text-center">
        <p class="font-display font-extrabold text-[6rem] md:text-[9rem] leading-none text-gradient">404</p>
        <h1 class="mt-4 font-display font-extrabold text-ink text-3xl md:text-4xl leading-tight">
            This page seems to have gone on a tea break
        </h1>
        <p class="mt-4 text-bodytext text-lg max-w-xl mx-auto">
            The page you're looking for doesn't exist or has moved. Browse our catalogue instead —
            or head home to find what you need.
        </p>

        <div class="mt-9 flex flex-wrap justify-center gap-4">
            <a href="index.php" data-nav-link class="btn-shine bg-accent text-white px-8 py-4 rounded-full font-semibold hover:bg-accent-dark transition-colors">
                Back to home →
            </a>
            <a href="products.php" data-nav-link class="btn-outline bg-brand text-white px-8 py-4 rounded-full font-semibold hover:bg-brand-light transition-colors">
                Browse products
            </a>
        </div>

        <div class="mt-14 grid gap-5 sm:grid-cols-3 max-w-3xl mx-auto text-left stagger">
            <?php foreach (array_slice($categories, 0, 3) as $i => $cat): ?>
                <a href="products.php?cat=<?= htmlspecialchars($cat['key']) ?>" data-nav-link
                   class="group flex items-center gap-4 feature-tile rounded-2xl p-5" style="--i: <?= $i ?>">
                    <span class="w-14 h-14 rounded-xl overflow-hidden bg-mist shrink-0">
                        <img src="assets/images/<?= $cat['folder'] ?>/<?= $cat['products'][0]['img'] ?>" alt="" class="w-full h-full object-cover" loading="lazy">
                    </span>
                    <span>
                        <span class="block font-display font-bold text-ink"><?= $cat['label'] ?></span>
                        <span class="block text-xs text-muted">Explore →</span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>