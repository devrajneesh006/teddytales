<?php
/**
 * Product tile. Expects: $item ['img' => ..., 'name' => ...], $cat (category array) or $catKey.
 * Outputs an image card linking to the category page.
 */
$catKey  = $cat['key'] ?? ($catKey ?? '');
$folder  = $cat['folder'] ?? ($catKey);
$catName = $cat['label'] ?? 'Products';
?>
<a href="products.php?cat=<?= htmlspecialchars($catKey) ?>" data-nav-link
   class="product-tile group reveal-up flex flex-col h-full">
    <div class="aspect-square bg-mist overflow-hidden relative">
        <img src="assets/images/<?= htmlspecialchars($folder) ?>/<?= htmlspecialchars($item['img']) ?>"
             alt="<?= htmlspecialchars($item['name']) ?>"
             class="pt-img w-full h-full object-cover" loading="lazy">
        <span class="pt-badge absolute top-3 left-3 text-[10px] font-bold uppercase tracking-widest bg-white/90 text-brand rounded-full px-3 py-1 shadow-sm backdrop-blur-sm">
            <?= htmlspecialchars($catName) ?>
        </span>
        <span class="absolute inset-0 bg-gradient-to-t from-brand-dark/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500" aria-hidden="true"></span>
    </div>
    <div class="p-4 flex items-start justify-between gap-3">
        <h3 class="pt-name font-display font-bold text-ink text-[15px] leading-snug"><?= htmlspecialchars($item['name']) ?></h3>
        <span class="pt-arrow grid place-items-center w-8 h-8 shrink-0 rounded-full bg-ice text-brand">→</span>
    </div>
</a>