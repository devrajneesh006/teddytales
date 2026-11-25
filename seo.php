<?php
/**
 * ==================================================================
 *  SEO CONFIGURATION — ONE FILE TO RULE THEM ALL
 * ==================================================================
 *  Every SEO-related value the site outputs (meta titles, descriptions,
 *  keywords, social sharing images, structured data, analytics / site
 *  verification codes) is controlled from this single file.
 *
 *  An SEO specialist can run the whole site without touching any page
 *  template or PHP logic: update a value here, and the <head> / JSON-LD
 *  output updates automatically on every page.
 *
 *  HOW IT IS USED
 *  ---------------
 *  • Each page sets a $page key (home | about | products | gallery | contact).
 *  • includes/head.php reads $SEO['pages'][$page] for that page's metadata.
 *  • Any page may still define its own $title / $description / $keywords —
 *    those are used only if no entry exists in $SEO['pages'].
 */

$SEO = [

    /* -------------------------------------------------------------
       SITE IDENTITY
       ------------------------------------------------------------- */
    'site_url'   => 'https://rudrafibre.in/',        // PRODUCTION URL (absolute, trailing slash)
    'site_name'  => SITE_NAME,

    // Default social-share image (Facebook, WhatsApp, LinkedIn, Twitter).
    // Best results: 1200 x 630 px. Point this to your own file when ready.
    'default_og_image' => 'assets/images/luxury/hero-teddy.jpg',

    /* -------------------------------------------------------------
       SEARCH ENGINE VERIFICATION + ANALYTICS
       Paste your codes here and the tags are injected automatically.
       ------------------------------------------------------------- */
    'google_site_verification' => '',                // <meta name="google-site-verification" ...>
    'bing_site_verification'   => '',                // <meta name="msvalidate.01" ...>
    'google_analytics'         => '',                // e.g. 'G-XXXXXXXXXX' — inserts gtag.js + config

    /* -------------------------------------------------------------
       SOCIAL PROFILES → appear in Organization structured data
       ("sameAs"). Uncomment lines and keep only the real ones.
       ------------------------------------------------------------- */
    'same_as' => [
        // 'https://www.facebook.com/teddytales',
        // 'https://www.instagram.com/teddytales',
        // 'https://www.youtube.com/@teddytales',
    ],

    /* -------------------------------------------------------------
       PER-PAGE META — titles, descriptions and keywords.
       "canonical" defaults to SITE_URL + page filename; override here
       only for special cases (e.g. a campaign page).
       ------------------------------------------------------------- */
    'pages' => [

        'home' => [
            'title'       => 'Boutique Teddy Bears, Plush & Fabrics in Delhi | Teddy Tales',
            'description' => 'Teddy Tales — boutique makers of certified soft toys, signature teddy bears and luxurious fabrics in Rithala, New Delhi. Wholesale and bespoke supply across India. Call +91 9811353012.',
            'keywords'    => 'boutique teddy bears delhi, luxury plush toys, soft toy manufacturer, polyboa fabric, super soft fabric, wholesale plush india',
            'og_image'    => '',                      // optional per-page override
        ],

        'about' => [
            'title'       => 'Our Story — Boutique Plush Makers Since 2010 | Teddy Tales',
            'description' => 'Teddy Tales, established 2010 in Rithala, New Delhi — a boutique atelier crafting certified teddy bears, soft toys and beautiful fabrics. Discover our story and standards.',
            'keywords'    => 'about teddy tales, soft toy company delhi, teddy bear factory india, toy fabric manufacturer, bis certified toys',
        ],

        'products' => [
            'title'       => 'The Collections — Teddy Bears, Plush & Luxury Fabrics | Teddy Tales',
            'description' => 'Explore the Teddy Tales collections: signature teddy bears, character plush, polyboa furs, super-soft and luxury fabrics. Wholesale and bespoke supply from Delhi.',
            'keywords'    => 'teddy bears wholesale, soft toys catalogue, polyboa fur fabric, super soft fabric india, plush toys bulk, toy making fabric',
        ],

        'gallery' => [
            'title'       => 'The Lookbook — Plush Toys & Fabrics | Teddy Tales',
            'description' => 'The Teddy Tales lookbook — teddy bears, unicorn and animal plush, polyboa furs and luxurious fabrics, photographed at our Rithala atelier.',
            'keywords'    => 'soft toys gallery, teddy bear photos, plush toys images, fabric samples india, toy manufacturer gallery',
        ],

        'contact' => [
            'title'       => 'Enquire — Samples, Wholesale & Bespoke Plush | Teddy Tales',
            'description' => 'Talk to Teddy Tales about wholesale quotes, sample packs and bespoke plush. Rithala, New Delhi. Call +91 9811353012, WhatsApp, or email megamartrudra@gmail.com.',
            'keywords'    => 'contact teddy tales, soft toys wholesale delhi, fabric supplier contact, teddy bear order, toy manufacturer enquiry',
        ],

        'error' => [
            'title'       => 'Page Not Found (404) | Teddy Tales',
            'description' => 'The page you are looking for could not be found. Browse our soft toys, teddy bears and fabrics instead.',
            'keywords'    => '404, page not found',
            'noindex'     => true,
        ],
    ],
];

/** Absolute URL helper (relative path → full URL). */
function seo_url($path = '')
{
    global $SEO;
    $base = rtrim($SEO['site_url'], '/');
    return $path === '' ? $base . '/' : $base . '/' . ltrim($path, '/');
}