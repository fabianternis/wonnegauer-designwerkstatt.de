(function () {
    // ── Page Loader & Transition ──────────────────────────────
    const loader = document.getElementById('page-loader');
    if (loader) {
        const startTime = Date.now();
        const minDuration = 1200; // Minimum 1.2 seconds for branding visibility

        window.addEventListener('load', () => {
            const elapsedTime = Date.now() - startTime;
            const remainingTime = Math.max(0, minDuration - elapsedTime);

            setTimeout(() => {
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 800);
            }, remainingTime);
        });
    }

    // Smooth internal page transitions
    document.addEventListener('click', (e) => {
        const link = e.target.closest('a');
        if (link && 
            link.href && 
            link.href.startsWith(window.location.origin) && 
            !link.getAttribute('target') && 
            !link.href.includes('#')) {
            
            e.preventDefault();
            const targetUrl = link.href;
            
            document.body.classList.add('is-exiting');
            
            setTimeout(() => {
                window.location.href = targetUrl;
            }, 400);
        }
    });

    // ── Navigation ────────────────────────────────────────────
    const toggle = document.querySelector('.nav-toggle');
    const nav    = document.getElementById('main-nav');

    if (toggle && nav) {
        function openNav() {
            nav.classList.add('main-nav--open');
            toggle.setAttribute('aria-expanded', 'true');
            document.body.classList.add('nav-open');
        }

        function closeNav() {
            nav.classList.remove('main-nav--open');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('nav-open');
        }

        toggle.addEventListener('click', () => {
            toggle.getAttribute('aria-expanded') === 'true' ? closeNav() : openNav();
        });

        document.addEventListener('click', (e) => {
            if (nav.classList.contains('main-nav--open') &&
                !nav.contains(e.target) &&
                !toggle.contains(e.target)) {
                closeNav();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeNav();
        });
    }

    // ── Service Worker Registration ───────────────────────────
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js')
                .catch(err => console.log('SW registration failed', err));
        });
    }
})();
