<?php
// San Bruno Water Damage Restoration — page head + header. Written fresh
// for this site. Expects before include: $HEAD (title, description,
// canonical, ld json, og_type), $currentSlug, and the data arrays from
// data/pages.php.
global $SITE, $SERVICES, $AREAS, $COST_GUIDE, $STORM_GUIDE;
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= esc($HEAD['title']) ?></title>
<meta name="description" content="<?= esc($HEAD['description']) ?>">
<meta name="robots" content="<?= esc($HEAD['robots'] ?? 'index, follow') ?>">
<?php if (!empty($HEAD['canonical'])): ?><link rel="canonical" href="<?= esc($HEAD['canonical']) ?>"><?php endif; ?>
<meta property="og:type" content="<?= esc($HEAD['og_type'] ?? 'website') ?>">
<meta property="og:title" content="<?= esc($HEAD['title']) ?>">
<meta property="og:description" content="<?= esc($HEAD['description']) ?>">
<?php if (!empty($HEAD['canonical'])): ?><meta property="og:url" content="<?= esc($HEAD['canonical']) ?>"><?php endif; ?>
<meta property="og:site_name" content="<?= esc($SITE['brand']) ?>">
<?php $ogImage = $HEAD['og_image'] ?? null; ?>
<?php if ($ogImage): ?><meta property="og:image" content="<?= esc($ogImage) ?>"><?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= esc($HEAD['title']) ?>">
<meta name="twitter:description" content="<?= esc($HEAD['description']) ?>">
<?php if ($ogImage): ?><meta name="twitter:image" content="<?= esc($ogImage) ?>"><?php endif; ?>
<meta name="theme-color" content="#0A1A2F">
<link rel="manifest" href="/site.webmanifest">
<link rel="icon" href="/favicon.ico?v=3">
<link rel="icon" type="image/svg+xml" href="/favicon.svg?v=3">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=3">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=3">
<link rel="apple-touch-icon" href="/apple-touch-icon.png?v=3">
<link rel="preload" href="/assets/fonts/fraunces-latin.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/assets/fonts/inter-latin.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/css/styles.css?v=13">
<?= $HEAD['ld'] ?? '' ?>
</head>
<body>
<header class="site-header">
  <div class="topbar">
    <div class="topbar-inner">
      <span>24/7 Emergency Service &middot; San Bruno, CA 94066</span>
      <a href="<?= esc($SITE['phone_href']) ?>">Call <?= esc($SITE['phone']) ?></a>
    </div>
  </div>
  <div class="container header-row">
    <a class="brand" href="/" aria-label="San Bruno Water Damage Restoration, home">
      <span class="brand-mark" aria-hidden="true"><svg viewBox="0 0 24 24" width="24" height="24"><path d="M12 2.5C12 2.5 5.5 10.2 5.5 14.8a6.5 6.5 0 0 0 13 0C18.5 10.2 12 2.5 12 2.5Z" fill="#C9A227"/><path d="M9.2 15.2a2.8 2.8 0 0 0 2.3 2.7" fill="none" stroke="#FDFCF8" stroke-width="1.4" stroke-linecap="round"/></svg></span>
      <span class="brand-word">San Bruno<br>Water Damage<small><?= esc($SITE['brand_small']) ?></small></span>
    </a>
    <nav class="main-nav" aria-label="Main">
      <a href="/">Home</a>
      <details>
        <summary>Services</summary>
        <div class="nav-drop">
          <p class="drop-group">Water Damage Services</p>
          <?php foreach (core_services() as $s): ?>
          <a href="<?= esc($s['slug']) ?>"><?= esc($s['nav']) ?></a>
          <?php endforeach; ?>
        </div>
      </details>
      <a href="/service-areas">Service Areas</a>
      <a href="/about">About Us</a>
      <a href="/contact">Contact Us</a>
    </nav>
    <a class="btn btn-gold header-cta" href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a>
    <div class="mobile-head">
      <a class="btn btn-gold" href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a>
      <details class="mobile-menu-wrap">
        <summary class="btn btn-outline" aria-label="Open menu"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true"><path d="M3 5h14M3 10h14M3 15h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="mobile-menu">
          <a href="/">Home</a>
          <p class="drop-group">Water Damage Services</p>
          <?php foreach (core_services() as $s): ?>
          <a href="<?= esc($s['slug']) ?>"><?= esc($s['nav']) ?></a>
          <?php endforeach; ?>
          <a class="drop-group" href="/service-areas">Service Areas</a>
          <?php foreach ($AREAS as $a): ?>
          <a href="<?= esc($a['slug']) ?>"><?= esc($a['city']) ?>, CA <?= esc($a['zip']) ?></a>
          <?php endforeach; ?>
          <a href="/about">About Us</a>
          <a href="/contact">Contact Us</a>
          <a class="btn btn-gold" href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a>
        </div>
      </details>
    </div>
  </div>
</header>
<main>
