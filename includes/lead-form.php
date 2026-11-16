<?php
// San Bruno Water Damage Restoration — lead form. Posts straight to the
// Google Sheets webhook (Apps Script, bound to the "San Bruno Water
// Damage - Website Leads" sheet in the Naples Gmail account) from the
// browser. The script logs one row + emails the owner. The Naples email
// does NOT appear anywhere in this page — only the webhook URL — so
// Google Search cannot connect this site to Naples. The hidden "page"
// field tells the owner which page the lead came from; "return_url" is
// where the script sends a no-JS visitor back to; "website" is the
// honeypot.
global $SITE, $SERVICES;
?>
<div class="form-card" id="request-service">
  <p class="form-title">Request Emergency Help</p>
  <p>Fill this in and we will call you back. For immediate help, call <?= phone_link() ?>.</p>
  <div class="form-note" id="form-status" role="status" hidden></div>
  <form id="lead-form" method="post" action="https://script.google.com/macros/s/AKfycbyXyX2BSiADQtuMyO4gKrZ7CkTRoBcrkTOo5BvXf-URb6KuaSnwKPdIUqJHUD416cm0/exec" novalidate>
    <input type="hidden" name="return_url" value="<?= esc(site_url($currentSlug ?? '/')) ?>">
    <label for="f-name">Your name</label>
    <input id="f-name" name="name" type="text" autocomplete="name" required maxlength="120">
    <label for="f-phone">Phone number</label>
    <input id="f-phone" name="phone" type="tel" autocomplete="tel" required maxlength="40">
    <label for="f-service">What is happening?</label>
    <select id="f-service" name="service">
      <option value="">Select a service</option>
      <?php foreach ($SERVICES as $s): ?>
      <option value="<?= esc($s['nav']) ?>"><?= esc($s['nav']) ?></option>
      <?php endforeach; ?>
      <option value="Other">Other</option>
    </select>
    <label for="f-message">Tell us what happened</label>
    <textarea id="f-message" name="message" required maxlength="2000"></textarea>
    <input type="hidden" name="page" value="<?= esc(site_url($currentSlug ?? '/')) ?>">
    <p class="hp-field" aria-hidden="true"><label>Leave this empty <input type="text" name="website" tabindex="-1" autocomplete="off" value=""></label></p>
    <button class="btn btn-navy" type="submit">Request Emergency Help</button>
  </form>
</div>
