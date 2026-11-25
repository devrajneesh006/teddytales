<?php
/**
 * Shared footer: rolling marquee strip + contact/CTA + colophon.
 */
?>

<!-- Trust strip -->
<div class="relative bg-gradient-to-r from-peach via-cream to-peach py-4 overflow-hidden">
    <div class="marquee-wrap">
        <div class="marquee-track">
            <?php
            $chips = ['Certified Toys', 'Boutique Maker Since ' . SITE_EST, 'Wholesale & Bespoke', 'Child-Safe Materials', 'Atelier in ' . SITE_CITY, 'Considered Fabrics & Finishes'];
            for ($i = 0; $i < 2; $i++): ?>
                <span class="marquee-item">
                    <?php foreach ($chips as $chip): ?>
                        <span class="inline-flex items-center gap-2 font-bold text-brand text-sm bg-white/70 backdrop-blur-sm rounded-full px-5 py-2 border border-brand/10 transition-all duration-300 hover:bg-brand hover:text-white hover:scale-105 hover:-rotate-1 cursor-default">
                            <span class="w-2 h-2 rounded-full bg-accent inline-block"></span><?= $chip ?>
                        </span>
                    <?php endforeach; ?>
                </span>
            <?php endfor; ?>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-brand-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full glow-orange blur-3xl"></div>
        <div class="absolute bottom-0 -left-24 w-[30rem] h-[30rem] rounded-full glow-blue blur-3xl"></div>
        <div class="absolute inset-0 bg-grid-light opacity-20"></div>
    </div>

    <div class="relative wrap pt-16 pb-8">
        <div class="grid gap-12 lg:grid-cols-12">

            <!-- Brand + newsletter -->
            <div class="lg:col-span-4">
                <a href="index.php" data-nav-link class="inline-flex items-center">
                    <img src="assets/images/TeddyTales-light-trim.png?v=1" alt="Teddy Tales" class="h-20 lg:h-24 w-auto object-contain">
                </a>
                <p class="mt-6 max-w-sm text-white/65 text-sm leading-relaxed">
                    Est. <?= SITE_EST ?> — a boutique atelier in <?= SITE_CITY ?> making beautiful soft toys, signature teddies
                    and the fabrics that bring them to life. Made with care, sent with pride.
                </p>

                <form id="newsletter" class="mt-7 flex max-w-sm rounded-full bg-white/10 p-1.5 border border-white/10" novalidate>
                    <input id="newsletter-email" type="email" required placeholder="Your email for new collections"
                           class="flex-1 bg-transparent px-4 text-sm text-white placeholder:text-white/40 focus:outline-none">
                    <button type="submit" class="btn-shine shrink-0 bg-accent text-white font-semibold text-sm px-6 py-2.5 rounded-full hover:bg-accent-dark transition">Join us</button>
                </form>
                <p id="newsletter-msg" class="mt-3 text-xs text-accent opacity-0 transition-opacity"></p>

                <div class="mt-6 flex items-center gap-2">
                    <?php
                    $social = [
                        ['label' => 'F', 'title' => 'Facebook',   'href' => 'https://www.facebook.com'],
                        ['label' => 'I', 'title' => 'Instagram',  'href' => 'https://www.instagram.com'],
                        ['label' => 'W', 'title' => 'WhatsApp',   'href' => 'https://wa.me/' . SITE_WHATSAPP],
                        ['label' => 'Y', 'title' => 'YouTube',    'href' => 'https://www.youtube.com'],
                    ];
                    foreach ($social as $s): ?>
                        <a href="<?= $s['href'] ?>" target="_blank" rel="noopener" aria-label="<?= $s['title'] ?>"
                           class="social-link text-xs font-bold"><?= $s['label'] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Quick links -->
            <div class="lg:col-span-2">
                <h3 class="font-display text-lg mb-5 text-accent flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-accent rounded-full"></span>Quick Links
                </h3>
                <ul class="space-y-3 text-sm text-white/65">
                    <?php foreach ($navPages as $nav): ?>
                        <li><a href="<?= $nav['file'] ?>" data-nav-link class="inline-block hover:text-accent hover:translate-x-1 transition-all"><?= $nav['label'] ?></a></li>
                    <?php endforeach; ?>
                    <li><a href="products.php" data-nav-link class="inline-block hover:text-accent hover:translate-x-1 transition-all">Products</a></li>
                </ul>
            </div>

            <!-- Products -->
            <div class="lg:col-span-3">
                <h3 class="font-display text-lg mb-5 text-accent flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-accent rounded-full"></span>The Collections
                </h3>
                <ul class="space-y-3 text-sm text-white/65">
                    <?php foreach ($categories as $cat): ?>
                        <li>
                            <a href="products.php?cat=<?= htmlspecialchars($cat['key']) ?>" data-nav-link class="inline-block hover:text-accent hover:translate-x-1 transition-all">
                                <?= $cat['label'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact -->
            <div class="lg:col-span-3">
                <h3 class="font-display text-lg mb-5 text-accent flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-accent rounded-full"></span>Contact
                </h3>
                <ul class="space-y-4 text-sm text-white/65">
                    <li class="flex gap-3"><span class="w-4 h-4 text-accent mt-0.5"><?php $icon = 'pin'; include __DIR__ . '/icon.php'; ?></span>
                        <span>Khasra No 986, Village Rithala, Near Rice Mill,<br>Delhi-110085, Delhi, India</span></li>
                    <li class="flex gap-3"><span class="w-4 h-4 text-accent mt-0.5"><?php $icon = 'phone'; include __DIR__ . '/icon.php'; ?></span>
                        <a href="tel:<?= SITE_PHONE_RAW ?>" data-nav-link class="hover:text-accent transition-colors"><?= SITE_PHONE ?></a></li>
                    <li class="flex gap-3"><span class="w-4 h-4 text-accent mt-0.5"><?php $icon = 'mail'; include __DIR__ . '/icon.php'; ?></span>
                        <a href="mailto:<?= SITE_EMAIL ?>" data-nav-link class="hover:text-accent transition-colors"><?= SITE_EMAIL ?></a></li>
                    <li class="flex gap-3"><span class="w-4 h-4 text-accent mt-0.5"><?php $icon = 'clock'; include __DIR__ . '/icon.php'; ?></span><?= SITE_HOURS ?></li>
                </ul>
            </div>
        </div>

        <div class="mt-14 pt-7 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/40">
            <p>© <?= date('Y') ?> <?= SITE_FULL ?>, Delhi, India. All rights reserved.</p>
            <p class="flex items-center gap-2">
                <span>Signature plush · Teddy bears · Fabrics</span>
                <span class="w-1.5 h-1.5 rounded-full bg-accent inline-block"></span>
                <span><?= SITE_CITY ?></span>
            </p>
        </div>
    </div>
</footer>

<!-- Back to top -->
<button id="back-top" data-nav-link aria-label="Back to top"
        class="fixed bottom-6 right-6 z-40 w-12 h-12 rounded-full bg-accent text-white grid place-items-center shadow-lg opacity-0 translate-y-4 pointer-events-none transition-all duration-300 hover:-translate-y-1 hover:bg-accent-dark">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
    </svg>
</button>