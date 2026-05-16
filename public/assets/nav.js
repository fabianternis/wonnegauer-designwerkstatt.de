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

    // ── Cookie Management ─────────────────────────────────────
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieModal  = document.getElementById('cookie-modal');
    const acceptBtn    = document.getElementById('cookie-accept');
    const declineBtn   = document.getElementById('cookie-decline');
    const settingsBtn  = document.getElementById('open-cookie-settings');
    const saveBtn      = document.getElementById('save-cookie-settings');
    const closeModal   = document.querySelector('.modal__close');
    const modalOverlay = document.querySelector('.modal__overlay');
    const fontToggle   = document.getElementById('toggle-google-fonts');

    const setConsent = (status) => {
        const expires = new Date();
        expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000));
        document.cookie = `cookie_consent=${status};expires=${expires.toUTCString()};path=/;SameSite=Lax`;
        
        if (cookieBanner) {
            cookieBanner.style.opacity = '0';
            cookieBanner.style.transform = 'translateY(20px)';
            document.body.classList.remove('has-cookie-banner');
            setTimeout(() => cookieBanner.remove(), 400);
        }

        window.location.reload();
    };

    const openModal = () => {
        cookieModal.classList.add('modal--open');
        document.body.style.overflow = 'hidden';
    };

    const hideModal = () => {
        cookieModal.classList.remove('modal--open');
        document.body.style.overflow = '';
    };

    if (acceptBtn) acceptBtn.addEventListener('click', () => setConsent('accepted'));
    if (declineBtn) declineBtn.addEventListener('click', () => setConsent('declined'));

    if (settingsBtn) {
        settingsBtn.addEventListener('click', (e) => {
            e.preventDefault();
            openModal();
        });
    }

    if (closeModal) closeModal.addEventListener('click', hideModal);
    if (modalOverlay) modalOverlay.addEventListener('click', hideModal);

    if (saveBtn && fontToggle) {
        saveBtn.addEventListener('click', () => {
            setConsent(fontToggle.checked ? 'accepted' : 'declined');
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
