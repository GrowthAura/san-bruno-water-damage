// San Bruno Water Damage Restoration — lead form endpoint.
// Cloudflare Pages Function: POST /api/contact (functions/api/contact.js).
// Validates the lead, emails it to the owner via MailChannels (free for
// Cloudflare Workers/Pages — no account, no API key), returns JSON.
//
// MailChannels only accepts mail sent from a Cloudflare IP, and the sending
// domain needs two DNS TXT records before the first mail goes through
// (Cloudflare docs, MailChannels plugin page):
//   TXT  _mailchannels   v=mc1 cfid=<account workers.dev subdomain>
//   TXT  @               v=spf1 include:relay.mailchannels.net ~all
// Until those records exist, MailChannels answers 550 and this endpoint
// returns {ok:false, error:"send_failed"}. DKIM is optional hardening and
// is NOT required for sending. See qa/FINDINGS-FORM-BACKEND-2026-11-16.md.

const TO_EMAIL = 'noorullahchhachher3@gmail.com';
const TO_NAME = 'Noorullah';
const FROM_EMAIL = 'leads@sanbrunowaterdamagerestoration.us';
const FROM_NAME = 'San Bruno Water Damage Restoration';
const MAILCHANNELS_URL = 'https://api.mailchannels.net/tx/v1/send';
const SITE_URL = 'https://www.sanbrunowaterdamagerestoration.us/';
const MAX = { name: 120, phone: 40, service: 120, message: 2000, page: 200 };

function clean(value, max) {
  return String(value ?? '').trim().slice(0, max);
}

function json(obj, status) {
  return new Response(JSON.stringify(obj), {
    status,
    headers: { 'content-type': 'application/json; charset=utf-8' },
  });
}

export async function onRequestPost(context) {
  const { request } = context;

  let data = {};
  try {
    const contentType = request.headers.get('content-type') || '';
    if (contentType.includes('application/json')) {
      data = await request.json();
    } else {
      const fd = await request.formData();
      for (const [key, value] of fd.entries()) {
        data[key] = typeof value === 'string' ? value : '';
      }
    }
  } catch {
    return json({ ok: false, error: 'bad_request' }, 400);
  }

  // Honeypot: bots fill the hidden "website" field. Answer success and send
  // nothing, so the trap stays invisible.
  if (String(data.website || '').trim() !== '') {
    return json({ ok: true }, 200);
  }

  const name = clean(data.name, MAX.name);
  const phone = clean(data.phone, MAX.phone);
  const service = clean(data.service, MAX.service);
  const message = clean(data.message, MAX.message);
  const page = clean(data.page, MAX.page);

  const errors = [];
  if (!name) errors.push('Please enter your name.');
  if (!phone) errors.push('Please enter your phone number.');
  if (!message) errors.push('Please tell us what happened.');
  if (errors.length > 0) return json({ ok: false, errors }, 400);

  // The form collects name/phone/service/message only — no visitor email
  // field exists, so there is no Reply-To. The owner calls the lead back
  // on the phone number, which is why it leads the body.
  const referer = request.headers.get('referer') || '';
  const pageUrl = page || referer || SITE_URL;
  const subject = 'New lead — ' + (service || 'Water damage') + ' — ' + name + ' — San Bruno';
  const body = [
    'New lead from sanbrunowaterdamagerestoration.us',
    '',
    'Name: ' + name,
    'Phone: ' + phone,
    'Service: ' + (service || '(not selected)'),
    'Page: ' + pageUrl,
    'Time: ' + new Date().toISOString(),
    '',
    'Message:',
    message,
    '',
    'Call the lead back at ' + phone + '.',
  ].join('\n');

  try {
    const resp = await fetch(MAILCHANNELS_URL, {
      method: 'POST',
      headers: { 'content-type': 'application/json' },
      body: JSON.stringify({
        personalizations: [{ to: [{ email: TO_EMAIL, name: TO_NAME }] }],
        from: { email: FROM_EMAIL, name: FROM_NAME },
        subject,
        content: [{ type: 'text/plain', value: body }],
      }),
    });
    if (!resp.ok) {
      const detail = await resp.text().catch(() => '');
      console.error('MailChannels send failed', resp.status, detail.slice(0, 500));
      return json({ ok: false, error: 'send_failed' }, 502);
    }
    return json({ ok: true }, 200);
  } catch (err) {
    console.error('MailChannels send error', err);
    return json({ ok: false, error: 'send_failed' }, 502);
  }
}
