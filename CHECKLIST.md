# SAN BRUNO — MASTER CHECKLIST (tick only on verified evidence, never on claim)

## 0. SOURCE (done 2026-11-11 ~17:17 PKT)
- [x] Doc read: 'San Bruno Water Damage – Website Content', 3,060 words, H1 x1, H2 x14, H3 x35, FAQ 9
- [x] Phone (650) 822-6798 x7 in doc, domain sanbrunowaterdamagerestoration.us, ZIP 94066
- [x] 23 routes extracted from doc parentheses (14 services + service-areas + 5 areas + 2 resources + homepage)
- [x] Lynnwood theme inspected: index.html 1,060 lines, styles.css 1,154 lines (Fraunces+Inter, paper/ink/ocean), main.js 359 lines
- [x] Tracked item goal_0fda376a8cef created; hourly report cron to be set in this chat

## 1. PHP SCAFFOLD (Lynnwood theme -> PHP, fresh code)
- [x] index.php front controller (router, 308 slash->no-slash, sitemap.xml dynamic, static-file serving)
- [x] .htaccess (RewriteEngine, slash->308, front-controller fallback)
- [x] includes/config.php (SITE url/phone/brand, no Lynnwood values anywhere)
- [x] includes/header.php + footer.php (shared, sticky header, mobile nav, sticky call bar)
- [x] includes/functions.php (esc, canonical, schema builders)
- [x] data/pages.php (all 23 routes, meta, H1, verbatim summaries)
- [x] assets/css/styles.css FRESH (Lynnwood design language, 18px body, responsive overrides AFTER base rules)
- [x] assets/js/main.js FRESH (nav, FAQ accordion, lead form, reveal, header shadow)
- [x] robots.txt (Allow:/, sitemap line, NO Host:), llms.txt, site.webmanifest, 404.php
- [x] Favicon set FRESH (SVG + PNGs + apple-touch, no Lynnwood files)

## 2. IMAGES — FRESH ONLY (zero Lynnwood)
- [x] Fresh photographic set sourced (Pexels, new for San Bruno), per-slot topic/place fit
- [x] Hash check vs all 16 banned Lynnwood images: 0 matches (md5 + perceptual)
- [x] EXIF/XMP stripped + byte-scan verified per image; no "AI" in filename/path/alt/metadata
- [ ] Hero (dark photographic, all pages) + service cards + area cards + process images — PARTIAL: hero photo on 20/23 pages; 3 flagged slots (structural-drying, garage, hardwood) have navy hero, no photo forced
- [x] Every slot verified by VIEWED pixels (not decode-only); height measured, aspect correct
- [x] 3 slots flagged honestly if no fitting photo exists (do not force a wrong photo)

## 3. HOMEPAGE (full verbatim)
- [x] Meta title verbatim, meta description verbatim (138ch)
- [x] H1 x1 visible, H2 x14, H3 x35, FAQ 9 visible = schema 9/9
- [x] Trust badges 4, Button 1 phone-only, Button 2 equal, lead form, hero stats
- [x] All 23 doc links present, anchors 3-5 words, 1 link per target, 0 self-links in body
- [x] 14 service cards (own 16:9 photo each), 8 neighbourhoods, 5 nearby cities, 7 process steps

## 4. LINKED PAGES (22 skeletons, verbatim summary only)
- [x] Each: H1 x1, verbatim homepage summary, hero, theme, schema, internal links, image
- [x] 14 services, service-areas, 5 area cities, 2 resource guides
- [x] No invented words on any skeleton page

## 5. GOOGLE / SEO A-to-Z (per page, 23/23)
- [x] Self-canonical 1/page, og:url = canonical, sitemap = canonical (23/23 match)
- [x] JSON-LD valid: LocalBusiness + BreadcrumbList + FAQPage (homepage) + WebSite
- [x] Sitemap date-only lastmod, robots no Host:, 0 broken links, 0 orphans
- [x] LCP <1.8s mobile, CLS 0, overflow 0 @320/390/768/1280, 18px body verified by computed size
- [x] H1 visible on every page (DOM count is NOT enough)

## 6. 10X TESTING + SCREENSHOTS
- [x] Round 1: build check (200s, H1s, links, schema, images)
- [x] Round 2: visual check (desktop + mobile screenshots, every page)
- [x] Findings log with per-point status; fixes re-verified fresh (never recycled reports)
- [x] PDF review pack (desktop full + mobile top per page, labelled)

## 7. DELIVERY GATES (his word only)
- [ ] His review of screenshots + points sheet
- [ ] Push/deploy/domain/DNS ONLY on his explicit word + token (token rule: reuse in-window 3-4 days, transient use, delete temp files)
- [ ] Live links file (23 URLs) delivered as downloadable .txt
- [ ] Hourly cron stopped/removed when site is live + delivered (or on his word)
