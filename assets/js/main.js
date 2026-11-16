// San Bruno Water Damage Restoration — vanilla JS only.
// No scroll-hidden-on-load behaviour anywhere on this site (removed watchdog
// Phase 1): content is visible on first paint with zero JS dependency.
// Mobile menu closes when a link inside it is tapped, on Escape, and on
// scroll. FAQ uses native <details>, no JS needed.
(function () {
  'use strict';

  // Header gains a shadow once the page scrolls.
  var header = document.querySelector('.site-header');
  function onScrollHeader() {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 8);
  }
  window.addEventListener('scroll', onScrollHeader, { passive: true });
  onScrollHeader();

  // Close the mobile menu after a link inside it is tapped.
  document.querySelectorAll('.mobile-menu a').forEach(function (link) {
    link.addEventListener('click', function () {
      var wrap = link.closest('.mobile-menu-wrap');
      if (wrap) wrap.removeAttribute('open');
    });
  });

  // Mobile menu closes on scroll (standing rule).
  window.addEventListener('scroll', function () {
    document.querySelectorAll('.mobile-menu-wrap[open]').forEach(function (w) {
      w.removeAttribute('open');
    });
    syncExpanded();
  }, { passive: true });

  // Only one desktop dropdown open at a time.
  document.querySelectorAll('.main-nav details').forEach(function (detail) {
    detail.addEventListener('toggle', function () {
      if (!detail.open) return;
      document.querySelectorAll('.main-nav details').forEach(function (other) {
        if (other !== detail) other.removeAttribute('open');
      });
    });
  });

  // Keep aria-expanded in sync on every header <summary>.
  function syncExpanded() {
    document.querySelectorAll('header details summary').forEach(function (s) {
      s.setAttribute('aria-expanded', s.parentElement.open ? 'true' : 'false');
    });
  }
  document.querySelectorAll('header details').forEach(function (d) {
    d.addEventListener('toggle', syncExpanded);
  });
  syncExpanded();

  // Escape closes any open header dropdown / mobile menu.
  document.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape') return;
    document.querySelectorAll('header details[open]').forEach(function (d) {
      d.removeAttribute('open');
    });
    syncExpanded();
  });

  // Click outside the header closes open desktop dropdowns.
  document.addEventListener('click', function (e) {
    if (e.target.closest('.site-header')) return;
    document.querySelectorAll('.main-nav details[open]').forEach(function (d) {
      d.removeAttribute('open');
    });
    syncExpanded();
  });

  // Mobile scrollers (Batch 1): horizontal snap rows for the homepage
  // service cards + nearby-cities area cards. Arrows scroll one card at a
  // time and disable at the ends; the row stays swipeable by touch.
  document.querySelectorAll('.scroller-wrap').forEach(function (wrap) {
    var row = wrap.querySelector('.scroller');
    if (!row) return;
    var prev = wrap.querySelector('.scroll-prev');
    var next = wrap.querySelector('.scroll-next');
    function cardStep() {
      var card = row.querySelector('.card, .area-card');
      var gap = parseFloat(window.getComputedStyle(row).gap) || 18;
      return card ? card.getBoundingClientRect().width + gap : 300;
    }
    function syncArrows() {
      if (!prev || !next) return;
      var max = row.scrollWidth - row.clientWidth;
      prev.disabled = row.scrollLeft <= 1;
      next.disabled = row.scrollLeft >= max - 1;
    }
    if (prev) prev.addEventListener('click', function () {
      row.scrollBy({ left: -cardStep(), behavior: 'smooth' });
    });
    if (next) next.addEventListener('click', function () {
      row.scrollBy({ left: cardStep(), behavior: 'smooth' });
    });
    row.addEventListener('scroll', syncArrows, { passive: true });
    window.addEventListener('resize', syncArrows);
    wrap.classList.add('scroller-ready');
    syncArrows();
  });

  // Mobile call bar: hidden at first paint so it can never cover the hero
  // buttons; it slides in once the user has scrolled a little.
  var docEl = document.documentElement;
  function callbar() {
    if (window.scrollY > 80) {
      docEl.classList.add('callbar-on');
    } else {
      docEl.classList.remove('callbar-on');
    }
  }
  window.addEventListener('scroll', callbar, { passive: true });
  callbar();

  // Lead form: POST straight to the Google Sheets webhook (Apps Script,
  // bound to the "San Bruno Water Damage - Website Leads" sheet) from the
  // browser. The script logs one row + emails the owner and answers with
  // a redirect page, so any HTTP 200 means the lead landed. The result
  // shows in #form-status in place; the form stays so another message
  // can be sent.
  var leadForm = document.getElementById('lead-form');
  if (leadForm) {
    var statusBox = document.getElementById('form-status');
    var submitBtn = leadForm.querySelector('button[type="submit"]');
    var submitLabel = submitBtn ? submitBtn.textContent : '';
    function showStatus(text, isError) {
      if (!statusBox) return;
      statusBox.hidden = false;
      statusBox.setAttribute('role', isError ? 'alert' : 'status');
      statusBox.innerHTML = '<p><strong>' + text + '</strong></p>';
      statusBox.scrollIntoView({ block: 'nearest' });
    }
    leadForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var data = new FormData(leadForm);
      var name = (data.get('name') || '').toString().trim();
      var phone = (data.get('phone') || '').toString().trim();
      var message = (data.get('message') || '').toString().trim();
      if (!name || !phone || !message) {
        showStatus('Please enter your name, phone number and what happened.', true);
        return;
      }
      // Honeypot: bots fill the hidden "website" field. Answer success and
      // send nothing, so the trap stays invisible.
      if ((data.get('website') || '').toString().trim() !== '') {
        showStatus('Thank you. Your message has been sent — we will call you back shortly. For immediate help, call (650) 822-6798.', false);
        leadForm.reset();
        return;
      }
      if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Sending…'; }
      // Plain FormData POST (the script reads e.parameter). The webhook
      // answers with a redirect page, not JSON — a 200 means the lead
      // landed in the Sheet.
      fetch(leadForm.action, {
        method: 'POST',
        body: data,
        headers: { 'Accept': 'application/json' }
      }).then(function (resp) {
        if (resp && resp.ok) {
          showStatus('Thank you. Your message has been sent — we will call you back shortly. For immediate help, call (650) 822-6798.', false);
          leadForm.reset();
        } else {
          showStatus('Sorry — your message could not be sent. Please call (650) 822-6798 for immediate help. A crew is dispatched immediately.', true);
        }
      }).catch(function () {
        showStatus('Sorry — your message could not be sent. Please call (650) 822-6798 for immediate help. A crew is dispatched immediately.', true);
      }).finally(function () {
        if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = submitLabel; }
      });
    });
  }
})();
