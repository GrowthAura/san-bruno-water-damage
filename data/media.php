<?php
// San Bruno Water Damage — image map (2026-11-11).
// ALL images are fresh for this site: real photographs from Pexels /
// Wikimedia Commons, re-encoded with PIL (16:9, metadata stripped),
// verified with qa/IMAGE-LOG.md.
// Alt text is place + topic (accessibility metadata describing the image);
// no on-site claim that any image is a real job photo.
// Structure: $PAGE_IMG[slug]['card'|'hero'|'body-1'] = ['file'=>..., 'alt'=>...]
// Process steps: $PAGE_IMG['process-1'..'process-7']['img'].
// Body images: exactly ONE 'body-1' per service page (hero + body-1 = 2
// images total). Captions are NOT wired (a <figcaption> would add visible
// words outside the doc-verbatim baseline); alt text carries the
// description. See qa/FINDINGS-BATCH1-SERVICE-BODY-2026-11-13.md.
// FLAGGED (no good photo found, entry omitted on purpose — page_img()
// returns null, so no image slot renders there): /structural-drying hero,
// /garage-in-law-unit-flooding (filled Batch 1), /hardwood-floor-water-damage,
// process-5 (filled Batch 1), /crawl-space-water-damage,
// /emergency-water-extraction, /water-heater-appliance-leak. See
// qa/IMAGE-LOG.md for the reasons; supply a real job photo to fill them.
// (Round 3, 2026-11-12: crawl-space, extraction and water-heater joined
// the flagged list — see IMAGE-LOG Round 3 appendix.)
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
// BATCH 1 FIX LOOP 2, 2026-11-14 (after final verifier P1-1..P1-4, qa/FINDINGS-BATCH1-REPLACEMENTS2-2026-11-14.md):
// 4 cross-site reuses (heavy 16:9 crops evading hash bands): mold body =
// Delaware Wilmington mold hero + Tulsa mold wall (a8 0/a16 1/MAD 0.18,
// pixel-identical); roof body = High Desert ceiling-tiles + Tulsa stain;
// structural card = Delaware + Tulsa air-movers; mold-2 card = Tulsa ceiling
// growth + Texas Fate. Replacements wired: mold body-v2 (Flickr black mold by
// window, CC BY-SA 2.0, 1.42x upscale), roof body-v2 (Flickr rotted ceiling
// with daylight through the hole, CC BY 2.0, 1.59x upscale, sharp at slot
// size), structural v3 (Flickr Dri-Eaz LGR 2800i dehumidifier, CC BY-SA 2.0 —
// model labels legible on the unit, incidental to the equipment), mold card-v2
// (Flickr bathroom mold above tiles, CC BY 2.0). 3 picks killed by nets
// (Delaware mold-wall, Delaware XPOWER, Texas dehumidifier). CC ATTRIBUTION
// stays 16 (4 removed all required it, 4 new all require it). No credit
// mechanism — open decision (his call).
// BATCH 1, 2026-11-13/14 (wiring, qa/FINDINGS-BATCH-IMAGES-2026-11-13.md):
// 8 heroes filled (burst-pipe, condo, garage, millbrae, cost, belle-air,
// roof-v2, commercial-v2 — fresh-disk nets CLEAR, see each child's
// findings), 5 process steps filled (2,3,5,6,7), 5 area photos replaced
// (wrong-city SF/Sausalito files deleted), 5 service cards + 5 body-1
// filled. Honestly empty after Batch 1: 9 hero slots (home, slab-leak,
// mold, structural-drying, hardwood, crawl-space, water-heater,
// emergency, sewage — sewage's old sink-scrub file deleted, no replacement
// exists), 5 card slots (burst-pipe, crawl-space, slab-leak, condo,
// hardwood) + emergency card (US Navy sailors photo REJECTED by the
// coordinator at wiring — military framing, not a local crew). Garage
// hero + card + body-1 are the SAME photo (Commons Miami garage flood,
// place-neutral) — the 343x193 card was re-created by the coordinator
// from the hero after the hero write overwrote the card file. Millbrae
// uses D's station photo (legible "GATEWAY @ MILLBRAE STATION"); B's
// hazy panorama (millbrae-ca-v2) is unused, kept in the backup dir.
// BATCH 1 FIX LOOP, 2026-11-14 (after Audits A + B, qa/FINDINGS-BATCH1-REPLACEMENTS-2026-11-14.md):
// Audit B rejected 4 heroes (commercial v2 = twice-rejected Slippery's sign;
// roof v2 = no leak cue; condo v2 = pristine tower, no damage cue; burst v2 =
// dripping garden tap) + process-3 (outdoor street pump) + water-heater card
// (Rheem brand ad) + garage body-1 (same photo as hero, MAD 0.16). Replacements
// wired: commercial v3 (flooded clothing shop, CC BY 2.5), roof v3 (collapsed
// bedroom ceiling from a roof leak, USDA public domain), condo v3 (silt-covered
// flooded kitchen, CC BY 2.0 — a house kitchen, not a condo unit; the damage cue
// is what the audit demanded and no condo-vs-house cue is visible in frame),
// garage body-v2 (night garage, Fiat 500 + Mini — a DIFFERENT photo from the
// same Miami series as the hero, a16 116 / MAD 46.12 vs hero), process-3 v2
// (indoor extraction, vacuum wand + red hose, CC BY-SA 4.0 — 600x450 source
// upscaled 1.17x to 704x396, clean at slot size), water-heater v2 (blue tank +
// leak puddle, CC BY 2.0, no dominant logo). Burst-pipe hero stays HONESTLY
// EMPTY (no true burst-spray photo found; every candidate banned/live/wrong).
// CC ATTRIBUTION now 16 wired images (was 13): + commercial v3, condo v3,
// process-3 v2. Still no credit mechanism — open decision (his call).
// DELIGHT ROUND, 2026-11-14 (user's live-review complaints after the 14:36
// push: no hero image, no photos on the service cards, favicon ugly; +
// Pass 5 P1-3 mobile scroller arrows). Wired: '/' hero (USGS public domain
// house in floodwater — first pick USFWS interior was KILLED, live on 3
// sites); 7 cards (emergency, burst-pipe, sewage, crawl-space, slab-leak,
// condo, hardwood — all viewed full-size by the coordinator, 13/13 distinct
// md5s, 0 aHash flags new-vs-new and new-vs-wired); 5 page heroes (burst,
// structural, crawl, water-heater, hardwood). Burst hero/cards collision
// caught: hero child's first pick (zerok 2389209453) was the card round's
// burst card — hero file removed, Rainbow 51749248749 installed instead.
// Honestly empty still: emergency hero (PunkToad pick rejected: soft 1.67x
// upscale, murky, no extraction cue), sewage hero (exhaustive search: only
// Bissell-branded close-ups), slab-leak + mold heroes. CC ATTRIBUTION now
// 27 (was 16: +6 cards, +5 page heroes; homepage hero is public domain).
// Favicon redesigned in this round too (Design A: navy + gold serif S).
// CC ATTRIBUTION OPEN (parent's call): Millbrae station CC BY 4.0, South
// San Francisco city hall CC BY-SA 3.0, Brisbane Visitacion CC BY-SA 4.0
// require attribution; the site has no photo-credit mechanism. Sources
// recorded in qa/manifest-millbrae.json. Never force a wrong or reused
// photo.

$IMG = '/assets/img/';

$PAGE_IMG = [
    '/' => [
        'hero'   => ['file' => 'water-damage-restoration-hero-san-bruno.jpg',
            'alt' => 'House standing in floodwater after a storm in San Bruno, CA'],
    ],
    '/emergency-water-extraction' => [
        'card'   => ['file' => 'emergency-water-extraction-card-san-bruno.jpg',
            'alt' => 'Flooded basement with standing water in San Bruno, CA'],
    ],
    '/burst-pipe-water-damage' => [
        'card'   => ['file' => 'burst-pipe-water-damage-card-san-bruno.jpg',
            'alt' => 'Water spraying from a burst pipe joint in San Bruno, CA'],
        'hero'   => ['file' => 'burst-pipe-water-damage-san-bruno.jpg',
            'alt' => 'Water bursting from a broken pipe joint in San Bruno, CA'],
    ],
    '/sewage-backup-cleanup' => [
        'card'   => ['file' => 'sewage-backup-cleanup-card-san-bruno.jpg',
            'alt' => 'Cleanup worker in protective gear hosing a flooded floor in San Bruno, CA'],
    ],
    '/crawl-space-water-damage' => [
        'card'   => ['file' => 'crawl-space-water-damage-card-san-bruno.jpg',
            'alt' => 'Standing water pooled on plastic sheeting in a crawl space in San Bruno, CA'],
        'hero'   => ['file' => 'crawl-space-water-damage-san-bruno.jpg',
            'alt' => 'Standing water in a crawl space in San Bruno, CA'],
    ],
    '/hardwood-floor-water-damage' => [
        'card'   => ['file' => 'hardwood-floor-water-damage-card-san-bruno.jpg',
            'alt' => 'Water-damaged hardwood floor with a lifted board in San Bruno, CA'],
        'hero'   => ['file' => 'hardwood-floor-water-damage-san-bruno.jpg',
            'alt' => 'Buckled hardwood floor from water damage in San Bruno, CA'],
    ],
    '/storm-flood-water-damage' => [
        'card'   => ['file' => 'storm-flood-water-damage-san-bruno.jpg',
            'alt' => 'Storm Flood Water Damage in San Bruno'],
        'hero'   => ['file' => 'storm-flood-water-damage-san-bruno.jpg',
            'alt' => 'Flooded road with a Road Closed Ahead sign after a storm near San Bruno, CA'],
    ],
    '/roof-leak-ceiling-water-damage' => [
        'card'   => ['file' => 'roof-leak-ceiling-water-damage-v3-san-bruno.jpg',
            'alt' => 'Roof Leak and Ceiling Water Damage in San Bruno'],
        'hero'   => ['file' => 'roof-leak-ceiling-water-damage-v3-san-bruno.jpg',
            'alt' => 'Bedroom ceiling collapsed from a roof leak, with torn plaster and exposed wood above a dresser in San Bruno, CA'],
        'body-1' => ['file' => 'roof-leak-ceiling-water-damage-body-v2-san-bruno.jpg',
            'alt' => 'Ceiling rotted through by a roof leak, with exposed joists and daylight showing through the hole in San Bruno, CA'],
    ],
    '/commercial-water-damage' => [
        'card'   => ['file' => 'commercial-water-damage-v3-san-bruno.jpg',
            'alt' => 'Commercial Water Damage in San Bruno'],
        'hero'   => ['file' => 'commercial-water-damage-v3-san-bruno.jpg',
            'alt' => 'Flood-damaged clothing shop interior with mud-stained clothes on racks above a wet tiled floor in San Bruno, CA'],
    ],
    '/condo-water-damage' => [
        'card'   => ['file' => 'condo-water-damage-card-san-bruno.jpg',
            'alt' => 'Living room wrecked by floodwater, with silt-covered furniture in San Bruno, CA'],
        'hero'   => ['file' => 'condo-water-damage-v3-san-bruno.jpg',
            'alt' => 'Kitchen interior wrecked by floodwater, with silt-covered counters and cabinets hanging open in San Bruno, CA'],
        'body-1' => ['file' => 'condo-water-damage-body-san-bruno.jpg',
            'alt' => 'Resident mopping water from the floor inside an apartment doorway'],
    ],
    '/garage-in-law-unit-flooding' => [
        'card'   => ['file' => 'garage-in-law-unit-flooding-card-san-bruno.jpg',
            'alt' => 'Flooded Garage and In-Law Unit Cleanup in San Bruno'],
        'hero'   => ['file' => 'garage-in-law-unit-flooding-san-bruno.jpg',
            'alt' => 'Car standing in floodwater inside a parking garage in San Bruno, CA'],
        'body-1' => ['file' => 'garage-in-law-unit-flooding-body-v2-san-bruno.jpg',
            'alt' => 'Cars standing in floodwater inside a parking garage at night in San Bruno, CA'],
    ],
    '/structural-drying' => [
        'card'   => ['file' => 'structural-drying-v3-san-bruno.jpg',
            'alt' => 'Commercial dehumidifier drying a room in San Bruno, CA'],
        'hero'   => ['file' => 'structural-drying-san-bruno.jpg',
            'alt' => 'Structural drying equipment in a San Bruno, CA home'],
    ],
    '/water-heater-appliance-leak' => [
        'card'   => ['file' => 'water-heater-appliance-leak-v2-san-bruno.jpg',
            'alt' => 'Water heater tank with a puddle of leaking water on the floor at its base in San Bruno, CA'],
        'hero'   => ['file' => 'water-heater-appliance-leak-san-bruno.jpg',
            'alt' => 'Leaking water heater in a San Bruno, CA basement'],
    ],
    '/mold-remediation' => [
        'card'   => ['file' => 'mold-remediation-card-v2-san-bruno.jpg',
            'alt' => 'Mold growth on a bathroom wall above white tiles in San Bruno, CA'],
        'body-1' => ['file' => 'mold-remediation-body-v2-san-bruno.jpg',
            'alt' => 'Black mold growth on a wall beside a window in San Bruno, CA'],
    ],
    '/slab-leak-hidden-leak-water-damage' => [
        'card'   => ['file' => 'slab-leak-hidden-leak-water-damage-card-san-bruno.jpg',
            'alt' => 'Water across a wood floor from a hidden leak in San Bruno, CA'],
        'body-1' => ['file' => 'slab-leak-hidden-leak-water-damage-body-san-bruno.jpg',
            'alt' => 'Moisture meter and leak-detection tools on a wood floor'],
    ],
    '/service-areas' => [
        'hero'   => ['file' => 'service-areas-san-bruno.jpg',
            'alt' => 'Hillside homes above the San Francisco Bay near San Bruno, CA'],
    ],
    '/millbrae-ca' => [
        'card'   => ['file' => 'millbrae-ca-station-san-bruno.jpg',
            'alt' => 'Water damage restoration in Millbrae, CA'],
        'hero'   => ['file' => 'millbrae-ca-station-san-bruno.jpg',
            'alt' => 'Millbrae Station in Millbrae, CA'],
    ],
    '/south-san-francisco-ca' => [
        'card'   => ['file' => 'south-san-francisco-ca-city-hall-san-bruno.jpg',
            'alt' => 'Water damage restoration in South San Francisco, CA'],
        'hero'   => ['file' => 'south-san-francisco-ca-city-hall-san-bruno.jpg',
            'alt' => 'South San Francisco Municipal Building in South San Francisco, CA'],
    ],
    '/pacifica-ca' => [
        'card'   => ['file' => 'pacifica-ca-pier-san-bruno.jpg',
            'alt' => 'Water damage restoration in Pacifica, CA'],
        'hero'   => ['file' => 'pacifica-ca-pier-san-bruno.jpg',
            'alt' => 'Pacifica Municipal Pier at sunset in Pacifica, CA'],
    ],
    '/burlingame-ca' => [
        'card'   => ['file' => 'burlingame-ca-avenue-san-bruno.jpg',
            'alt' => 'Water damage restoration in Burlingame, CA'],
        'hero'   => ['file' => 'burlingame-ca-avenue-san-bruno.jpg',
            'alt' => 'Downtown Burlingame Avenue in Burlingame, CA'],
    ],
    '/brisbane-ca' => [
        'card'   => ['file' => 'brisbane-ca-visitacion-san-bruno.jpg',
            'alt' => 'Water damage restoration in Brisbane, CA'],
        'hero'   => ['file' => 'brisbane-ca-visitacion-san-bruno.jpg',
            'alt' => 'Visitacion Avenue with San Bruno Mountain in Brisbane, CA'],
    ],
    '/resources/water-damage-restoration-cost-san-bruno' => [
        'hero'   => ['file' => 'water-damage-cost-san-bruno.jpg',
            'alt' => 'Floor plan with a tape measure and pen for a water damage repair estimate in San Bruno, CA'],
    ],
    '/resources/belle-air-storm-flood-checklist' => [
        'hero'   => ['file' => 'belle-air-checklist-san-bruno.jpg',
            'alt' => 'Sandbags and plastic sheeting along a road for flood protection in San Bruno, CA'],
    ],
    'process-1' => ['img' => ['file' => 'process-1-call-dispatch-san-bruno.jpg',
        'alt' => 'Emergency call and crew dispatch in San Bruno, CA']],
    'process-2' => ['img' => ['file' => 'process-2-wood-moisture-meter-san-bruno.jpg',
        'alt' => 'Technician checking wood moisture with a meter in San Bruno, CA']],
    'process-3' => ['img' => ['file' => 'process-3-water-extraction-v2-san-bruno.jpg',
        'alt' => 'Water extraction in progress indoors, with a vacuum wand and red hose on a wet concrete floor in San Bruno, CA']],
    'process-4' => ['img' => ['file' => 'process-4-removal-san-bruno.jpg',
        'alt' => 'Empty room with peeling walls and debris being stripped out in San Bruno, CA']],
    'process-5' => ['img' => ['file' => 'process-5-drying-equipment-san-bruno.jpg',
        'alt' => 'Dehumidifier and air mover drying a wood floor in San Bruno, CA']],
    'process-6' => ['img' => ['file' => 'process-6-sanitizing-clean-san-bruno.jpg',
        'alt' => 'Gloved hands sanitizing and cleaning a surface in San Bruno, CA']],
    'process-7' => ['img' => ['file' => 'process-7-drywall-repair-san-bruno.jpg',
        'alt' => 'Ceiling drywall repairs and rebuild in San Bruno, CA']],
];

function page_img($slug, $kind) {
    global $PAGE_IMG, $IMG;
    $entry = $PAGE_IMG[$slug][$kind] ?? null;
    if (!$entry) return null;
    return ['src' => $IMG . $entry['file'], 'alt' => $entry['alt'], 'file' => $entry['file']];
}

// CYCLE 3, 2026-11-13 — social-sharing fallback (qa/FINDINGS-OPT-SEO-2026-11-13.md
// P2-1): 14/28 pages have no own hero (9 honestly-empty hero slots + About,
// Contact and 3 blogs), so og:image/twitter:image would be absent on them.
// Fallback is a surviving, net-clean, on-service San Bruno photo (the storm-flood
// hero — kept PASS, full-size verified). Used ONLY for og:image/twitter:image;
// page heroes and schema images stay honest (null when a page has no hero).
function og_fallback_img() {
    return page_img('/storm-flood-water-damage', 'hero');
}

function img_tag($img, $w, $h, $loading = 'lazy') {
    if (!$img) return '';
    // Real file dimensions (Batch 1, 2026-11-13: files are 1280x720 heroes,
    // 343x193 cards, 704x396 process, 1088x612 body — the old 1600x900 /
    // 1200x675 claims in these comments were stale). Passed $w/$h remain
    // only as the fallback if the file cannot be read.
    if (!empty($img['file'])) {
        $size = @getimagesize(__DIR__ . '/../assets/img/' . $img['file']);
        if ($size) { $w = (int) $size[0]; $h = (int) $size[1]; }
    }
    return '<img src="' . esc($img['src']) . '" alt="' . esc($img['alt']) . '" width="' . (int) $w .
        '" height="' . (int) $h . '" loading="' . $loading . '">';
}

function hero_img_tag($img) {
    // Hero <img> with the file's REAL pixel dimensions. Heroes are 1280x720
    // (Batch 1); the old 1600x900 hard-code misstated the file (same 16:9,
    // so no CLS effect). Falls back to 1600x900 if the file cannot be read.
    if (!$img) return '';
    $w = 1600; $h = 900;
    if (!empty($img['file'])) {
        $size = @getimagesize(__DIR__ . '/../assets/img/' . $img['file']);
        if ($size) { $w = (int) $size[0]; $h = (int) $size[1]; }
    }
    return '<img src="' . esc($img['src']) . '" alt="' . esc($img['alt']) . '" width="' . $w .
        '" height="' . $h . '" fetchpriority="high">';
}
