<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <meta name="keywords" content="Wonnegauer Designwerkstatt, Ternis, Designwerkstatt Ternis, Designwerkstatt, Brigitte Ternis, Wolfgang Ternis, Design Flörsheim-Dalsheim, Kunst Flörsheim-Dalsheim, Kultur Flörsheim-Dalsheim, Tourismus Flörsheim-Dalsheim, Gästeführung Flörsheim-Dalsheim, Atelier, Atelier Ternis, Kunst in Rheinhessen, Kunst im Wonnegau, Rheinhessen, Wonnegau, VG Monsheim, Rheinland-Pfalz">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= url($page['slug']) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($config['site_name']) ?><?= !empty($page['title']) ? ' – ' . htmlspecialchars($page['title']) : '' ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <meta property="og:image" content="<?= url('assets/img/logo1.jpg') ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= url($page['slug']) ?>">
    <meta property="twitter:title" content="<?= htmlspecialchars($config['site_name']) ?><?= !empty($page['title']) ? ' – ' . htmlspecialchars($page['title']) : '' ?>">
    <meta property="twitter:description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <meta property="twitter:image" content="<?= url('assets/img/logo1.jpg') ?>">

    <title>
        <?= htmlspecialchars($config['site_name']) ?>
        <?php if (!empty($page['title'])): ?>
            – <?= htmlspecialchars($page['title']) ?>
        <?php endif; ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url('assets/style.css') ?>">
    <link rel="icon" type="image/jpeg" href="<?= url('assets/img/logo1.jpg') ?>">
</head>
<body>
    <div class="site-body"<?php if (!empty($page['background_color'])): ?> style="--page-bg: <?= htmlspecialchars($page['background_color']) ?>"<?php endif; ?>>
        <?php include dirname(__DIR__) . '/components/header.php'; ?>

        <main class="site-main">
            <div class="container">
                <?php render_view($page['view'], $page); ?>
            </div>
        </main>

        <?php include dirname(__DIR__) . '/components/footer.php'; ?>
    </div>
    <script src="<?= url('assets/nav.js') ?>"></script>
</body>
</html>
