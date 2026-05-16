<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($config['site_name']) ?><?= !empty($page['title']) ? ' – ' . htmlspecialchars($page['title']) : '' ?></title>
    
    <?php if (isset($_COOKIE['cookie_consent']) && $_COOKIE['cookie_consent'] === 'accepted'): ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <?php endif; ?>
    
    <link rel="stylesheet" href="<?= url('assets/style.css') ?>">
    <link rel="icon" type="image/jpeg" href="<?= url('assets/img/logo1.jpg') ?>">
</head>
<body class="<?= !isset($_COOKIE['cookie_consent']) ? 'has-cookie-banner' : '' ?>">
    <div id="page-loader" class="loader-overlay">
        <div class="loader-content">
            <img src="<?= url('assets/img/logo1.jpg') ?>" alt="Wonnegauer Designwerkstatt" class="loader-logo">
            <div class="loader-spinner"></div>
        </div>
    </div>

    <?php include dirname(__DIR__) . '/components/header.php'; ?>

    <main class="site-main">
        <div class="container">
            <?php render_view($page['view'], $page); ?>
        </div>
    </main>

    <?php include dirname(__DIR__) . '/components/footer.php'; ?>

    <?php if (!isset($_COOKIE['cookie_consent'])): ?>
        <div id="cookie-banner" class="cookie-banner">
            <button id="cookie-banner-close" class="cookie-banner__close" aria-label="Banner schließen">&times;</button>
            <div class="container cookie-banner__inner">
                <div class="cookie-banner__content">
                    <p>
                        Wir verwenden Google Fonts, um die Gestaltung unserer Website zu verbessern. Mit Ihrer Zustimmung laden wir diese Schriften extern nach. 
                        Weitere Informationen finden Sie in unserer <a href="<?= url('impressum') ?>#datenschutz" class="cookie-banner__link">Datenschutzerklärung</a>.
                    </p>
                </div>
                <div class="cookie-banner__actions">
                    <button id="cookie-accept" class="btn btn--primary">Akzeptieren</button>
                    <button id="cookie-decline" class="btn btn--primary">Ablehnen</button>
                    <button id="cookie-open-settings" class="btn btn--secondary">Einstellungen</button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <button id="scroll-top" class="scroll-top" aria-label="Nach oben scrollen">
        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    <!-- Cookie Settings Modal -->
    <div id="cookie-modal" class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__content">
            <div class="modal__header">
                <h2>Cookie-Einstellungen</h2>
                <button class="modal__close" aria-label="Schließen">&times;</button>
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
                    <label class="switch">
                        <input type="checkbox" id="toggle-google-fonts" <?= (isset($_COOKIE['cookie_consent']) && $_COOKIE['cookie_consent'] === 'accepted') ? 'checked' : '' ?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="modal__footer">
                <button id="reset-cookie-settings" class="btn btn--secondary" style="margin-right: auto;">Einstellungen zurücksetzen</button>
                <button id="save-cookie-settings" class="btn btn--primary">Einstellungen speichern</button>
            </div>
        </div>
    </div>

    <script src="<?= url('assets/nav.js') ?>"></script>
</body>
</html>
