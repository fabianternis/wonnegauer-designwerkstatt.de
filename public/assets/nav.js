(function () {
    // ── Page Loader & Transition ──────────────────────────────
    const loader = document.getElementById('page-loader');
    if (loader) {
        window.addEventListener('load', () => {
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 800);
        });
    }

    // Smooth internal page transitions
    document.addEventListener('click', (e) => {
        const link = e.target.closest('a');
        if (link && 
            link.href && 
            link.href.startsWith(window.location.origin) && 
            !link.getAttribute('target') && 
            !link.href.includes('#') &&
            e.button === 0 && !e.ctrlKey && !e.metaKey && !e.shiftKey && !e.altKey) {
            
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

    // ── Scroll to Top ──────────────────────────────────────────
    const scrollTopBtn = document.getElementById('scroll-top');
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                scrollTopBtn.classList.add('scroll-top--visible');
            } else {
                scrollTopBtn.classList.remove('scroll-top--visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
})();
