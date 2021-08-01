const cacheName = 'news-v1';
const staticAssets = [
  './',
  './profile',
  './index.js',
  './js/bootstrap.min.js',
  './css/bootstrap.min.css',
  './images/profile/khoir.png',
  './css/style.css',
  './fonts/BalooChettan2-Regular.ttf',
  './fonts/Roboto-Regular.ttf',
  './schedule/X MIPA 1.json',
  './schedule/X MIPA 2.json',
  './schedule/X IPS 1.json',
  './schedule/X IPS 2.json',
  './schedule/X IPS 3.json',
  './schedule/XI MIPA 1.json',
  './schedule/XI MIPA 2.json',
  './schedule/XI IPS 1.json',
  './schedule/XI IPS 2.json',
  './schedule/XI IPS 3.json',
  './schedule/XII MIPA 1.json',
  './schedule/XII MIPA 2.json',
  './schedule/XII IPS 1.json',
  './schedule/XII IPS 2.json',
  './schedule/XII IPS 3.json',
];

self.addEventListener('install', async e => {
  const cache = await caches.open(cacheName);
  await cache.addAll(staticAssets);
  return self.skipWaiting();
});

self.addEventListener('activate', e => {
  self.clients.claim();
});

self.addEventListener('fetch', async e => {
  const req = e.request;
  const url = new URL(req.url);

  if (url.origin === location.origin) {
    e.respondWith(cacheFirst(req));
  } else {
    e.respondWith(networkAndCache(req));
  }
});

async function cacheFirst(req) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  return cached || fetch(req);
}

async function networkAndCache(req) {
  const cache = await caches.open(cacheName);
  try {
    const fresh = await fetch(req);
    await cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    const cached = await cache.match(req);
    return cached;
  }
}