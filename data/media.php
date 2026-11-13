<?php
// San Bruno Water Damage — image map (2026-11-11).
// ALL images are fresh for this site: real photographs from Pexels,
// re-encoded with PIL (16:9, metadata stripped), verified with qa/IMAGE-LOG.md.
// Alt text is place + topic (accessibility metadata describing the image);
// no on-site claim that any image is a real job photo.
// Structure: $PAGE_IMG[slug]['card'|'hero'] = ['file'=>..., 'alt'=>...]
// Process steps: $PAGE_IMG['process-1'..'process-7']['img'].
// FLAGGED (no photo on Pexels, entry omitted on purpose — page_img() returns
// null, so no image slot renders there): /structural-drying,
// /garage-in-law-unit-flooding, /hardwood-floor-water-damage, process-5,
// /crawl-space-water-damage, /emergency-water-extraction,
// /water-heater-appliance-leak. See qa/IMAGE-LOG.md for the reasons; supply a
// real job photo to fill them. (Round 3, 2026-11-12: crawl-space, extraction
// and water-heater joined the flagged list — see IMAGE-LOG Round 3 appendix.)
// CYCLE 1, 2026-11-13 — 7 more slots emptied on verified evidence, see
// qa/FINDINGS-OPT-IMAGES-2026-11-13.md: / (home hero, Pexels 6195275 — live
// on Owasso x3), /burst-pipe-water-damage (32588548 — legible Cyrillic
// "ТЕХНОБЫТСЕРВИС" branding, rejected by Lancaster/Acworth/Belleville for
// the same defect), /slab-leak-hidden-leak-water-damage (8482834 — live on
// Broken Arrow x2), /mold-remediation (17401392 — live on Midvale),
// /condo-water-damage (5033768 — live on Owasso x3), process-6 (4239007 —
// live on Broken Arrow x2), process-7 (15124970 — live on Owasso x3).
// FINISH, same cycle — 3 more, same evidence standard: /millbrae-ca
// (8406992 — Florida Gulf Coast beach-cottage streetscape, not Millbrae),
// /resources/water-damage-restoration-cost-san-bruno (5915147 — Russian
// blueprint, legible Cyrillic "2 фаски" / "Б-Б" annotations),
// /resources/belle-air-storm-flood-checklist (28447787 — Central-European
// streetscape, steep red-tile roofs + EU van).
// HASH NET, same cycle — 2 more reuses the ID net could not see (no Pexels
// ID in the other site's filenames/logs): process-2 (8470774 — SAME PHOTO as
// Plano's live moisture-mapping-visit-meter-photo.webp, a8=1/a16=10/MAD 6.4,
// viewed identical) and process-3 (7641000 — SAME PHOTO as Cape Coral's live
// /images/img-vacuum.jpg, a8=3, viewed identical; Cape Coral's file is
// a8=0/a16=1 vs the Pexels 7641000 CDN original).
// 19 honestly-empty slots total. Never force a wrong or reused photo.

$IMG = '/assets/img/';

$PAGE_IMG = [
    '/sewage-backup-cleanup' => [
        'card'   => ['file' => 'sewage-backup-cleanup-san-bruno.jpg',
            'alt' => 'Sewage Backup Cleanup in San Bruno'],
        'hero'   => ['file' => 'sewage-backup-cleanup-san-bruno.jpg',
            'alt' => 'Worker in gloves cleaning a bathroom sink in San Bruno, CA'],
    ],
    '/storm-flood-water-damage' => [
        'card'   => ['file' => 'storm-flood-water-damage-san-bruno.jpg',
            'alt' => 'Storm Flood Water Damage in San Bruno'],
        'hero'   => ['file' => 'storm-flood-water-damage-san-bruno.jpg',
            'alt' => 'Flooded road with a Road Closed Ahead sign after a storm near San Bruno, CA'],
    ],
    '/roof-leak-ceiling-water-damage' => [
        'card'   => ['file' => 'roof-leak-ceiling-water-damage-san-bruno.jpg',
            'alt' => 'Roof Leak and Ceiling Water Damage in San Bruno'],
        'hero'   => ['file' => 'roof-leak-ceiling-water-damage-san-bruno.jpg',
            'alt' => 'Roofer laying asphalt shingles on a rooftop in San Bruno, CA'],
    ],
    '/commercial-water-damage' => [
        'card'   => ['file' => 'commercial-water-damage-san-bruno.jpg',
            'alt' => 'Commercial Water Damage in San Bruno'],
        'hero'   => ['file' => 'commercial-water-damage-san-bruno.jpg',
            'alt' => 'Empty modern office space in San Bruno, CA'],
    ],
    '/service-areas' => [
        'hero'   => ['file' => 'service-areas-san-bruno.jpg',
            'alt' => 'Hillside homes above the San Francisco Bay near San Bruno, CA'],
    ],
    '/south-san-francisco-ca' => [
        'card'   => ['file' => 'south-san-francisco-ca-san-bruno.jpg',
            'alt' => 'Water damage restoration in South San Francisco, CA'],
        'hero'   => ['file' => 'south-san-francisco-ca-san-bruno.jpg',
            'alt' => 'Residential street in South San Francisco, CA'],
    ],
    '/pacifica-ca' => [
        'card'   => ['file' => 'pacifica-ca-san-bruno.jpg',
            'alt' => 'Water damage restoration in Pacifica, CA'],
        'hero'   => ['file' => 'pacifica-ca-san-bruno.jpg',
            'alt' => 'Coastal hillside homes above the ocean in Pacifica, CA'],
    ],
    '/burlingame-ca' => [
        'card'   => ['file' => 'burlingame-ca-san-bruno.jpg',
            'alt' => 'Water damage restoration in Burlingame, CA'],
        'hero'   => ['file' => 'burlingame-ca-san-bruno.jpg',
            'alt' => 'Tree-lined street with Victorian homes in Burlingame, CA'],
    ],
    '/brisbane-ca' => [
        'card'   => ['file' => 'brisbane-ca-san-bruno.jpg',
            'alt' => 'Water damage restoration in Brisbane, CA'],
        'hero'   => ['file' => 'brisbane-ca-san-bruno.jpg',
            'alt' => 'Hillside homes in Brisbane, CA'],
    ],
    'process-1' => ['img' => ['file' => 'process-1-call-dispatch-san-bruno.jpg',
        'alt' => 'Emergency call and crew dispatch in San Bruno, CA']],
    'process-4' => ['img' => ['file' => 'process-4-removal-san-bruno.jpg',
        'alt' => 'Empty room with peeling walls and debris being stripped out in San Bruno, CA']],
];

function page_img($slug, $kind) {
    global $PAGE_IMG, $IMG;
    $entry = $PAGE_IMG[$slug][$kind] ?? null;
    if (!$entry) return null;
    return ['src' => $IMG . $entry['file'], 'alt' => $entry['alt'], 'file' => $entry['file']];
}

// CYCLE 3, 2026-11-13 — social-sharing fallback (qa/FINDINGS-OPT-SEO-2026-11-13.md
// P2-1): 19/28 pages have no own hero (7 flagged empty + 12 emptied on verified
// reuse/relevance evidence), so og:image/twitter:image would be absent on them.
// Fallback is a surviving, net-clean, on-service San Bruno photo (the storm-flood
// hero — kept PASS, full-size verified). Used ONLY for og:image/twitter:image;
// page heroes and schema images stay honest (null when a page has no hero).
function og_fallback_img() {
    return page_img('/storm-flood-water-damage', 'hero');
}

function img_tag($img, $w, $h, $loading = 'lazy') {
    if (!$img) return '';
    // Real file dimensions (same fix as hero_img_tag): several card/process
    // files are 1600x900 while callers passed 1200x675. Same 16:9 either way,
    // so no layout change — the attributes now state the file correctly.
    // Passed $w/$h remain only as the fallback if the file cannot be read.
    if (!empty($img['file'])) {
        $size = @getimagesize(__DIR__ . '/../assets/img/' . $img['file']);
        if ($size) { $w = (int) $size[0]; $h = (int) $size[1]; }
    }
    return '<img src="' . esc($img['src']) . '" alt="' . esc($img['alt']) . '" width="' . (int) $w .
        '" height="' . (int) $h . '" loading="' . $loading . '">';
}

function hero_img_tag($img) {
    // Hero <img> with the file's REAL pixel dimensions. Nine hero files are
    // 1200x675 while the template used to hard-code 1600x900 (same 16:9, so
    // no CLS effect — but the attributes misstated the file). Falls back to
    // 1600x900 if the file cannot be read.
    if (!$img) return '';
    $w = 1600; $h = 900;
    if (!empty($img['file'])) {
        $size = @getimagesize(__DIR__ . '/../assets/img/' . $img['file']);
        if ($size) { $w = (int) $size[0]; $h = (int) $size[1]; }
    }
    return '<img src="' . esc($img['src']) . '" alt="' . esc($img['alt']) . '" width="' . $w .
        '" height="' . $h . '" fetchpriority="high">';
}
