<?php
// San Bruno Water Damage Restoration — front controller / router. Plain PHP 8.
// Clean URLs, no trailing slash except the homepage. Slash forms of a
// no-slash route answer 308 to the no-slash form.
// Local only: no deploy, no domain, no external service calls.
$ROOT = __DIR__;
require $ROOT . '/data/pages.php';
require $ROOT . '/data/media.php';
require $ROOT . '/includes/functions.php';
require $ROOT . '/includes/lead-handler.php';

$PAGES = build_pages();
$TODAY = date('Y-m-d');

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$rawPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rawurldecode($rawPath);

// 1. Slash form of a no-slash route -> 308 to the no-slash form.
if ($path !== '/' && strlen($path) > 1 && str_ends_with($path, '/')) {
    $target = rtrim($path, '/');
    header('Location: ' . $target, true, 308);
    exit;
}

// 2. Sitemap (dynamic, loc + date-only lastmod).
if ($path === '/sitemap.xml') {
    header('Content-Type: application/xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    $all = array_merge(['/'], array_keys($PAGES));
    foreach ($all as $slug) {
        echo '  <url><loc>' . esc(site_url($slug)) . '</loc><lastmod>' . $TODAY . '</lastmod></url>' . "\n";
    }
    echo '</urlset>';
    exit;
}

// 3. Static files (assets, favicons, manifest, robots, llms).
$MIME = [
    'css' => 'text/css', 'js' => 'text/javascript', 'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg', 'png' => 'image/png', 'ico' => 'image/x-icon',
    'svg' => 'image/svg+xml', 'json' => 'application/manifest+json',
    'woff2' => 'font/woff2',
    'webmanifest' => 'application/manifest+json', 'txt' => 'text/plain',
    'xml' => 'application/xml',
];
$isStatic = str_starts_with($path, '/assets/') ||
    in_array($path, ['/favicon.ico', '/favicon.svg', '/favicon-16x16.png', '/favicon-32x32.png',
        '/favicon-48x48.png', '/favicon-192x192.png', '/favicon-512x512.png',
        '/apple-touch-icon.png', '/site.webmanifest', '/robots.txt', '/llms.txt'], true);
if ($isStatic) {
    $file = $ROOT . $path;
    if (is_file($file)) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        header('Content-Type: ' . ($MIME[$ext] ?? 'application/octet-stream'));
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
    http_response_code(404);
    echo 'Not found';
    exit;
}

// 4. Lead form submission (homepage or any known page). No mail is sent;
// the renderer shows an honest notice instead.
$form = null;
if ($method === 'POST' && ($path === '/' || isset($PAGES[$path]))) {
    $form = handle_lead_post($_POST);
}

// 5. Routes.
if ($path === '/') {
    render_home($form);
    exit;
}
if (isset($PAGES[$path])) {
    render_page($path, $PAGES[$path], $form);
    exit;
}

// 5b. Photo credits (P2-3 fix, 2026-11-15) — utility page, NOT in $PAGES:
// noindex, out of the sitemap (sitemap stays 28 locs). The slash form
// 308s to the no-slash form via rule 1 above, same as every route.
if ($path === '/photo-credits') {
    render_photo_credits();
    exit;
}

// 6. 404.
http_response_code(404);
$HEAD = [
    'title' => 'Page Not Found | ' . $SITE['brand'],
    'description' => 'The page you asked for is not here. Call ' . $SITE['phone'] . ' for 24/7 emergency water damage help in San Bruno, CA 94066.',
    // No canonical on a 404 (it must not canonicalise to the homepage) and
    // noindex: the 404 status already prevents indexing; the meta makes it explicit.
    'robots' => 'noindex, follow',
    'og_type' => 'website',
    'ld' => ld_json([ld_local_business()]),
];
$currentSlug = $path;
$show_map = false;
require $ROOT . '/includes/header.php';
?>
<section class="hero hero-short">
  <div class="container hero-content">
    <p class="eyebrow on-navy"><?= esc($HOME_META['eyebrow']) ?></p>
    <h1>Page Not Found</h1>
    <p class="hero-intro">The page you asked for is not here.</p>
    <div class="hero-ctas">
      <a class="btn btn-gold" href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a>
    </div>
  </div>
</section>
<?php
require $ROOT . '/includes/footer.php';
exit;

// ---------------------------------------------------------------------------
function hero_buttons($formTarget = '#request-service') {
    global $SITE;
    return '<div class="hero-ctas">' .
        '<a class="btn btn-gold" href="' . esc($SITE['phone_href']) . '">' . esc($SITE['phone']) . '</a>' .
        '<a class="btn btn-ivory" href="' . esc($formTarget) . '">Request Emergency Help</a>' .
        '</div>';
}

function call_strip() {
    global $SITE;
    return '<section class="call-strip"><div class="container">' .
        '<p>Call ' . esc($SITE['phone']) . ' now for water damage San Bruno 94066 help. A crew is dispatched immediately.</p>' .
        '<a class="btn btn-navy" href="' . esc($SITE['phone_href']) . '">' . esc($SITE['phone']) . '</a>' .
        '</div></section>';
}

function final_cta_compact($formTarget = '#request-service') {
    global $FINAL_CTA_H2, $FINAL_CTA_PARAS;
    $out = '<section class="final-cta"><div class="container"><div class="final-cta-card">';
    $out .= '<h2>' . esc($FINAL_CTA_H2) . '</h2>';
    $out .= '<p>' . esc($FINAL_CTA_PARAS[0]) . '</p>';
    $out .= hero_buttons($formTarget);
    $out .= '</div></div></section>';
    return $out;
}

// Photo credits page (P2-3 fix, 2026-11-15; +10 empty-slot Phase 2, 2026-11-15): standalone utility page
// listing the 38 images whose licences require attribution (CC BY /
// CC BY-SA). noindex, out of the sitemap, no canonical, no og:image.
// Usage labels + alt text are derived from $PAGE_IMG at render time;
// author / licence / source come from data/photo-credits.php.
function render_photo_credits() {
    global $ROOT, $SITE, $HOME_META, $SERVICES, $AREAS, $COST_GUIDE, $STORM_GUIDE, $PAGE_IMG, $IMG;
    require $ROOT . '/data/photo-credits.php';
    $HEAD = [
        'title' => 'Photo Credits | ' . $SITE['brand'],
        'description' => 'Photographers and licences for the Creative Commons images used on this site.',
        'robots' => 'noindex, follow',
        'og_type' => 'website',
        'ld' => ld_json([ld_local_business()]),
    ];
    $currentSlug = '/photo-credits';
    $show_map = false;
    $pageName = function ($slug) use ($SERVICES, $AREAS, $COST_GUIDE, $STORM_GUIDE) {
        if ($slug === '/') return 'Homepage';
        if ($slug === '/service-areas') return 'Service Areas';
        foreach ($SERVICES as $s) if ($s['slug'] === $slug) return $s['nav'];
        foreach ($AREAS as $a) if ($a['slug'] === $slug) return $a['city'] . ', CA';
        if ($slug === $COST_GUIDE['slug']) return 'Water Damage Restoration Cost';
        if ($slug === $STORM_GUIDE['slug']) return 'Belle Air Storm Flood Checklist';
        if (str_starts_with($slug, 'process-')) return 'Our Process, step ' . substr($slug, 8);
        return $slug;
    };
    $kindName = ['card' => 'service card', 'hero' => 'page hero', 'body-1' => 'body image', 'img' => 'process image'];
    $byFile = [];
    foreach ($PAGE_IMG as $slug => $kinds) {
        foreach ($kinds as $kind => $entry) {
            $f = $entry['file'];
            if (!isset($byFile[$f])) $byFile[$f] = ['alt' => $entry['alt'], 'uses' => []];
            $byFile[$f]['uses'][] = $pageName($slug) . ' — ' . ($kindName[$kind] ?? $kind);
        }
    }
    require $ROOT . '/includes/header.php';
    ?>
<section class="hero hero-short">
  <div class="container hero-content">
    <p class="eyebrow on-navy"><?= esc($HOME_META['eyebrow']) ?></p>
    <h1>Photo Credits</h1>
    <p class="hero-intro">Photographers and licences for the images on this site.</p>
  </div>
</section>
<section class="section"><div class="container content-block">
  <p>Photographs on this site come from Flickr and Wikimedia Commons. The 38 images listed below are shared under Creative Commons licences that require attribution. Each credit names the photographer, the licence, and a link to the source page. The other photographs on this site need no credit: they are public domain, CC0, or from Pexels.</p>
  <ul class="credit-list">
  <?php foreach ($PHOTO_CREDITS as $c):
      $info = $byFile[$c['file']] ?? ['alt' => $c['file'], 'uses' => []];
      // Thumbnail: the 400w variant when one exists (all 1280w/1088w/704w
      // files have one); 343w card files render as-is (already small).
      $stem = pathinfo($c['file'], PATHINFO_FILENAME);
      $thumbFile = $stem . '-400w.jpg';
      $thumb = is_file($ROOT . '/assets/img/' . $thumbFile)
          ? ['src' => $IMG . $thumbFile, 'alt' => $info['alt'], 'file' => $thumbFile]
          : ['src' => $IMG . $c['file'], 'alt' => $info['alt'], 'file' => $c['file']];
  ?>
    <li class="credit-item">
      <div class="credit-thumb"><?= img_tag($thumb, 400, 225) ?></div>
      <div class="credit-meta">
        <p><strong><?= esc($info['alt']) ?></strong></p>
        <p>Used on: <?= esc(implode('; ', $info['uses'])) ?></p>
        <p>Photographer: <?= esc($c['author']) ?> &middot; Licence: <a href="<?= esc($c['license_url']) ?>" target="_blank" rel="noopener"><?= esc($c['license']) ?></a> &middot; Source: <a href="<?= esc($c['source_url']) ?>" target="_blank" rel="noopener">View source</a></p>
      </div>
    </li>
  <?php endforeach; ?>
  </ul>
</div></section>
<?php
    require $ROOT . '/includes/footer.php';
}

function render_home($form = null) {
    global $ROOT, $SITE, $HOME_META, $TRUST, $FIRST_STEPS, $SERVICES, $SERVICES_H2,
        $SERVICES_INTRO, $WHY_H2, $WHY_INTRO, $WHY_REASONS, $PROCESS_H2,
        $PROCESS_INTRO, $PROCESS_STEPS, $CATEGORIES_H2, $CATEGORIES_INTRO,
        $CATEGORIES_BULLETS, $CATEGORIES_CLOSE, $HOODS_H2, $HOODS_INTRO, $HOODS,
        $HOODS_HUB_LINE, $NEARBY_H2, $NEARBY_INTRO, $AREAS, $BUSINESS_H2,
        $BUSINESS_PARA, $INSURANCE_H2, $INSURANCE_PARAS, $INSURANCE_BULLETS,
        $INSURANCE_CLOSE, $COST_H2, $COST_PARA, $STORM_H2, $STORM_INTRO,
        $STORM_BULLETS, $STORM_CLOSE, $CHOOSING_H2, $CHOOSING_INTRO,
        $CHOOSING_BULLETS, $CHOOSING_CLOSE, $FAQ_H2, $FAQS, $FINAL_CTA_H2,
        $FINAL_CTA_PARAS;
    $homeHero = page_img('/', 'hero');
    $homeOg = $homeHero ?: og_fallback_img();
    $HEAD = [
        'title' => $HOME_META['title'],
        'description' => $HOME_META['description'],
        'canonical' => site_url('/'),
        'og_type' => 'website',
        'og_image' => $homeOg ? site_url($homeOg['src']) : null,
        'ld' => ld_json([ld_local_business(), ld_website(), ld_webpage($homeHero ? site_url($homeHero['src']) : null), ld_breadcrumb_home(), ld_faq($FAQS), ld_howto($PROCESS_STEPS, $PROCESS_INTRO)]),
    ];
    $currentSlug = '/';
    $formTarget = '#request-service';
    $show_map = true;
    require $ROOT . '/includes/header.php';
    ?>
<section class="hero">
  <?php if ($homeHero): ?><div class="hero-media"><?= hero_img_tag($homeHero) ?></div><?php endif; ?>
  <div class="container hero-content">
    <p class="eyebrow on-navy"><?= esc($HOME_META['eyebrow']) ?></p>
    <h1><?= esc($HOME_META['h1']) ?></h1>
    <p class="hero-intro"><?= esc($HOME_META['intro']) ?></p>
    <?= hero_buttons() ?>
  </div>
</section>
<section class="trust-band"><div class="container"><ul>
  <?php foreach ($TRUST as $t): ?>
  <li><span class="check" aria-hidden="true">&#10003;</span><?= esc($t) ?></li>
  <?php endforeach; ?>
</ul></div></section>
<section class="section"><div class="container"><div class="split"><div class="content-block">
  <h2><?= esc($FIRST_STEPS['h2']) ?></h2>
  <?php foreach ($FIRST_STEPS['paras'] as $p): ?><p><?= esc($p) ?></p><?php endforeach; ?>
  <?= bullets_html($FIRST_STEPS['bullets']) ?>
</div><aside class="sticky-aside"><div class="brand-panel">
  <p class="panel-title">Emergency Water Damage?</p>
  <p>A crew is dispatched immediately.</p>
  <a class="btn btn-gold" href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a>
</div><div class="aside-call">
  <p>Water damage restoration in San Bruno, CA starts the moment you pick up the phone.</p>
  <a class="btn btn-navy" href="#request-service">Request Emergency Help</a>
</div></aside></div></div></section>
<section class="section section-cream" id="services"><div class="container content-block">
  <h2><?= esc($SERVICES_H2) ?></h2>
  <p class="lead"><?= esc($SERVICES_INTRO) ?></p>
  <div class="scroller-wrap">
    <button class="scroll-arrow scroll-prev" type="button" aria-label="Scroll services left">&lsaquo;</button>
    <div class="cards scroller">
    <?php foreach ($SERVICES as $c): $cimg = page_img($c['slug'], 'card'); ?>
    <article class="card">
      <?php if ($cimg): ?><div class="card-media"><?= img_tag($cimg, 1200, 675, 'lazy', '(max-width: 640px) 271px, 343px') ?></div><?php endif; ?>
      <div class="card-body"><h3><?= esc($c['h3']) ?></h3><?= card_para($c, '/') ?></div>
    </article>
    <?php endforeach; ?>
    </div>
    <button class="scroll-arrow scroll-next" type="button" aria-label="Scroll services right">&rsaquo;</button>
  </div>
</div></section>
<section class="section"><div class="container content-block">
  <h2><?= esc($WHY_H2) ?></h2>
  <p class="lead"><?= esc($WHY_INTRO) ?></p>
  <div class="cause-grid">
  <?php foreach ($WHY_REASONS as $c): ?>
  <div class="cause-card"><h3><?= esc($c['h3']) ?></h3><p><?= esc($c['text']) ?></p></div>
  <?php endforeach; ?>
  </div>
</div></section>
<section class="section section-navy"><div class="container content-block">
  <h2><?= esc($PROCESS_H2) ?></h2>
  <p class="lead"><?= esc($PROCESS_INTRO) ?></p>
  <div class="phase-grid">
    <?php foreach ($PROCESS_STEPS as $i => $s): $pimg = page_img('process-' . ($i + 1), 'img'); ?>
    <div class="phase-card">
      <?php if ($pimg): ?><div class="phase-media"><?= img_tag($pimg, 1200, 675, 'lazy', '(max-width: 640px) 348px, 343px') ?></div><?php endif; ?>
      <h3><?= esc($s['h3']) ?></h3><p><?= esc($s['text']) ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</div></section>
<section class="section section-tint"><div class="container content-block">
  <h2><?= esc($CATEGORIES_H2) ?></h2>
  <p><?= esc($CATEGORIES_INTRO) ?></p>
  <div class="cat-grid">
    <?php foreach ($CATEGORIES_BULLETS as $b):
        $pos = strpos($b, ': ');
        $lead = substr($b, 0, $pos); $rest = substr($b, $pos + 1);
    ?>
    <div class="cat-card"><p class="cat-title"><?= esc($lead) ?>:</p><p><?= esc(ltrim($rest)) ?></p></div>
    <?php endforeach; ?>
  </div>
  <p><?= esc($CATEGORIES_CLOSE) ?></p>
</div></section>
<section class="section"><div class="container content-block">
  <h2><?= esc($HOODS_H2) ?></h2>
  <p><?= esc($HOODS_INTRO) ?></p>
  <ul>
    <?php foreach ($HOODS as $h): ?>
    <li><?= esc($h) ?></li>
    <?php endforeach; ?>
  </ul>
  <?= render_para($HOODS_HUB_LINE, '/') ?>
</div></section>
<section class="section section-cream"><div class="container content-block">
  <h2><?= esc($NEARBY_H2) ?></h2>
  <p><?= esc($NEARBY_INTRO) ?></p>
</div>
<div class="container">
  <?php /* Area strip breaks out of the 88ch text column to the full container
         (watchdog Phase 1): 5 cards at 168px each cramped the city labels to
         3 lines; at full width each card is ~230px and labels fit in 2.
         Batch 1 (2026-11-13, user order): the upper text list of the 5 cities
         is REMOVED — the cards below carry the same doc links now (one link
         per target per page, on the card itself). */ ?>
  <div class="scroller-wrap">
    <button class="scroll-arrow scroll-prev" type="button" aria-label="Scroll nearby cities left">&lsaquo;</button>
    <div class="area-strip scroller">
    <?php foreach ($AREAS as $a): $aimg = page_img($a['slug'], 'card'); ?>
    <a class="area-card" href="<?= esc($a['slug']) ?>">
      <?= img_tag($aimg, 1200, 675, 'lazy', '(max-width: 640px) 217px, (max-width: 1020px) 309px, 230px') ?>
      <span><?= esc($a['line']) ?></span>
    </a>
    <?php endforeach; ?>
    </div>
    <button class="scroll-arrow scroll-next" type="button" aria-label="Scroll nearby cities right">&rsaquo;</button>
  </div>
</div></section>
<section class="section"><div class="container content-block">
  <h2><?= esc($BUSINESS_H2) ?></h2>
  <p><?= esc($BUSINESS_PARA) ?></p>
  <hr class="doc-divide">
  <h2><?= esc($INSURANCE_H2) ?></h2>
  <?php foreach ($INSURANCE_PARAS as $p): ?><p><?= esc($p) ?></p><?php endforeach; ?>
  <?= bullets_html($INSURANCE_BULLETS) ?>
  <p><?= esc($INSURANCE_CLOSE) ?></p>
  <hr class="doc-divide">
  <h2><?= esc($COST_H2) ?></h2>
  <?= render_para($COST_PARA, '/') ?>
  <hr class="doc-divide">
  <h2><?= esc($STORM_H2) ?></h2>
  <p><?= esc($STORM_INTRO) ?></p>
  <?= bullets_html($STORM_BULLETS) ?>
  <?= render_para($STORM_CLOSE, '/') ?>
  <hr class="doc-divide">
  <h2><?= esc($CHOOSING_H2) ?></h2>
  <p><?= esc($CHOOSING_INTRO) ?></p>
  <?= bullets_html($CHOOSING_BULLETS) ?>
  <p><?= esc($CHOOSING_CLOSE) ?></p>
</div></section>
<section class="section section-cream"><div class="container content-block">
  <h2><?= esc($FAQ_H2) ?></h2>
  <div class="faq-list">
    <?php foreach ($FAQS as $f): ?>
    <details open>
      <summary><h3><?= esc($f['q']) ?></h3><span class="faq-toggle" aria-hidden="true">+</span></summary>
      <div class="faq-answer"><p><?= esc($f['a']) ?></p></div>
    </details>
    <?php endforeach; ?>
  </div>
</div></section>
<?= call_strip() ?>
<section class="final-cta"><div class="container"><div class="final-cta-card">
  <h2><?= esc($FINAL_CTA_H2) ?></h2>
  <?php foreach ($FINAL_CTA_PARAS as $p): ?><p><?= esc($p) ?></p><?php endforeach; ?>
  <?= hero_buttons() ?>
</div>
<div class="form-wrap">
  <?php require $ROOT . '/includes/lead-form.php'; ?>
</div></div></section>
<?php
    require $ROOT . '/includes/footer.php';
}

function render_page($slug, $page, $form = null) {
    global $ROOT, $SITE, $HOME_META, $PAGES, $AREAS, $HOODS, $HOODS_INTRO, $HOODS_HUB_LINE, $NEARBY_INTRO, $STORM_INTRO, $STORM_BULLETS;
    $meta = page_meta($slug, $PAGES);
    $crumbs = [['label' => 'Home', 'href' => '/']];
    if (!empty($page['parent'])) $crumbs[] = $page['parent'];
    if ($page['type'] === 'service') {
        $crumbLabel = $page['summary']['nav'];
    } elseif ($page['type'] === 'area') {
        $crumbLabel = $page['area']['city'] . ', CA ' . $page['area']['zip'];
    } elseif ($page['type'] === 'guide') {
        $crumbLabel = $page['kind'] === 'cost' ? 'Water Damage Restoration Cost' : 'Belle Air Storm Flood Checklist';
    } elseif ($page['type'] === 'area-hub') {
        $crumbLabel = 'Service Areas';
    } else {
        $crumbLabel = $page['content']['crumb'] ?? $page['h1'];
    }
    $crumbs[] = ['label' => $crumbLabel];
    $pageHero = page_img($slug, 'hero');
    $pageOg = $pageHero ?: og_fallback_img();
    $heroUrl = $pageHero ? site_url($pageHero['src']) : null;
    // Social sharing falls back to the site-wide og image when a page has no
    // own hero (Cycle 3 P2-1); schema $heroUrl stays honest (null = no image).
    // Honest WebPage subtype where one applies (AboutPage / ContactPage).
    $wpType = $page['type'] === 'about' ? 'AboutPage'
            : ($page['type'] === 'contact' ? 'ContactPage' : 'WebPage');
    $graph = [ld_local_business(), ld_website(),
              ld_webpage_inner($slug, $meta['title'], $meta['description'],
                               $heroUrl, $wpType),
              ld_breadcrumb($crumbs, site_url($slug))];
    if ($page['type'] === 'service') {
        $graph[] = ld_service($page['summary']['h3'], 'San Bruno', $slug, $meta['description'], $heroUrl);
    }
    if ($page['type'] === 'area') {
        $graph[] = ld_service('Water Damage Restoration in ' . $page['area']['city'] . ', CA',
                              $page['area']['city'], $slug, $meta['description'], $heroUrl);
    }
    if ($page['type'] === 'area-hub') {
        $graph[] = ld_itemlist($slug);
    }
    if ($page['type'] === 'blog') {
        $graph[] = ld_blog($page, $slug);
    }
    if ($page['type'] === 'guide') {
        $graph[] = ld_article($page, $slug, $heroUrl);
    }
    $pageFaqs = !empty($page['content']['blocks']) ? page_faqs($page['content']['blocks']) : [];
    if ($pageFaqs) {
        $graph[] = ld_faq($pageFaqs, site_url($slug));
    }
    $HEAD = [
        'title' => $meta['title'],
        'description' => $meta['description'],
        'canonical' => site_url($slug),
        // Article pages share as og:type article; service/area/hub pages
        // stay website (no article type exists for them).
        'og_type' => in_array($page['type'], ['blog', 'guide'], true) ? 'article' : 'website',
        'og_image' => $pageOg ? site_url($pageOg['src']) : null,
        'ld' => ld_json($graph),
    ];
    $currentSlug = $slug;
    // Button 2 target, page-aware: service + contact pages carry the form on
    // the page; area / hub / guide pages have no form, so Button 2 goes to
    // the home form.
    $formTarget = in_array($page['type'], ['service', 'contact'], true) ? '#request-service' : '/#request-service';
    $show_map = !in_array($page['type'], ['area', 'area-hub'], true);
    require $ROOT . '/includes/header.php';
    ?>
<section class="hero hero-short">
  <?php if ($pageHero): ?><div class="hero-media"><?= hero_img_tag($pageHero) ?></div><?php endif; ?>
  <div class="container hero-content">
    <p class="eyebrow on-navy"><?= esc($page['content']['eyebrow'] ?? $HOME_META['eyebrow']) ?></p>
    <h1><?= esc($page['h1']) ?></h1>
    <?= hero_buttons($formTarget) ?>
  </div>
</section>
<section class="section"><div class="container content-block">
  <?= crumbs_html($crumbs) ?>
  <?php $blocks = $page['content']['blocks'];
        // Batch 1 item 10: service + area pages carry exactly one body
        // image (body-1) at the end of the first h2 section. No entry in
        // data/media.php yet => blocks unchanged, page renders as before.
        if (in_array($page['type'], ['service', 'area'], true)) {
            $blocks = blocks_with_body_img($blocks, $slug);
        }
        echo render_blocks(array_slice($blocks, 0, 1), $slug); ?>
  <?php $detail = page_img($slug, 'detail'); if ($detail): ?>
  <figure class="detail-figure"><?= img_tag($detail, 1200, 675) ?></figure>
  <?php endif; ?>
  <?= render_blocks(array_slice($blocks, 1), $slug) ?>
  <?php if (in_array($page['type'], ['service', 'contact'], true)): ?>
  <div class="form-wrap">
    <?php require $ROOT . '/includes/lead-form.php'; ?>
  </div>
  <?php endif; ?>

<?= call_strip() ?>
<?= final_cta_compact($formTarget) ?>
<?php
    require $ROOT . '/includes/footer.php';
}
