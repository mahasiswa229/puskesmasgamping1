const CACHE_NAME = 'tumbuh-kembang-v1';
const urlsToCache = [
    '/'
];

// Menginstall Service Worker dan menyimpan cache
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                return cache.addAll(urlsToCache);
            })
    );
});

// Mengambil data dari cache saat offline atau meload halaman
self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
    );
});