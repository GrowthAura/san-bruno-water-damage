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

$IMG = '/assets/img/';

$PAGE_IMG = [
    '/' => [
        'hero' => ['file' => 'hero-san-bruno-water-damage.jpg',
            'alt' => 'Restoration crew extracting flood water from a home in San Bruno, CA'],
    ],
    '/burst-pipe-water-damage' => [
        'card'   => ['file' => 'burst-pipe-water-damage-san-bruno.jpg',
            'alt' => 'Burst Pipe Water Damage in San Bruno'],
        'hero'   => ['file' => 'burst-pipe-water-damage-san-bruno.jpg',
            'alt' => 'Plumber repairing a pipe with a wrench in San Bruno, CA'],
    ],
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
    '/slab-leak-hidden-leak-water-damage' => [
        'card'   => ['file' => 'slab-leak-hidden-leak-water-damage-san-bruno.jpg',
            'alt' => 'Slab Leak and Hidden Leak Water Damage in San Bruno'],
        'hero'   => ['file' => 'slab-leak-hidden-leak-water-damage-san-bruno.jpg',
            'alt' => 'Inspection team measuring a wall for a hidden leak in San Bruno, CA'],
    ],
    '/mold-remediation' => [
        'card'   => ['file' => 'mold-remediation-san-bruno.jpg',
            'alt' => 'Mold Remediation in San Bruno'],
        'hero'   => ['file' => 'mold-remediation-san-bruno.jpg',
            'alt' => 'Mold growth on a wall in San Bruno, CA'],
    ],
    '/condo-water-damage' => [
        'card'   => ['file' => 'condo-water-damage-san-bruno.jpg',
            'alt' => 'Condo Water Damage in San Bruno'],
        'hero'   => ['file' => 'condo-water-damage-san-bruno.jpg',
            'alt' => 'Modern condominium building in San Bruno, CA'],
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
    '/millbrae-ca' => [
        'card'   => ['file' => 'millbrae-ca-san-bruno.jpg',
            'alt' => 'Water damage restoration in Millbrae, CA'],
        'hero'   => ['file' => 'millbrae-ca-san-bruno.jpg',
            'alt' => 'Suburban street with palm trees in Millbrae, CA'],
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
    '/resources/water-damage-restoration-cost-san-bruno' => [
        'hero'   => ['file' => 'water-damage-restoration-cost-san-bruno.jpg',
            'alt' => 'Calculator on engineering blueprints for a restoration cost estimate in San Bruno, CA'],
    ],
    '/resources/belle-air-storm-flood-checklist' => [
        'hero'   => ['file' => 'belle-air-storm-flood-checklist-san-bruno.jpg',
            'alt' => 'Flood response team placing sandbags on a residential street near San Bruno, CA'],
    ],
    'process-1' => ['img' => ['file' => 'process-1-call-dispatch-san-bruno.jpg',
        'alt' => 'Emergency call and crew dispatch in San Bruno, CA']],
    'process-2' => ['img' => ['file' => 'process-2-inspection-san-bruno.jpg',
        'alt' => 'Moisture inspection measuring a wall in a home in San Bruno, CA']],
    'process-3' => ['img' => ['file' => 'process-3-extraction-san-bruno.jpg',
        'alt' => 'Water extraction vacuuming a floor in San Bruno, CA']],
    'process-4' => ['img' => ['file' => 'process-4-removal-san-bruno.jpg',
        'alt' => 'Empty room with peeling walls and debris being stripped out in San Bruno, CA']],
    'process-6' => ['img' => ['file' => 'process-6-cleaning-san-bruno.jpg',
        'alt' => 'Cleaning and sanitizing a tiled surface in San Bruno, CA']],
    'process-7' => ['img' => ['file' => 'process-7-repairs-san-bruno.jpg',
        'alt' => 'Repair work in progress in a home kitchen in San Bruno, CA']],
];

function page_img($slug, $kind) {
    global $PAGE_IMG, $IMG;
    $entry = $PAGE_IMG[$slug][$kind] ?? null;
    if (!$entry) return null;
    return ['src' => $IMG . $entry['file'], 'alt' => $entry['alt'], 'file' => $entry['file']];
}

function img_tag($img, $w, $h, $loading = 'lazy') {
    if (!$img) return '';
    return '<img src="' . esc($img['src']) . '" alt="' . esc($img['alt']) . '" width="' . (int) $w .
        '" height="' . (int) $h . '" loading="' . $loading . '">';
}
