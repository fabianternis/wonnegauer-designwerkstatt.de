<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($config['site_name']) ?><?= !empty($page['title']) ? ' – ' . htmlspecialchars($page['title']) : '' ?></title>
    
    <link rel="preload" href="<?= url('assets/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?= url('assets/style.css') ?>">
    <link rel="icon" type="image/jpeg" href="<?= url('assets/img/logo1.jpg') ?>">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
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

    <button id="scroll-top" class="scroll-top" aria-label="Nach oben scrollen">
        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    <script src="<?= url('assets/nav.js') ?>"></script>
</body>
</html>
