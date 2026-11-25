<?php
/**
 * Shared header: coverall-style 3-row header (top bar + contact + nav)
 * with sticky animation, dropdown products menu and mobile panel.
 * Expects: $page (active nav key).
 */
$activeNav = $page ?? 'home';
$ticker = [
    'Certified Soft Toys & Luxurious Fabrics',
    'A Boutique Maker Since ' . SITE_EST,
    'Wholesale & Bespoke Commissions',
    'Child-Safe &#9670; Hypoallergenic Materials',
    'Atelier in ' . SITE_CITY,
    'Considered Fabrics, Careful Stitching',
    'Pan-India Dispatch',
];
$tickerStr = implode('<span class="marquee-bullet">&#9679;</span>', $ticker);
?>

<a href="#main-content" class="skip-link" tabindex="0">Skip to main content</a>

<!-- ============ PRELOADER ============ -->
<div id="preloader" aria-hidden="true">
    <div class="preloader-inner">
        <img src="assets/images/TeddyTales-trim.png?v=1" alt="Teddy Tales" class="preloader-logo">
        <div class="preloader-bar"><span></span></div>
    </div>
</div>

<!-- ============ HEADER ============ -->
<header id="site-nav" class="fixed top-0 inset-x-0 z-50">

    <!-- Top bar -->
    <div class="header-topbar hidden lg:block">
        <div class="wrap flex items-center justify-between gap-6 py-2.5">
            <div class="marquee-wrap flex-1 min-w-0">
                <div class="marquee-track">
                    <?php for ($i = 0; $i < 2; $i++): ?>
                        <span class="marquee-item"><?= $tickerStr ?></span>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="flex items-center gap-5 shrink-0">
                <a href="mailto:<?= SITE_EMAIL ?>" data-nav-link class="top-link text-[13px]">
                    <span class="w-3.5 h-3.5 text-accent"><?php $icon = 'mail'; include __DIR__ . '/icon.php'; ?></span>
                    <?= SITE_EMAIL ?>
                </a>
                <a href="tel:<?= SITE_PHONE_RAW ?>" data-nav-link class="top-link text-[13px]">
                    <span class="w-3.5 h-3.5 text-accent"><?php $icon = 'phone'; include __DIR__ . '/icon.php'; ?></span>
                    <?= SITE_PHONE ?>
                </a>
                <span class="top-link text-[13px] cursor-default">
                    <span class="w-3.5 h-3.5 text-accent"><?php $icon = 'clock'; include __DIR__ . '/icon.php'; ?></span>
                    <?= SITE_HOURS ?>
                </span>
            </div>
        </div>
    </div>

    <!-- Mobile top strip -->
    <div class="header-topbar lg:hidden">
        <div class="marquee-wrap py-2">
            <div class="marquee-track">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <span class="marquee-item"><?= $tickerStr ?></span>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <!-- Main bar -->
    <div class="header-mainbar border-b border-brand/10">
        <div class="wrap flex items-center justify-between gap-6 py-3">

            <a href="index.php" data-nav-link class="flex items-center" aria-label="Teddy Tales — home">
                <span class="flex items-center px-2 py-1 rounded-2xl">
                    <img src="assets/images/TeddyTales-trim.png?v=1" alt="Teddy Tales" class="h-20 lg:h-24 w-auto object-contain">
                </span>
            </a>

            <!-- Contact info (coverall-style) -->
            <div class="hidden xl:flex items-center gap-7">
                <span class="header-contact-item">
                    <span class="header-contact-ic w-10 h-10 p-2"><?php $icon = 'pin'; include __DIR__ . '/icon.php'; ?></span>
                    <span>
                        <span class="block text-[11px] font-semibold uppercase tracking-widest text-muted">Atelier</span>
                        <span class="block font-semibold text-ink text-sm"><?= SITE_CITY ?></span>
                    </span>
                </span>
                <span class="header-contact-item">
                    <span class="header-contact-ic w-10 h-10 p-2"><?php $icon = 'mail'; include __DIR__ . '/icon.php'; ?></span>
                    <span>
                        <span class="block text-[11px] font-semibold uppercase tracking-widest text-muted">Email</span>
                        <span class="block font-semibold text-ink text-sm"><?= SITE_EMAIL ?></span>
                    </span>
                </span>
                <span class="header-contact-item">
                    <span class="header-contact-ic w-10 h-10 p-2"><?php $icon = 'clock'; include __DIR__ . '/icon.php'; ?></span>
                    <span>
                        <span class="block text-[11px] font-semibold uppercase tracking-widest text-muted">Working Hours</span>
                        <span class="block font-semibold text-ink text-sm">Mon – Sat · 10–6</span>
                    </span>
                </span>
            </div>

            <!-- CTA + toggle -->
            <div class="flex items-center gap-3">
                <a href="<?= 'https://wa.me/' . SITE_WHATSAPP ?>" target="_blank" rel="noopener"
                   class="hidden md:inline-flex btn-shine items-center gap-2 bg-accent text-white px-6 py-3 rounded-full font-semibold text-sm hover:bg-accent-dark transition-colors">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2a9.9 9.9 0 00-8.5 14.95L2 22l5.2-1.5A9.96 9.96 0 1012.04 2zm5.78 14.14c-.24.68-1.4 1.3-1.93 1.35-.52.05-1 .24-3.36-.7-2.84-1.13-4.63-4.06-4.77-4.25-.14-.19-1.14-1.52-1.14-2.9 0-1.38.72-2.06 1-2.34.26-.28.57-.35.76-.35h.55c.18 0 .42-.07.66.5.24.58.82 2 .9 2.14.07.15.12.32.02.51-.1.19-.15.3-.3.47-.15.17-.32.38-.46.51-.15.15-.31.32-.13.62.18.31.8 1.32 1.72 2.14 1.18 1.05 2.18 1.38 2.49 1.53.31.16.49.13.67-.08.18-.2.77-.9.98-1.2.2-.31.41-.26.69-.16.29.1 1.84.87 2.15 1.03.32.16.53.24.6.37.08.13.08.77-.16 1.45z"/></svg>
                    Chat with us
                </a>
                <button id="menu-toggle" data-nav-link class="xl:hidden w-11 h-11 grid place-items-center rounded-xl bg-accent text-white" aria-label="Open menu" aria-expanded="false">
                    <svg id="icon-hamburger" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                    <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Nav bar -->
    <div class="header-navbar hidden xl:block">
        <div class="wrap flex items-center justify-between">
            <ul class="flex items-center">
                <li><a href="index.php" data-nav-link class="nav-link <?= $activeNav === 'home' ? 'nav-link-active' : '' ?>">Home</a></li>
                <li><a href="about.php" data-nav-link class="nav-link <?= $activeNav === 'about' ? 'nav-link-active' : '' ?>">About</a></li>
                <li class="group relative">
                    <a href="products.php" data-nav-link class="nav-link <?= $activeNav === 'products' ? 'nav-link-active' : '' ?>">
                        Collections
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6"/></svg>
                    </a>
                    <div class="header-dropdown">
                        <?php foreach ($categories as $cat): ?>
                            <a href="products.php?cat=<?= htmlspecialchars($cat['key']) ?>" data-nav-link>
                                <span class="w-11 h-11 rounded-xl overflow-hidden bg-mist shrink-0">
                                    <img src="assets/images/<?= $cat['folder'] ?>/<?= $cat['products'][0]['img'] ?>" alt="" class="w-full h-full object-cover" loading="lazy">
                                </span>
                                <span>
                                    <span class="block font-semibold text-ink"><?= $cat['label'] ?></span>
                                    <span class="block text-[11px] text-muted"><?= count($cat['products']) ?> designs</span>
                                </span>
                            </a>
                        <?php endforeach; ?>
                        <a href="gallery.php" data-nav-link class="!text-brand font-semibold !text-sm">
                            <span class="w-11 h-11 rounded-xl bg-ice grid place-items-center shrink-0 font-bold">+</span>
                            <span>View the lookbook</span>
                        </a>
                    </div>
                </li>
                <li><a href="gallery.php" data-nav-link class="nav-link <?= $activeNav === 'gallery' ? 'nav-link-active' : '' ?>">Lookbook</a></li>
                <li><a href="contact.php" data-nav-link class="nav-link <?= $activeNav === 'contact' ? 'nav-link-active' : '' ?>">Contact</a></li>
            </ul>

            <div class="flex items-center gap-3 py-3">
                <span class="inline-flex items-center gap-2 text-white/85 text-xs font-semibold uppercase tracking-widest">
                    <span class="w-2 h-2 rounded-full bg-accent"></span>Certified Craft
                </span>
                <a href="contact.php" data-nav-link class="btn-shine inline-flex items-center gap-2 bg-accent text-white px-6 py-2.5 rounded-full font-semibold text-sm hover:bg-accent-dark transition-colors">
                    Enquire <span>→</span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- ============ MOBILE MENU ============ -->
<div id="mobile-menu" class="fixed inset-0 z-40 xl:hidden pointer-events-none">
    <div id="mobile-backdrop" class="absolute inset-0 bg-choco/50 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
    <div id="mobile-panel" class="absolute right-0 top-0 h-full w-[80%] max-w-sm bg-white shadow-2xl translate-x-full transition-transform duration-500 ease-out flex flex-col">
        <div class="pt-20 pb-8 px-7 flex flex-col gap-1 overflow-y-auto" id="mobile-links">
            <a href="index.php" data-nav-link class="mobile-link font-display font-semibold text-xl text-ink py-3 border-b border-ice <?= $activeNav === 'home' ? 'text-brand' : '' ?>">Home</a>
            <a href="about.php" data-nav-link class="mobile-link font-display font-semibold text-xl text-ink py-3 border-b border-ice <?= $activeNav === 'about' ? 'text-brand' : '' ?>">About</a>

            <p class="font-display font-semibold text-xl text-ink py-3 border-b border-ice">Collections</p>
            <?php foreach ($categories as $cat): ?>
                <a href="products.php?cat=<?= htmlspecialchars($cat['key']) ?>" data-nav-link
                   class="mobile-link flex items-center gap-3 font-medium text-[15px] text-bodytext py-2 pl-3 border-b border-mist">
                    <span class="w-9 h-9 rounded-lg overflow-hidden bg-mist shrink-0">
                        <img src="assets/images/<?= $cat['folder'] ?>/<?= $cat['products'][0]['img'] ?>" alt="" class="w-full h-full object-cover" loading="lazy">
                    </span>
                    <?= $cat['label'] ?>
                </a>
            <?php endforeach; ?>

            <a href="gallery.php" data-nav-link class="mobile-link font-display font-semibold text-xl text-ink py-3 border-b border-ice <?= $activeNav === 'gallery' ? 'text-brand' : '' ?>">Lookbook</a>
            <a href="contact.php" data-nav-link class="mobile-link font-display font-semibold text-xl text-ink py-3 <?= $activeNav === 'contact' ? 'text-brand' : '' ?>">Contact</a>

            <a href="contact.php" data-nav-link class="mt-6 btn-shine inline-flex justify-center bg-accent text-white px-6 py-4 rounded-full font-semibold">Enquire →</a>
            <a href="<?= 'https://wa.me/' . SITE_WHATSAPP ?>" target="_blank" rel="noopener"
               class="mt-3 inline-flex justify-center items-center gap-2 bg-brand text-white px-6 py-4 rounded-full font-semibold">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2a9.9 9.9 0 00-8.5 14.95L2 22l5.2-1.5A9.96 9.96 0 1012.04 2zm5.78 14.14c-.24.68-1.4 1.3-1.93 1.35-.52.05-1 .24-3.36-.7-2.84-1.13-4.63-4.06-4.77-4.25-.14-.19-1.14-1.52-1.14-2.9 0-1.38.72-2.06 1-2.34.26-.28.57-.35.76-.35h.55c.18 0 .42-.07.66.5.24.58.82 2 .9 2.14.07.15.12.32.02.51-.1.19-.15.3-.3.47-.15.17-.32.38-.46.51-.15.15-.31.32-.13.62.18.31.8 1.32 1.72 2.14 1.18 1.05 2.18 1.38 2.49 1.53.31.16.49.13.67-.08.18-.2.77-.9.98-1.2.2-.31.41-.26.69-.16.29.1 1.84.87 2.15 1.03.32.16.53.24.6.37.08.13.08.77-.16 1.45z"/></svg>
                Chat on WhatsApp
            </a>
        </div>
        <p class="mt-auto px-7 py-5 text-xs text-muted border-t border-mist"><?= SITE_FULL ?> · <?= SITE_CITY ?></p>
    </div>
</div>