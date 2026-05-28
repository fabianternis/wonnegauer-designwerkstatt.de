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
    const bannerClose  = document.getElementById('cookie-banner-close');
    const cookieModal  = document.getElementById('cookie-modal');
    const acceptBtn    = document.getElementById('cookie-accept');
    const declineBtn   = document.getElementById('cookie-decline');
    const openSettings = document.getElementById('cookie-open-settings');
    const settingsBtn  = document.getElementById('open-cookie-settings');
    const saveBtn      = document.getElementById('save-cookie-settings');
    const resetBtn     = document.getElementById('reset-cookie-settings');
    const closeModal   = document.querySelector('.modal__close');
    const modalOverlay = document.querySelector('.modal__overlay');
    const fontToggle   = document.getElementById('toggle-google-fonts');

    const setConsent = (status, reload = true) => {
        const expires = new Date();
        expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000));
        document.cookie = `cookie_consent=${status};expires=${expires.toUTCString()};path=/;SameSite=Lax`;
        
        if (cookieBanner) {
            cookieBanner.style.opacity = '0';
            cookieBanner.style.transform = 'translateY(20px)';
            document.body.classList.remove('has-cookie-banner');
            setTimeout(() => cookieBanner.remove(), 400);
        }

        if (reload) {
            // Clear SW cache and reload to ensure fresh state
            if ('caches' in window) {
                caches.keys().then((names) => {
                    Promise.all(names.map(name => caches.delete(name))).then(() => {
                        window.location.reload();
                    });
                });
            } else {
                window.location.reload();
            }
        }
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
    if (openSettings) openSettings.addEventListener('click', openModal);
    
    if (bannerClose) {
        bannerClose.addEventListener('click', () => {
            setConsent('dismissed', false);
        });
    }

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

    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            document.cookie = "cookie_consent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; SameSite=Lax";
            window.location.reload();
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

    // ── Lightbox ──────────────────────────────────────────────
    const initLightbox = () => {
        const triggers = document.querySelectorAll('[data-lightbox="true"]');
        if (triggers.length === 0) return;

        let currentGroup = [];
        let currentIndex = 0;

        // Create lightbox elements if they don't exist
        let lightbox = document.querySelector('.lightbox');
        if (!lightbox) {
            lightbox = document.createElement('div');
            lightbox.className = 'lightbox';
            lightbox.innerHTML = `
                <div class="lightbox__content">
                    <button class="lightbox__close" aria-label="Schließen">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <button class="lightbox__nav lightbox__prev" aria-label="Vorheriges Bild">&lsaquo;</button>
                    <img src="" alt="" class="lightbox__img">
                    <button class="lightbox__nav lightbox__next" aria-label="Nächstes Bild">&rsaquo;</button>
                </div>
            `;
            document.body.appendChild(lightbox);
        }

        const lightboxImg = lightbox.querySelector('.lightbox__img');
        const closeBtn = lightbox.querySelector('.lightbox__close');
        const prevBtn = lightbox.querySelector('.lightbox__prev');
        const nextBtn = lightbox.querySelector('.lightbox__next');

        const updateLightboxImage = () => {
            const item = currentGroup[currentIndex];
            lightboxImg.style.opacity = '0';
            setTimeout(() => {
                lightboxImg.src = item.src;
                lightboxImg.alt = item.alt || '';
                lightboxImg.style.opacity = '1';
            }, 200);

            // Show/hide nav buttons based on group size
            const hasMany = currentGroup.length > 1;
            prevBtn.style.display = hasMany ? 'block' : 'none';
            nextBtn.style.display = hasMany ? 'block' : 'none';
        };

        const openLightbox = (trigger) => {
            const groupName = trigger.dataset.lightboxGroup;
            if (groupName) {
                currentGroup = Array.from(document.querySelectorAll(`[data-lightbox-group="${groupName}"]`));
            } else {
                currentGroup = [trigger];
            }
            currentIndex = currentGroup.indexOf(trigger);

            updateLightboxImage();
            lightbox.classList.add('lightbox--open');
            document.body.classList.add('lightbox-open');
        };

        const closeLightbox = () => {
            lightbox.classList.remove('lightbox--open');
            document.body.classList.remove('lightbox-open');
            setTimeout(() => {
                lightboxImg.src = '';
            }, 300);
        };

        const nextImage = () => {
            currentIndex = (currentIndex + 1) % currentGroup.length;
            updateLightboxImage();
        };

        const prevImage = () => {
            currentIndex = (currentIndex - 1 + currentGroup.length) % currentGroup.length;
            updateLightboxImage();
        };

        triggers.forEach(trigger => {
            trigger.classList.add('has-lightbox');
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                openLightbox(trigger);
            });
        });

        closeBtn.addEventListener('click', closeLightbox);
        prevBtn.addEventListener('click', (e) => { e.stopPropagation(); prevImage(); });
        nextBtn.addEventListener('click', (e) => { e.stopPropagation(); nextImage(); });
        
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('lightbox__content')) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('lightbox--open')) return;
            
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        });
    };

    initLightbox();
})();


