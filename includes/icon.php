<?php
/**
 * Inline SVG icon set. Expects: $icon (name). Outputs a stroke icon SVG.
 * Wrap in a sized container to size it.
 */
$icon = $icon ?? 'pencil';
$defs = [
    'check'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>',
    'pencil'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 20h9M16.5 3.5a2.12 2.12 0 013 3L7 19l-4 1 1-4 12.5-12.5z"/>',
    'cut'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 6h12M8 3l3 3-3 3M20 6a3 3 0 11-6 0 3 3 0 016 0zM6 18a3 3 0 100-6 3 3 0 000 6z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 15l3-3"/>',
    'thread'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 20L20 4M4 20l3-9 7-7M4 20l9-3"/><circle cx="20" cy="4" r="1.5"/>',
    'ribbon'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M8 21l2.5-3M16 21l-2.5-3M9 3h6l-1.5 4h-3L9 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9.5 7l-1.5 8h8l-1.5-8"/>',
    'search'   => '<circle cx="11" cy="11" r="7"/><path stroke-linecap="round" d="M21 21l-4.35-4.35"/>',
    'box'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8l-9-4-9 4v8l9 4 9-4V8zM3 8l9 4 9-4M12 12v9"/>',
    'pin'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1116 0z"/><circle cx="12" cy="10" r="3"/>',
    'phone'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8 10a16 16 0 006 6l1.3-1.3a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/>',
    'mail'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 5h16a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V6a1 1 0 011-1z"/><path stroke-linecap="round" stroke-linejoin="round" d="M3 7l9 6 9-6"/>',
    'clock'    => '<circle cx="12" cy="12" r="9"/><path stroke-linecap="round" d="M12 7v5l3 2"/>',
    'shield'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>',
    'leaf'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M20 4C11 4 5 9 5 16c0 3 1 5 1 5 0 0-3-4-2-9 1-5 8-8 16-8z"/><path stroke-linecap="round" stroke-linejoin="round" d="M3 21c3-3 7-7 11-9"/>',
    'heart'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z"/>',
    'star'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/>',
    'sparkle'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3l1.9 5.1L19 10l-5.1 1.9L12 17l-1.9-5.1L5 10l5.1-1.9z"/>',
];
$path = $defs[$icon] ?? $defs['pencil'];
?>
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="w-full h-full" aria-hidden="true"><?= $path ?></svg>