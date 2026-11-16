<?php
// San Bruno Water Damage Restoration — footer + mobile call bar. Written
// fresh for this site. $show_map (bool) is set by the page renderer before
// include; area pages skip the map.
global $SITE, $SERVICES, $AREAS, $COST_GUIDE, $STORM_GUIDE;
$show_map = $show_map ?? true;
$map_src = 'https://www.google.com/maps?q=' . rawurlencode($SITE['map_query']) . '&output=embed';
?>
</main>
<?php if ($show_map): ?>
<div class="footer-map-wrap" aria-label="Map of San Bruno, California">
  <a class="footer-map-fallback" href="<?= 'https://www.google.com/maps?q=' . rawurlencode($SITE['map_query']) ?>" target="_blank" rel="noopener">Map of San Bruno, CA 94066 — open in Google Maps</a>
  <iframe class="footer-map" title="Map: San Bruno, CA 94066" src="<?= esc($map_src) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php endif; ?>
<footer class="site-footer">
  <div class="container footer-cols">
    <div class="footer-col">
      <p class="footer-h"><?= esc($SITE['brand']) ?></p>
      <p>24/7 emergency water damage restoration in San Bruno, CA 94066. Crew dispatched immediately.</p>
      <p class="footer-nap"><span class="footer-nap-line"><a href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a></span>
      <span class="footer-nap-line">San Bruno, CA 94066</span>
      <span class="footer-nap-line footer-hours">Open 24 hours, 7 days a week</span></p>
      <a class="btn btn-gold" href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a>
    </div>
    <div class="footer-col">
      <p class="footer-h">Services</p>
      <ul>
        <?php foreach (core_services() as $s): ?>
        <li><a href="<?= esc($s['slug']) ?>"><?= esc($s['nav']) ?></a></li>
        <?php endforeach; ?>
        <li><a class="footer-more" href="/#services">View all services</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <p class="footer-h">Service Areas</p>
      <ul>
        <?php foreach ($AREAS as $a): ?>
        <li><a href="<?= esc($a['slug']) ?>"><?= esc($a['city']) ?>, CA</a></li>
        <?php endforeach; ?>
        <li><a class="footer-more" href="/service-areas">View all service areas</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <p class="footer-h">Resources</p>
      <ul>
        <li><a href="<?= esc($COST_GUIDE['slug']) ?>">Water Damage Restoration Cost</a></li>
        <li><a href="<?= esc($STORM_GUIDE['slug']) ?>">Belle Air Storm Flood Checklist</a></li>
      </ul>
      <p class="footer-nap"><span class="footer-nap-line"><a href="<?= esc($SITE['phone_href']) ?>"><?= esc($SITE['phone']) ?></a></span>
      <span class="footer-nap-line">San Bruno, CA 94066</span>
      <span class="footer-nap-line footer-hours">Open 24 hours, 7 days a week</span></p>
      <a class="btn btn-ivory" href="<?= esc($formTarget ?? '#request-service') ?>">Request Emergency Help</a>
    </div>
  </div>
  <div class="container footer-social">
    <span class="footer-social-label">Follow us:</span>
    <a href="https://www.facebook.com/profile.php?id=61596181217672" target="_blank" rel="noopener">Facebook</a>
    <a href="https://linktr.ee/sanbrunowaterdamage" target="_blank" rel="noopener">Linktree</a>
    <a href="https://gravatar.com/fully095adb1dee" target="_blank" rel="noopener">Gravatar</a>
    <a href="https://trello.com/b/YtpL9vIU/san-bruno-water-damage" target="_blank" rel="noopener">Trello</a>
  </div>
  <div class="container footer-bottom">
    <span>&copy; 2026 <?= esc($SITE['brand']) ?> &middot; San Bruno, CA 94066</span>
    <span>24/7 Emergency Service &middot; <?= esc($SITE['phone']) ?></span>
  </div>
</footer>
<a class="mobile-call-bar" href="<?= esc($SITE['phone_href']) ?>" aria-label="<?= esc($SITE['phone']) ?>">
  <span aria-hidden="true">&#9742;</span><span><?= esc($SITE['phone']) ?></span>
</a>
<div class="mobile-call-spacer" aria-hidden="true"></div>
<script src="/assets/js/main.js?v=7" defer></script>
</body>
</html>
