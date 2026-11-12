<?php
// San Bruno Water Damage Restoration — shared helpers. Written fresh for
// this site.

function esc($s) {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}

function site_url($slug = '/') {
    global $SITE;
    $base = rtrim($SITE['url'], '/');
    if ($slug === '/' || $slug === '') return $base . '/';
    return $base . '/' . ltrim($slug, '/');
}

function phone_link($text = null) {
    global $SITE;
    $label = $text === null ? $SITE['phone'] : $text;
    return '<a href="' . esc($SITE['phone_href']) . '">' . esc($label) . '</a>';
}

// Wrap the FIRST occurrence of $anchor inside $text in a link.
// The words stay verbatim; only the short span becomes the anchor.
// If the link points at the page being rendered, no link is emitted at all
// (body copy never links to itself).
function linkify($text, $anchor, $href, $currentSlug = null) {
    if ($href === $currentSlug || $anchor === '' || $anchor === null) {
        return esc($text);
    }
    $pos = mb_strpos($text, $anchor);
    if ($pos === false) {
        return esc($text);
    }
    $before = mb_substr($text, 0, $pos);
    $after  = mb_substr($text, $pos + mb_strlen($anchor));
    return esc($before) . '<a href="' . esc($href) . '">' . esc($anchor) . '</a>' . esc($after);
}

// A paragraph array: ['text' => ..., 'anchor' => ..., 'href' => ...]
// or a plain string paragraph.
function render_para($para, $currentSlug = null) {
    if (is_string($para)) {
        return '<p>' . esc($para) . '</p>';
    }
    $html = '<p>';
    if (!empty($para['anchor']) && !empty($para['href'])) {
        $html .= linkify($para['text'], $para['anchor'], $para['href'], $currentSlug);
    } else {
        $html .= esc($para['text']);
    }
    return $html . '</p>';
}

// A paragraph or list item with MULTIPLE doc links:
// ['text' => ..., 'links' => [['anchor' => ..., 'href' => ...], ...]]
// Anchors are applied left-to-right; a link to the page being rendered is
// skipped (body copy never links to itself). Text stays verbatim.
function linkify_multi($para, $currentSlug = null) {
    if (is_string($para)) {
        return esc($para);
    }
    $text = $para['text'];
    if (empty($para['links'])) {
        return esc($text);
    }
    $out = '';
    $pos = 0;
    foreach ($para['links'] as $l) {
        if ($l['href'] === $currentSlug) {
            continue;
        }
        $at = mb_strpos($text, $l['anchor'], $pos);
        if ($at === false) {
            continue;
        }
        $out .= esc(mb_substr($text, $pos, $at - $pos));
        $out .= '<a href="' . esc($l['href']) . '">' . esc($l['anchor']) . '</a>';
        $pos = $at + mb_strlen($l['anchor']);
    }
    $out .= esc(mb_substr($text, $pos));
    return $out;
}

function render_para_multi($para, $currentSlug = null) {
    return '<p>' . linkify_multi($para, $currentSlug) . '</p>';
}

function bullets_multi_html($items, $currentSlug = null) {
    $out = '<ul>';
    foreach ($items as $it) {
        $out .= '<li>' . linkify_multi($it, $currentSlug) . '</li>';
    }
    return $out . '</ul>';
}

// Render one page's full tab content blocks in doc order. FAQ items render
// as <details> accordions (homepage pattern); their Q&A are collected by
// page_faqs() for FAQPage schema.
function render_blocks($blocks, $currentSlug = null) {
    $out = '';
    $faqOpen = false;
    foreach ($blocks as $b) {
        if (isset($b['faq'])) {
            if (!$faqOpen) {
                $out .= '<div class="faq-list">';
                $faqOpen = true;
            }
            $f = $b['faq'];
            $out .= '<details><summary><h3>' . esc($f['q']) . '</h3>'
                . '<span class="faq-toggle" aria-hidden="true">+</span></summary>'
                . '<div class="faq-answer">';
            foreach ($f['a'] as $ap) {
                $out .= render_para_multi($ap, $currentSlug);
            }
            $out .= '</div></details>';
            continue;
        }
        if ($faqOpen) {
            $out .= '</div>';
            $faqOpen = false;
        }
        if (isset($b['h2'])) {
            $out .= '<h2>' . esc($b['h2']) . '</h2>';
        } elseif (isset($b['h3'])) {
            $out .= '<h3>' . esc($b['h3']) . '</h3>';
        } elseif (isset($b['p'])) {
            $out .= render_para_multi($b['p'], $currentSlug);
        } elseif (isset($b['ul'])) {
            $out .= bullets_multi_html($b['ul'], $currentSlug);
        }
    }
    if ($faqOpen) {
        $out .= '</div>';
    }
    return $out;
}

// All FAQ Q&A on a page, in doc order, for FAQPage schema.
function page_faqs($blocks) {
    $faqs = [];
    foreach ($blocks as $b) {
        if (isset($b['faq'])) {
            $texts = [];
            foreach ($b['faq']['a'] as $ap) {
                $texts[] = is_string($ap) ? $ap : $ap['text'];
            }
            $faqs[] = ['q' => $b['faq']['q'], 'a' => implode(' ', $texts)];
        }
    }
    return $faqs;
}

// Service card paragraph: body + closing sentence verbatim, with only the
// short anchor span linked.
function card_para($card, $currentSlug = null) {
    $sentence = linkify($card['sentence'], $card['anchor'], $card['slug'], $currentSlug);
    return '<p>' . esc($card['body']) . ' ' . $sentence . '.</p>';
}

function bullets_html($items) {
    $out = '<ul>';
    foreach ($items as $it) {
        $out .= '<li>' . esc($it) . '</li>';
    }
    return $out . '</ul>';
}

// ---- Page map: every route the site serves -------------------------------
// Inner pages carry their OWN tab's full content verbatim (rebuild
// 2026-11-12, $PAGE_CONTENT in data/pages.php). No words are invented.
function build_pages() {
    global $SERVICES, $AREAS, $COST_GUIDE, $STORM_GUIDE, $PAGE_CONTENT;
    $pages = [];

    foreach ($SERVICES as $c) {
        $ct = $PAGE_CONTENT[$c['slug']];
        $pages[$c['slug']] = [
            'type' => 'service', 'h1' => $ct['h1'], 'kind' => 'service',
            'summary' => $c, 'parent' => null, 'content' => $ct,
        ];
    }
    foreach ($AREAS as $a) {
        $ct = $PAGE_CONTENT[$a['slug']];
        $pages[$a['slug']] = [
            'type' => 'area',
            'h1' => $ct['h1'],
            'kind' => 'area', 'area' => $a,
            'parent' => ['label' => 'Service Areas', 'href' => '/service-areas'],
            'content' => $ct,
        ];
    }
    $pages['/service-areas'] = [
        'type' => 'area-hub',
        'h1' => $PAGE_CONTENT['/service-areas']['h1'],
        'kind' => 'area-hub', 'parent' => null,
        'content' => $PAGE_CONTENT['/service-areas'],
    ];
    $pages[$COST_GUIDE['slug']] = [
        'type' => 'guide', 'h1' => $PAGE_CONTENT[$COST_GUIDE['slug']]['h1'], 'kind' => 'cost',
        'guide' => $COST_GUIDE, 'parent' => null,
        'content' => $PAGE_CONTENT[$COST_GUIDE['slug']],
    ];
    $pages[$STORM_GUIDE['slug']] = [
        'type' => 'guide', 'h1' => $PAGE_CONTENT[$STORM_GUIDE['slug']]['h1'], 'kind' => 'storm',
        'guide' => $STORM_GUIDE, 'parent' => null,
        'content' => $PAGE_CONTENT[$STORM_GUIDE['slug']],
    ];
    // New routes from the full doc read (Tabs 02, 03, 24, 26, 27).
    foreach (['/about', '/contact',
              '/resources/san-bruno-sewer-lateral-inspection',
              '/resources/old-pipe-warning-signs-san-bruno',
              '/resources/peninsula-fog-mold-prevention'] as $slug) {
        $ct = $PAGE_CONTENT[$slug];
        $pages[$slug] = [
            'type' => $ct['type'], 'h1' => $ct['h1'], 'kind' => $ct['kind'],
            'parent' => null, 'content' => $ct,
        ];
    }
    return $pages;
}

// Truncate a meta description to <=160 chars at a sentence boundary if one
// ends within the limit, else at the last word boundary. Verbatim words only.
function meta_desc($text) {
    $text = trim(preg_replace('/\s+/', ' ', $text));
    if (mb_strlen($text) <= 160) return $text;
    $cut = mb_substr($text, 0, 160);
    $best = -1;
    foreach (array('. ', '! ', '? ') as $sep) {
        $p = mb_strrpos($cut, $sep);
        if ($p !== false && $p > $best) $best = $p;
    }
    if ($best > 0) return mb_substr($cut, 0, $best + 1);
    $sp = mb_strrpos($cut, ' ');
    if ($sp !== false && $sp > 100) return mb_substr($cut, 0, $sp);
    return rtrim($cut);
}

function page_meta($slug, $pages) {
    global $HOME_META, $SITE;
    if ($slug === '/') {
        return ['title' => $HOME_META['title'], 'description' => $HOME_META['description']];
    }
    $p = $pages[$slug];
    // Rebuild 2026-11-12: every inner page carries its own tab's verbatim
    // meta title + description (max 70ch / 153ch in the doc — used as-is).
    if (!empty($p['content']['meta'])) {
        return ['title' => $p['content']['meta']['title'],
                'description' => $p['content']['meta']['description']];
    }
    // Title = H1 alone: every inner H1 is <=57 chars, so all titles stay <=60
    // (the old ' | Brand' suffix pushed all 22 inner titles to 66-94 chars).
    if ($p['type'] === 'service') {
        return ['title' => $p['h1'], 'description' => meta_desc($p['summary']['body'])];
    }
    if ($p['type'] === 'guide' && $p['kind'] === 'cost') {
        return ['title' => $p['h1'], 'description' => meta_desc($p['guide']['para']['text'])];
    }
    if ($p['type'] === 'guide' && $p['kind'] === 'storm') {
        return ['title' => $p['h1'], 'description' => meta_desc($p['guide']['intro'])];
    }
    if ($p['type'] === 'area') {
        return ['title' => $p['h1'],
                'description' => 'Water damage restoration in ' . $p['area']['city'] . ', CA ' . $p['area']['zip'] . '. Call ' . $SITE['phone'] . ' now.'];
    }
    if ($p['type'] === 'area-hub') {
        return ['title' => $p['h1'],
                'description' => 'Water damage restoration across San Bruno, CA 94066 and the nearby Peninsula cities. Call ' . $SITE['phone'] . ' now.'];
    }
    return ['title' => $p['h1'],
            'description' => 'Water damage restoration in San Bruno, CA 94066. Call ' . $SITE['phone'] . ' now.'];
}

// ---- JSON-LD -------------------------------------------------------------
function ld_local_business() {
    global $SITE;
    return [
        '@type' => 'LocalBusiness',
        '@id' => site_url('/') . '#business',
        'name' => $SITE['brand'],
        'description' => '24/7 emergency water damage restoration in San Bruno, CA 94066. Crew dispatched immediately.',
        'telephone' => $SITE['phone'],
        'url' => site_url('/'),
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'San Bruno',
            'addressRegion' => 'CA',
            'postalCode' => '94066',
            'addressCountry' => 'US',
        ],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'San Bruno'],
            ['@type' => 'City', 'name' => 'South San Francisco'],
            ['@type' => 'City', 'name' => 'Millbrae'],
            ['@type' => 'City', 'name' => 'Pacifica'],
            ['@type' => 'City', 'name' => 'Burlingame'],
            ['@type' => 'City', 'name' => 'Brisbane'],
            ['@type' => 'AdministrativeArea', 'name' => 'San Mateo County'],
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            'opens' => '00:00', 'closes' => '23:59',
        ],
    ];
}

function ld_website() {
    global $SITE;
    return [
        '@type' => 'WebSite',
        '@id' => site_url('/') . '#website',
        'url' => site_url('/'),
        'name' => $SITE['brand'],
    ];
}

function ld_breadcrumb($crumbs) {
    $items = [];
    $i = 1;
    foreach ($crumbs as $c) {
        $item = ['@type' => 'ListItem', 'position' => $i, 'name' => $c['label']];
        if (!empty($c['href'])) $item['item'] = site_url($c['href']);
        $items[] = $item;
        $i++;
    }
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

function ld_webpage() {
    global $SITE, $HOME_META;
    return [
        '@type' => 'WebPage',
        '@id' => site_url('/') . '#webpage',
        'url' => site_url('/'),
        'name' => $HOME_META['title'],
        'isPartOf' => ['@id' => site_url('/') . '#website'],
        'about' => ['@id' => site_url('/') . '#business'],
        'speakable' => [
            '@type' => 'SpeakableSpecification',
            'cssSelector' => ['.hero-intro', '.faq-list details summary h3'],
        ],
    ];
}

function ld_breadcrumb_home() {
    return [
        '@type' => 'BreadcrumbList',
        '@id' => site_url('/') . '#breadcrumb',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',
             'item' => site_url('/')],
        ],
    ];
}

function ld_howto($steps, $intro) {
    global $PROCESS_H2;
    $list = [];
    foreach ($steps as $i => $s) {
        $list[] = [
            '@type' => 'HowToStep',
            'position' => $i + 1,
            'name' => $s['h3'],
            'text' => $s['text'],
        ];
    }
    return [
        '@type' => 'HowTo',
        '@id' => site_url('/') . '#howto',
        'name' => $PROCESS_H2,
        'description' => $intro,
        'mainEntityOfPage' => ['@id' => site_url('/') . '#webpage'],
        'step' => $list,
    ];
}

function ld_faq($faqs, $pageUrl = null) {
    $items = [];
    foreach ($faqs as $f) {
        $items[] = [
            '@type' => 'Question',
            'name' => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ];
    }
    // $pageUrl: inner pages point at themselves; homepage call keeps default.
    $main = $pageUrl ? ['@id' => $pageUrl] : ['@id' => site_url('/') . '#webpage'];
    return ['@type' => 'FAQPage', '@id' => site_url('/') . '#faqpage',
            'mainEntityOfPage' => $main,
            'mainEntity' => $items];
}

function ld_service($name, $areaName) {
    global $SITE;
    return [
        '@type' => 'Service',
        'name' => $name,
        'serviceType' => 'Water Damage Restoration',
        'provider' => [
            '@type' => 'LocalBusiness',
            'name' => $SITE['brand'],
            'telephone' => $SITE['phone'],
        ],
        'areaServed' => ['@type' => 'City', 'name' => $areaName],
    ];
}

function ld_blog($page, $slug) {
    global $SITE;
    return [
        '@type' => 'BlogPosting',
        'headline' => $page['h1'],
        'description' => $page['content']['meta']['description'],
        'mainEntityOfPage' => site_url($slug),
        'author' => ['@type' => 'Organization', 'name' => $SITE['brand'],
                     'url' => site_url('/')],
        'publisher' => ['@type' => 'Organization', 'name' => $SITE['brand'],
                        'url' => site_url('/')],
    ];
}
// NOTE: no datePublished — the doc gives no publish date; do not invent one.

function ld_json($graph) {
    $data = ['@context' => 'https://schema.org', '@graph' => $graph];
    return '<script type="application/ld+json">' .
        json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) .
        '</script>';
}

// Visible breadcrumb trail. Chrome, exempt from the body-copy link rule.
function crumbs_html($crumbs) {
    $out = '<nav class="crumbs" aria-label="Breadcrumb">';
    $first = true;
    foreach ($crumbs as $c) {
        if (!$first) $out .= '<span aria-hidden="true">›</span> ';
        $first = false;
        if (!empty($c['href'])) {
            $out .= '<a href="' . esc($c['href']) . '">' . esc($c['label']) . '</a>';
        } else {
            $out .= '<span aria-current="page">' . esc($c['label']) . '</span>';
        }
    }
    return $out . '</nav>';
}
