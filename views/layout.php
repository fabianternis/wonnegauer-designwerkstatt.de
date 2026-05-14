<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page['description'] ?? '') ?>">
    <title><?= htmlspecialchars($config['site_name']) ?><?= !empty($page['title']) ? ' – ' . htmlspecialchars($page['title']) : '' ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url('assets/style.css') ?>">
</head>
<body>
    <?php include dirname(__DIR__) . '/components/header.php'; ?>

    <main class="site-main">
        <div class="container">
            <?php render_view($page['view'], $page); ?>
        </div>
    </main>

    <?php include dirname(__DIR__) . '/components/footer.php'; ?>
    <script src="<?= url('assets/nav.js') ?>"></script>
</body>
</html>
