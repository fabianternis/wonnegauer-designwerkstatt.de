const CACHE_NAME = 'wdw-cache-v2';
const STATIC_ASSETS = [
    '/assets/style.css',
    '/assets/nav.js',
    '/assets/img/logo1.jpg',
    '/assets/img/banners/DEFAULT.jpg'
];

// Install event: cache static assets
self.addEventListener('install', (event) => {
    self.skipWaiting();
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(STATIC_ASSETS);
        })
    );
});

// Activate event: cleanup old caches
self.addEventListener('activate', (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((name) => {
                    if (name !== CACHE_NAME) {
                        return caches.delete(name);
                    }
                })
            );
        })
    );
});

// Fetch event: 
// - Network First for HTML/Documents (ensures cookie consent is respected)
// - Cache First for static assets
self.addEventListener('fetch', (event) => {
    const request = event.request;

    // Network First for page requests
    if (request.mode === 'navigate' || (request.method === 'GET' && request.headers.get('accept').includes('text/html'))) {
        event.respondWith(
            fetch(request)
                .then((response) => {
                    const copy = response.clone();
                    caches.open(CACHE_NAME).then((cache) => cache.put(request, copy));
                    return response;
                })
                .catch(() => caches.match(request))
        );
        return;
    }

    // Cache First for static assets
    event.respondWith(
        caches.match(request).then((response) => {
            return response || fetch(request).then((fetchResponse) => {
                // Optionally cache images or other assets on the fly
                if (request.url.includes('/assets/img/')) {
                    const copy = fetchResponse.clone();
                    caches.open(CACHE_NAME).then((cache) => cache.put(request, copy));
                }
                return fetchResponse;
            });
        })
    );
});
