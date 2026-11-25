<?php
/**
 * Shared <head>. Expects: $page (active nav key) and optional $title / $description.
 *
 * All SEO values (meta title/description/keywords, canonical, Open Graph, Twitter
 * cards, structured data, analytics/verification codes) are pulled from seo.php —
 * see that file for the editable SEO config.
 */
include __DIR__ . '/../config.php';
include __DIR__ . '/../seo.php';

$page     = $page ?? 'home';
$seoPg    = $SEO['pages'][$page] ?? [];
$pageTitle = $seoPg['title']        ?? ($title       ?? SITE_NAME);
$pageDesc  = $seoPg['description']  ?? ($description ?? SITE_TAGLINE);
$pageKw    = $seoPg['keywords']     ?? '';
$noindex   = !empty($seoPg['noindex']);

$pageFile  = basename($_SERVER['PHP_SELF'] ?: ($page . '.php'));
$canonical = $pageFile === 'index.php'
    ? rtrim($SEO['site_url'], '/') . '/'
    : seo_url($pageFile);

$ogRel     = ($seoPg['og_image'] ?? '') ?: $SEO['default_og_image'];
$ogAbs     = seo_url($ogRel);
$logoAbs   = seo_url('assets/images/TeddyTales.png') . '?v=2';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth selection:bg-honey selection:text-snout">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ================= Core SEO ================= -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
    <?php if ($pageKw): ?><meta name="keywords" content="<?= htmlspecialchars($pageKw) ?>"><?php endif; ?>
    <?php if ($noindex): ?>
        <meta name="robots" content="noindex, follow">
    <?php else: ?>
        <meta name="robots" content="index, follow, max-image-preview:large">
    <?php endif; ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
    <meta name="author" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta name="theme-color" content="#713719">
    <meta name="format-detection" content="telephone=no">

    <!-- Geo tags (India / Delhi) -->
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="Rithala, New Delhi">
    <meta name="geo.position" content="28.7086;77.1076">
    <meta name="ICBM" content="28.7086, 77.1076">

    <?php if ($SEO['google_site_verification']): ?>
        <meta name="google-site-verification" content="<?= htmlspecialchars($SEO['google_site_verification']) ?>">
    <?php endif; ?>
    <?php if ($SEO['bing_site_verification']): ?>
        <meta name="msvalidate.01" content="<?= htmlspecialchars($SEO['bing_site_verification']) ?>">
    <?php endif; ?>

    <!-- ================= Open Graph (Facebook / LinkedIn / WhatsApp) ================= -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogAbs) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_IN">

    <!-- ================= Twitter Card ================= -->
    <meta name="twitter:card" content="<?= $noindex ? 'summary' : 'summary_large_image' ?>">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogAbs) ?>">

    <!-- ================= Icons ================= -->
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    <link rel="apple-touch-icon" href="<?= htmlspecialchars($logoAbs) ?>">

    <?php if (strpos($canonical, 'index.php') === false && $page === 'home'): ?>
        <!-- LCP image hint (home page hero) -->
        <link rel="preload" as="image" href="<?= htmlspecialchars($ogAbs) ?>" fetchpriority="high">
    <?php endif; ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind (Play CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Brand — Teddy Tales cocoa brown
                        brand: { light: '#9A5630', DEFAULT: '#713719', dark: '#4A230F' },
                        // Accent — softened apricot, easier on the eye
                        accent: { light: '#F8CDAB', DEFAULT: '#F0A16A', dark: '#DE8549' },
                        // Copper for small accent text on cream
                        copper: { light: '#C97A45', DEFAULT: '#B15C24', dark: '#8E4519' },
                        // Soft peach from the logo, for gentle surfaces
                        peach: { light: '#FBE3CC', DEFAULT: '#F4D5B8', dark: '#E8BFA0' },
                        secondary: { light: '#F8CDAB', DEFAULT: '#F0A16A', dark: '#DE8549' },
                        ink: '#38251B',
                        bodytext: '#6B5545',
                        muted: '#927A68',
                        ice: '#FDF4E8',
                        mist: '#FFFBF6',
                        // Aliases so existing markup reads cleanly on the warm theme
                        cream: '#FDF4E8',
                        latte: '#F8E6D3',
                        honey: '#F0A16A',
                        cocoa: '#713719',
                        choco: '#4A230F',
                        snout: '#38251B',
                    },
                    fontFamily: {
                        display: ['Cormorant Garamond', 'Georgia', 'serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                },
            },
        };
    </script>

    <link rel="stylesheet" href="assets/css/style.css?v=7">
    <script defer src="assets/js/main.js?v=4"></script>

    <?php if ($SEO['google_analytics']): ?>
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars($SEO['google_analytics']) ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){ dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', '<?= htmlspecialchars($SEO['google_analytics']) ?>');
        </script>
    <?php endif; ?>

    <!-- ================= Structured data (JSON-LD) ================= -->
    <!-- Organization (sitewide) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?= htmlspecialchars(SITE_NAME) ?>",
        "url": "<?= htmlspecialchars(seo_url('')) ?>",
        "logo": "<?= htmlspecialchars($logoAbs) ?>",
        "description": "<?= htmlspecialchars(SITE_TAGLINE) ?>",
        "foundingDate": "<?= SITE_EST ?>",
        "email": "<?= htmlspecialchars(SITE_EMAIL) ?>",
        "telephone": "<?= htmlspecialchars(SITE_PHONE_RAW) ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Khasra No 986, Village Rithala, Near Rice Mill",
            "addressLocality": "Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110085",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?= htmlspecialchars(SITE_PHONE_RAW) ?>",
            "contactType": "sales",
            "areaServed": "IN",
            "availableLanguage": "en",
            "hoursAvailable": "Mo-Sa 10:00-18:00"
        },
        "sameAs": <?= json_encode($SEO['same_as']) ?>
    }
    </script>

    <!-- WebSite -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "<?= htmlspecialchars(SITE_NAME) ?>",
        "url": "<?= htmlspecialchars(seo_url('')) ?>",
        "inLanguage": "en-IN",
        "publisher": { "@id": "<?= htmlspecialchars(seo_url('')) ?>#organization" }
    }
    </script>

    <!-- Breadcrumb -->
    <?php if (!$noindex && $pageFile !== 'index.php'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?= htmlspecialchars(seo_url('')) ?>" },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "<?= htmlspecialchars(ucfirst($page === 'products' ? 'Products' : ($page === 'gallery' ? 'Gallery' : $page))) ?>",
                "item": "<?= htmlspecialchars($canonical) ?>"
            }
        ]
    }
    </script>
    <?php endif; ?>

</head>