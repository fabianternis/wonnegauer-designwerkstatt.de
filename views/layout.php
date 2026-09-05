<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($page['description'] ?? '') ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Brigitte & Wolfgang Ternis">
    <meta name="theme-color" content="#111111">
    
    <?php
        $slug = $page['slug'] ?? 'index';
        $canonical = canonical_url($slug);
        $pageTitle = e($config['site_name']) . (!empty($page['title']) && $slug !== 'index' ? ' – ' . e($page['title']) : ' – Kunst, Kultur, Design & Gästeführungen im Wonnegau');
        $ogImage = canonical_url('assets/img/banners/' . ($slug === 'index' ? 'index.jpg' : ($slug . '.jpg')));
        $fallbackHero = dirname(__DIR__) . "/public/assets/img/banners/{$slug}.jpg";
        if (!file_exists($fallbackHero)) {
            $ogImage = canonical_url('assets/img/banners/DEFAULT.jpg');
        }
    ?>

    <title><?= $pageTitle ?></title>
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($config['site_name']) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:title" content="<?= $pageTitle ?>">
    <meta property="og:description" content="<?= e($page['description'] ?? '') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
    <meta property="og:locale" content="de_DE">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $pageTitle ?>">
    <meta name="twitter:description" content="<?= e($page['description'] ?? '') ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

    <!-- Favicon & PWA Icons -->
    <link rel="icon" type="image/jpeg" href="<?= url('assets/img/logo1.jpg') ?>">
    <link rel="apple-touch-icon" href="<?= url('assets/img/logo1.jpg') ?>">
    <link rel="manifest" href="<?= url('manifest.json') ?>">

    <!-- Stylesheets & Fonts -->
    <?php if (isset($_COOKIE['cookie_consent']) && $_COOKIE['cookie_consent'] === 'accepted'): ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;600;700&display=swap" as="style">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <?php endif; ?>
    
    <link rel="preload" href="<?= url('assets/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?= url('assets/style.css') ?>">

    <!-- Schema.org JSON-LD (AI & Search Engine Structured Data) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": ["ArtGallery", "LocalBusiness", "Organization"],
                "@id": "https://www.wonnegauer-designwerkstatt.de/#organization",
                "name": "Wonnegauer Designwerkstatt",
                "alternateName": "Designwerkstatt Flörsheim-Dalsheim",
                "description": "Wonnegauer Designwerkstatt – Brigitte und Wolfgang Ternis aus Flörsheim-Dalsheim. Kunst, Kultur, Design und Gästeführungen in Rheinhessen.",
                "url": "https://www.wonnegauer-designwerkstatt.de",
                "logo": "https://www.wonnegauer-designwerkstatt.de/assets/img/logo1.jpg",
                "image": "https://www.wonnegauer-designwerkstatt.de/assets/img/banners/index.jpg",
                "telephone": "+49 6243 5649",
                "email": "lettre-bwm@t-online.de",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Plenzer 6",
                    "addressLocality": "Flörsheim-Dalsheim",
                    "postalCode": "67592",
                    "addressRegion": "Rheinland-Pfalz",
                    "addressCountry": "DE"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 49.6677,
                    "longitude": 8.2125
                },
                "founder": [
                    {
                        "@type": "Person",
                        "name": "Brigitte Ternis",
                        "jobTitle": "Dipl.-Designerin (FH), Kultur- und Weinbotschafterin, Fahrrad-Gästeführerin"
                    },
                    {
                        "@type": "Person",
                        "name": "Wolfgang Ternis",
                        "jobTitle": "Dipl.-Designer (FH), Bildender Künstler"
                    }
                ]
            },
            {
                "@type": "WebSite",
                "@id": "https://www.wonnegauer-designwerkstatt.de/#website",
                "url": "https://www.wonnegauer-designwerkstatt.de",
                "name": "Wonnegauer Designwerkstatt",
                "publisher": {
                    "@id": "https://www.wonnegauer-designwerkstatt.de/#organization"
                },
                "inLanguage": "de-DE"
            },
            {
                "@type": "WebPage",
                "@id": "<?= htmlspecialchars($canonical) ?>",
                "url": "<?= htmlspecialchars($canonical) ?>",
                "name": "<?= addslashes($pageTitle) ?>",
                "isPartOf": {
                    "@id": "https://www.wonnegauer-designwerkstatt.de/#website"
                },
                "description": "<?= addslashes($page['description'] ?? '') ?>",
                "inLanguage": "de-DE"
            }
            <?php if ($slug !== 'index'): ?>
            ,{
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Start",
                        "item": "https://www.wonnegauer-designwerkstatt.de/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "<?= addslashes($page['title'] ?? '') ?>",
                        "item": "<?= htmlspecialchars($canonical) ?>"
                    }
                ]
            }
            <?php endif; ?>
        ]
    }
    </script>
</head>
<body class="<?= !isset($_COOKIE['cookie_consent']) ? 'has-cookie-banner' : '' ?>">
    <!-- Skip to main content for screen readers and keyboard navigation -->
    <a href="#main-content" class="skip-to-content">Zum Hauptinhalt springen</a>

    <div id="page-loader" class="loader-overlay" aria-hidden="true">
        <div class="loader-content">
            <img src="<?= url('assets/img/logo1.jpg') ?>" alt="Wonnegauer Designwerkstatt" class="loader-logo" width="60" height="60">
            <div class="loader-spinner"></div>
        </div>
    </div>

    <!-- Site Wrapper containing header and content (stops sticky elements above footer) -->
    <div class="site-wrapper">
        <?php include dirname(__DIR__) . '/components/header.php'; ?>

        <main id="main-content" class="site-main">
            <div class="container">
                <?php render_view($page['view'], $page); ?>
            </div>
        </main>

        <div class="scroll-top-tracker" aria-hidden="true">
            <button type="button" id="scroll-top" class="scroll-top" aria-label="Nach oben scrollen">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
            </button>
        </div>
    </div>

    <?php include dirname(__DIR__) . '/components/footer.php'; ?>

    <?php if (!isset($_COOKIE['cookie_consent'])): ?>
        <section id="cookie-banner" class="cookie-banner" aria-label="Cookie-Einwilligung" role="region">
            <button id="cookie-banner-close" class="cookie-banner__close" aria-label="Banner schließen">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div class="container cookie-banner__inner">
                <div class="cookie-banner__content">
                    <p>
                        Wir verwenden Google Fonts, um die Gestaltung unserer Website zu verbessern. Mit Ihrer Zustimmung laden wir diese Schriften extern nach. 
                        Weitere Informationen finden Sie in unserer <a href="<?= url('datenschutz') ?>" class="cookie-banner__link">Datenschutzerklärung</a>.
                    </p>
                </div>
                <div class="cookie-banner__actions">
                    <button type="button" id="cookie-accept" class="btn btn--primary">Akzeptieren</button>
                    <button type="button" id="cookie-decline" class="btn btn--primary">Ablehnen</button>
                    <button type="button" id="cookie-open-settings" class="btn btn--secondary">Einstellungen</button>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Cookie Settings Modal -->
    <div id="cookie-modal" class="modal" role="dialog" aria-modal="true" aria-labelledby="cookie-modal-title" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1"></div>
        <div class="modal__content">
            <div class="modal__header">
                <h2 id="cookie-modal-title">Cookie-Einstellungen</h2>
                <button type="button" class="modal__close" aria-label="Schließen">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal__body">
                <p>Hier können Sie festlegen, welche externen Dienste Sie auf dieser Website zulassen möchten.</p>
                <div class="cookie-option">
                    <div class="cookie-option__info">
                        <strong>Essenziell (Immer aktiv)</strong>
                        <p>Diese Cookies sind für den technischen Betrieb der Website notwendig (z.B. Speicherung Ihrer Cookie-Einstellungen).</p>
                    </div>
                </div>
                <div class="cookie-option">
                    <div class="cookie-option__info">
                        <strong>Google Fonts (Optional)</strong>
                        <p>Ermöglicht das Laden von Schriftarten von Google-Servern für ein schöneres Design. Bei Deaktivierung werden Standard-Schriftarten verwendet.</p>
                    </div>
                    <label class="switch" for="toggle-google-fonts">
                        <input type="checkbox" id="toggle-google-fonts" <?= (isset($_COOKIE['cookie_consent']) && $_COOKIE['cookie_consent'] === 'accepted') ? 'checked' : '' ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="modal__footer">
                <button type="button" id="reset-cookie-settings" class="btn btn--secondary" style="margin-right: auto;">Zurücksetzen</button>
                <button type="button" id="save-cookie-settings" class="btn btn--primary">Speichern</button>
            </div>
        </div>
    </div>

    <script src="<?= url('assets/nav.js') ?>"></script>
</body>
</html>
