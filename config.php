<?php
/**
 * Teddy Tales — Static site configuration.
 * All site content/data lives here so pages stay clean & data-driven.
 */

// ---------- Core ----------
define('SITE_NAME', 'Teddy Tales');
define('SITE_FULL', 'Teddy Tales');
define('SITE_TAGLINE', 'Boutique-quality soft toys, plush & fabrics, thoughtfully made in Rithala, New Delhi.');
define('SITE_EMAIL', 'megamartrudra@gmail.com');
define('SITE_PHONE', '+91 9811353012');
define('SITE_PHONE_RAW', '+919811353012');
define('SITE_WHATSAPP', '9811353012');
define('SITE_ADDRESS', 'Khasra No 986, Village Rithala, Near Rice Mill, Delhi-110085, India');
define('SITE_CITY', 'Rithala, New Delhi');
define('SITE_HOURS', 'Monday – Saturday · 10:00 AM – 6:00 PM');
define('SITE_EST', '2010');

// ---------- Navigation ----------
$navPages = [
    ['key' => 'home',     'label' => 'Home',     'file' => 'index.php'],
    ['key' => 'about',    'label' => 'About Us', 'file' => 'about.php'],
    ['key' => 'products', 'label' => 'Products', 'file' => 'products.php'],
    ['key' => 'gallery',  'label' => 'Gallery',  'file' => 'gallery.php'],
    ['key' => 'contact',  'label' => 'Contact',  'file' => 'contact.php'],
];

// ---------- Product categories ----------
$categories = [
    [
        'key'    => 'teddy-bears',
        'label'  => 'Teddy Bears',
        'folder' => 'premium/teddy',
        'desc'   => 'Signature teddy bears in considered colours, sizes and finishes — made to be kept.',
        'products' => [
            ['img' => '01.jpg', 'name' => 'Soft Fibre Red 5F Teddy Bear'],
            ['img' => '02.jpg', 'name' => 'Soft Fibre Pink 5F Teddy Bear'],
            ['img' => '03.jpg', 'name' => 'Soft Fibre Brown 6F Teddy Bear'],
            ['img' => '04.jpg', 'name' => 'Red & White Smart Teddy Bear'],
            ['img' => '05.jpg', 'name' => 'Maroon Cotton Teddy Bear'],
            ['img' => '06.jpg', 'name' => 'Pink Plush Rose Teddy Bear'],
            ['img' => '07.jpg', 'name' => 'Kawai Bear Doll Soft Teddy Bear'],
            ['img' => '08.jpg', 'name' => 'Unisex Teddy Bear Plush Toy'],
            ['img' => '09.jpg', 'name' => 'Musical Teddy Bear Soft Toy'],
            ['img' => '10.jpg', 'name' => 'Rabbit Doll Teddy Bear'],
            ['img' => '11.jpg', 'name' => 'Plush Teddy Bear (Gifting)'],
            ['img' => '12.jpg', 'name' => 'Pink Teddy Bear Soft Toy'],
        ],
    ],
    [
        'key'    => 'soft-toys',
        'label'  => 'Soft Toys',
        'folder' => 'premium/soft-toys',
        'desc'   => 'Whimsical animals, unicorns and character plush, crafted from beautifully durable materials.',
        'products' => [
            ['img' => '01.jpg', 'name' => 'Mustard Brown Plush Animal Soft Toy'],
            ['img' => '02.jpg', 'name' => 'Plush Orange Camel Soft Toy'],
            ['img' => '03.jpg', 'name' => 'Plush Yellow & Pink Unicorn Soft Toy'],
            ['img' => '04.jpg', 'name' => 'Fibre Pink & Yellow Unicorn Soft Toy'],
            ['img' => '05.jpg', 'name' => 'Plush Multi Colour Bal Ganesha Soft Toy'],
            ['img' => '06.jpg', 'name' => 'Plush Multicolour Camel Soft Toy'],
            ['img' => '07.jpg', 'name' => 'Plush Black Soft Toy'],
            ['img' => '08.jpg', 'name' => 'Light Pink Jerry Super Soft Toy'],
            ['img' => '09.jpg', 'name' => 'Teddy Town Rabbit Toy'],
            ['img' => '10.jpg', 'name' => 'Ziggy Gorilla Soft Toy'],
            ['img' => '11.jpg', 'name' => 'Teddy Town Kangaroo Soft Toy'],
            ['img' => '12.jpg', 'name' => 'Teddy Town Happy Giraffe Soft Toy'],
        ],
    ],
    [
        'key'    => 'raw-materials',
        'label'  => 'Raw Materials of Soft Toys',
        'folder' => 'premium/raw-materials',
        'desc'   => 'Plush, faux fur, nylex and velvet — a tactile library for the toy-making trade.',
        'products' => [
            ['img' => '01.jpg', 'name' => 'Pink-Purple Emboss Soft Toy Fabric'],
            ['img' => '02.jpg', 'name' => 'Brown Shine Soft Fur Fabric'],
            ['img' => '03.jpg', 'name' => 'Plain Super Soft Faux Fur'],
            ['img' => '04.jpg', 'name' => 'Moti Nylex Fabric'],
            ['img' => '05.jpg', 'name' => 'Multicolour Plain Soft Toys Fur Fabric'],
            ['img' => '06.jpg', 'name' => 'Blue Plain Soft Toys Plush Fabric'],
            ['img' => '07.jpg', 'name' => 'Super Soft Velvet Fabric'],
            ['img' => '08.jpg', 'name' => 'Soft Toy Fabric (Thickness Range)'],
            ['img' => '09.jpg', 'name' => 'Printed Nylex Fabric'],
            ['img' => '10.jpg', 'name' => 'Single Side Super Soft Fabric'],
            ['img' => '11.jpg', 'name' => 'Polyester Fur Lattu Stole Fabric'],
            ['img' => '12.jpg', 'name' => 'Soft Toys Faux Fur Fabric'],
        ],
    ],
    [
        'key'    => 'polyboa',
        'label'  => 'Polyboa 20mm',
        'folder' => 'premium/polyboa',
        'desc'   => 'Polyboa and long-pile furs — the fluffy, luxurious material behind a beautiful plush.',
        'products' => [
            ['img' => '01.jpg', 'name' => '20mm Polyboa Fur Fabric'],
            ['img' => '02.jpg', 'name' => 'Imported Long Fur Fabric'],
            ['img' => '03.jpg', 'name' => 'Long Pile Fur Fabric 110mm'],
            ['img' => '04.jpg', 'name' => '20mm Polyboa Polyester Fabric'],
            ['img' => '05.jpg', 'name' => 'Plain Soft Toy Polyboa Fur Fabric'],
            ['img' => '06.jpg', 'name' => 'Artificial Fur Fabric Polyboa 20mm'],
            ['img' => '07.jpg', 'name' => '7mm Polyboa Fur Fabric'],
            ['img' => '08.jpg', 'name' => '20mm Fur Fabric Sample'],
            ['img' => '09.jpg', 'name' => 'Brown Plain Polyboa Fur Fabric'],
            ['img' => '10.jpg', 'name' => 'Orange Plain Polyboa Fur Fabric'],
            ['img' => '11.jpg', 'name' => 'Plain White 20mm Polyboa Fur Fabric'],
            ['img' => '12.jpg', 'name' => '20mm Polyboa Fur Fabric (Blue)'],
        ],
    ],
    [
        'key'    => 'super-soft-fabric',
        'label'  => 'Super Soft Fabric',
        'folder' => 'premium/super-soft-fabric',
        'desc'   => 'Tencel, lycra, sherpa and printed super-soft fabrics — from 35 to 60 inches wide.',
        'products' => [
            ['img' => '01.jpg', 'name' => 'Super Soft Fabric'],
            ['img' => '02.jpg', 'name' => 'Tencel Roma Fabric'],
            ['img' => '03.jpg', 'name' => 'Super Soft Plain Fabric'],
            ['img' => '04.jpg', 'name' => '35–36 Inch Super Soft Fabric'],
            ['img' => '05.jpg', 'name' => 'Super Poly Fabric 60 Inches'],
            ['img' => '06.jpg', 'name' => 'Printed Super Soft Fabric'],
            ['img' => '07.jpg', 'name' => 'Brush Plain Fabric'],
            ['img' => '08.jpg', 'name' => '58–60 Inch Single Side Super Soft Fabric'],
            ['img' => '09.jpg', 'name' => 'EF Super Soft Fabric'],
            ['img' => '10.jpg', 'name' => 'Super Soft Lycra Fabric'],
            ['img' => '11.jpg', 'name' => 'Abstract Ring Sherpa Fur Fabric'],
            ['img' => '12.jpg', 'name' => '58–60 Inch Both-Side Super Soft Fabric'],
        ],
    ],
];

// ---------- Home slider ----------
$slides = [
    [
        'img'    => 'assets/images/luxury/hero-teddy.jpg',
        'eyebrow'=> 'The Art of Comfort',
        'title'  => 'Heirloom-quality teddy bears, made in Delhi',
        'text'   => 'Teddy Tales crafts collectible plush and child-safe soft toys with considered materials, careful stitching and a designer’s eye for detail.',
        'cta'    => ['products.php', 'Explore the collection'],
        'cta2'   => ['gallery.php', 'View the lookbook'],
        'note'   => 'BIS-certified batches · Hypoallergenic materials',
    ],
    [
        'img'    => 'assets/images/luxury/hero-gifting.jpg',
        'eyebrow'=> 'For Retailers & Makers',
        'title'  => 'Plush, gifts and fabrics — curated for wholesale',
        'text'   => 'From signature teddies to whimsical character plush, every piece is made to be held, loved and kept — then packed with care for your shop.',
        'cta'    => ['products.php', 'See the collections'],
        'cta2'   => ['contact.php', 'Request pricing'],
        'note'   => 'Thoughtful MOQs · Pan-India dispatch',
    ],
    [
        'img'    => 'assets/images/luxury/hero-fabric.jpg',
        'eyebrow'=> 'The Material Library',
        'title'  => 'Luxurious fur, velvet & super-soft fabrics',
        'text'   => 'A carefully chosen library of polyboa, minky, nylex and velvet — the textures that give every plush creation its soul.',
        'cta'    => ['products.php', 'Browse materials'],
        'cta2'   => ['contact.php', 'Request samples'],
        'note'   => 'Widths 20”–60” · Custom cutting available',
    ],
];

// ---------- Featured on homepage ----------
$featured = [
    ['img' => '01.jpg', 'name' => 'Signature Red Plush Bear',        'cat' => 'teddy-bears'],
    ['img' => '08.jpg', 'name' => 'The Everyday Keepsake Bear',      'cat' => 'teddy-bears'],
    ['img' => '03.jpg', 'name' => 'Celeste the Unicorn',              'cat' => 'soft-toys'],
    ['img' => '01.jpg', 'name' => '20mm Polyboa Luxury Fur',         'cat' => 'polyboa'],
    ['img' => '02.jpg', 'name' => 'Tencel Roma Super-Soft Fabric',   'cat' => 'super-soft-fabric'],
    ['img' => '04.jpg', 'name' => 'Moti Nylex Fabric',  'cat' => 'raw-materials'],
    ['img' => '02.jpg', 'name' => 'Blush Pink Signature Bear',       'cat' => 'teddy-bears'],
    ['img' => '12.jpg', 'name' => 'Giraffe & Friends Plush',         'cat' => 'soft-toys'],
];

// ---------- Stats ----------
$stats = [
    ['value' => 16,  'suffix' => '+', 'label' => 'Years of craft'],
    ['value' => 6,   'suffix' => '',  'label' => 'Curated collections'],
    ['value' => 500, 'suffix' => '+', 'label' => 'Original designs'],
    ['value' => 100, 'suffix' => '%', 'label' => 'Inspected pieces'],
];

// ---------- Key features / badges ----------
$features = [
    ['icon' => 'shield', 'title' => 'Certified Safety',    'text' => 'Every batch is made to conform to Indian toy-safety standards.'],
    ['icon' => 'heart',  'title' => 'Considered Materials', 'text' => 'Hypoallergenic plush and fills, chosen for little hands and long hugs.'],
    ['icon' => 'box',    'title' => 'Wholesale Partnerships', 'text' => 'Elegant carton packing and flexible MOQs for shops and exporters.'],
    ['icon' => 'pin',    'title' => 'Rithala Atelier',      'text' => 'A hands-on workshop in New Delhi — visit, touch the fabrics, choose your range.'],
];

// ---------- Fabrics & their qualities ----------
$fabrics = [
    ['name' => 'Plush',   'text' => 'Velvety, dense pile — the classic language of a teddy bear.'],
    ['name' => 'Fleece',  'text' => 'Warm and featherlight, gentle enough for baby’s first toy.'],
    ['name' => 'Velboa',  'text' => 'A short, smooth pile that keeps its shape beautifully.'],
    ['name' => 'Minky',   'text' => 'An indulgent, ultra-soft finish for heirloom plush.'],
    ['name' => 'Faux Fur','text' => 'A fluffy, lifelike texture with a conscience.'],
    ['name' => 'Cotton',  'text' => 'Natural, breathable and quietly sustainable.'],
    ['name' => 'Felt',    'text' => 'Durable, non-woven detail work that lasts.'],
    ['name' => 'Nylex',   'text' => 'Supple and resilient — made for endless hugs.'],
];

// ---------- Manufacturing steps ----------
$process = [
    ['step' => '01', 'icon' => 'pencil', 'title' => 'Design Studio',      'text' => 'Sketches, proportions and fabrics are considered — then a sample is stitched for approval.'],
    ['step' => '02', 'icon' => 'cut',    'title' => 'Precision Cutting',  'text' => 'Luxury plush and fur are cut to pattern by hand, with an eye on every grain.'],
    ['step' => '03', 'icon' => 'thread', 'title' => 'Stitch & Stuff',     'text' => 'Artisans shape each piece and fill it with hypoallergenic fibre, soft yet supportive.'],
    ['step' => '04', 'icon' => 'ribbon', 'title' => 'The Finishing Touch','text' => 'Faces, bows and signature details are set with care — the difference is in the small things.'],
    ['step' => '05', 'icon' => 'search', 'title' => 'Final Inspection',  'text' => 'Every toy is checked for seam strength, safety and the way it feels in your hands.'],
    ['step' => '06', 'icon' => 'box',    'title' => 'Packed with Care',   'text' => 'Carton-packed and dispatched across India, arriving ready for your shelves.'],
];

// ---------- Company facts (About) ----------
$companyFacts = [
    ['label' => 'Nature of Business',   'value' => 'Manufacturer, Supplier'],
    ['label' => 'Year of Establishment','value' => '2010'],
    ['label' => 'Number of Employees',  'value' => 'Upto 10 people'],
    ['label' => 'Market Covered',       'value' => 'India'],
    ['label' => 'Name of CEO',          'value' => 'Mr. Ravi Garg'],
    ['label' => 'Legal Status of Firm', 'value' => 'Individual (Sole proprietorship)'],
];

// ---------- Timeline (About) ----------
$timeline = [
    ['year' => '2010', 'text' => 'A small workshop opens in Rithala, Delhi — one stitch, one teddy at a time.'],
    ['year' => '2012', 'text' => 'The family grows to unicorns, woodland friends and character plush.'],
    ['year' => '2015', 'text' => 'Our fabric library opens to fellow makers, by the roll or by the metre.'],
    ['year' => '2018', 'text' => 'Polyboa 20mm and long-pile fur join the collection of signature textures.'],
    ['year' => '2021', 'text' => 'Super-soft, tencel and lycra ranges introduce a new level of softness.'],
    ['year' => '2026', 'text' => 'Six considered collections, certified production and partners across India.'],
];

// ---------- Testimonials ----------
$testimonials = [
    [
        'quote' => 'Our customers keep asking for “the soft ones from Delhi.” The finish is beautiful, the quality never wavers, and the packing is a pleasure to open.',
        'name'  => 'Rohit Sharma',
        'role'  => 'Gift Shop Owner, Delhi',
    ],
    [
        'quote' => 'The fabrics feel genuinely luxurious — our designers were delighted. Samples arrived quickly and the bulk order matched them exactly.',
        'name'  => 'Priya Nair',
        'role'  => 'Soft Toy Designer, Mumbai',
    ],
    [
        'quote' => 'A rare combination: thoughtful design, dependable craft and a team who truly understands an export order. Our plush range sold out.',
        'name'  => 'Ahmed Khan',
        'role'  => 'Plush Toys Exporter, Dubai',
    ],
];

// ---------- Values ----------
$values = [
    ['icon' => 'shield', 'title' => 'Safety, Always',   'text' => 'Certified, child-safe materials and a careful check before anything leaves the workshop.'],
    ['icon' => 'heart',  'title' => 'Beautiful Finish', 'text' => 'Hand-set faces, precise stitching and sumptuous fabrics on every single piece.'],
    ['icon' => 'star',   'title' => 'Trusted Since 2010','text' => 'Sixteen years of thoughtful making for shops, labels and exporters across India.'],
];