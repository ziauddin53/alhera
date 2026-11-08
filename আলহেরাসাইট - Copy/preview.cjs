const http = require('http');
const fs = require('fs');
const path = require('path');

const ROOT = 'B:/PERSONAL/আলহেরাসাইট/cloned_site';
const PORT = 8811;
const MIME = {
  '.html': 'text/html; charset=utf-8', '.php': 'text/html; charset=utf-8',
  '.css': 'text/css; charset=utf-8', '.js': 'application/javascript; charset=utf-8',
  '.svg': 'image/svg+xml', '.png': 'image/png', '.jpg': 'image/jpeg',
  '.jpeg': 'image/jpeg', '.gif': 'image/gif', '.webp': 'image/webp',
  '.ico': 'image/x-icon', '.woff2': 'font/woff2', '.woff': 'font/woff',
  '.ttf': 'font/ttf', '.json': 'application/json', '.pdf': 'application/pdf',
};

// A URL path segment may be percent-encoded once or twice (the site stores
// some uploads with literal %20 in the file name), so try both readings.
function candidates(urlPath) {
  const raw = urlPath.split('?')[0].split('#')[0];
  const out = new Set();
  const add = s => { if (s && !out.has(s)) out.add(s); };
  try { add(decodeURIComponent(raw)); } catch (e) { /* keep raw */ }
  add(raw);
  try { add(decodeURIComponent(decodeURIComponent(raw))); } catch (e) { /* ignore */ }
  return [...out];
}

function resolve(urlPath) {
  for (const p of candidates(urlPath)) {
    const clean = p === '' || p === '/' ? '/index.html' : p;
    const tries = [clean];
    if (clean.endsWith('.php')) tries.push(clean.slice(0, -4) + '.html');
    tries.push(clean + '.html');
    tries.push('/Frontend' + clean);
    if (clean.endsWith('.php')) tries.push('/Frontend' + clean.slice(0, -4) + '.html');
    tries.push('/Frontend' + clean + '.html');

    for (const t of tries) {
      const full = path.join(ROOT, t);
      if (!full.startsWith(path.resolve(ROOT))) continue;
      if (fs.existsSync(full) && fs.statSync(full).isFile()) return full;
    }
  }
  return null;
}

const server = http.createServer((req, res) => {
  const file = resolve(req.url);
  if (!file) {
    res.writeHead(404, { 'Content-Type': 'text/html; charset=utf-8' });
    res.end('<!doctype html><meta charset="utf-8"><h1>404</h1><p>Not found: ' +
      String(req.url).replace(/</g, '&lt;') + '</p>');
    return;
  }
  const ext = path.extname(file).toLowerCase();
  const stat = fs.statSync(file);
  res.writeHead(200, {
    'Content-Type': MIME[ext] || 'application/octet-stream',
    'Content-Length': stat.size,
    'Cache-Control': 'no-cache',
  });
  fs.createReadStream(file).pipe(res);
});

server.on('error', err => {
  if (err.code === 'EADDRINUSE') {
    console.error('Port ' + PORT + ' is already in use — the preview is probably already running at http://127.0.0.1:' + PORT + '/');
    process.exit(1);
  }
  console.error(err);
  process.exit(1);
});

server.listen(PORT, '127.0.0.1', () => {
  console.log('Al-Hera clone served from ' + ROOT);
  console.log('Open http://127.0.0.1:' + PORT + '/');
});
