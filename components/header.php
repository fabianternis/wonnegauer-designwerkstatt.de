<header class="site-header">
    <div class="container site-header__inner">
        <a class="site-header__logo" href="<?= url() ?>" aria-label="Zur Startseite">
            <img src="<?= url('assets/img/logo1.jpg') ?>" alt="<?= htmlspecialchars($config['site_name']) ?>">
            <div class="site-header__title-block">
                <span class="site-header__title"><?= htmlspecialchars($config['site_name']) ?></span>
            </div>
        </a>

        <button class="nav-toggle" aria-label="Navigation öffnen" aria-expanded="false" aria-controls="main-nav">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>

        <nav class="main-nav" id="main-nav" aria-label="Hauptnavigation">
            <ul class="main-nav__list">
                <li class="main-nav__item">
                    <a href="<?= url() ?>" class="main-nav__link<?= is_active('index') ? ' main-nav__link--active' : '' ?>" <?= is_active('index') ? 'aria-current="page"' : '' ?>>Start</a>
                </li>
                <?php foreach ($config['nav'] as $slug): ?>
                    <?php $navPage = $config['pages'][$slug] ?? null; ?>
                    <?php if ($navPage): ?>
                        <li class="main-nav__item">
                            <a href="<?= url($slug) ?>"
                               class="main-nav__link<?= is_active($slug) ? ' main-nav__link--active' : '' ?>"
                               <?= is_active($slug) ? 'aria-current="page"' : '' ?>>
                                <?= htmlspecialchars($navPage['title']) ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>

<?php
    $bannerFile = dirname(__DIR__) . "/public/assets/img/banners/{$page['slug']}.jpg";
    $bannerSrc  = file_exists($bannerFile) ? url("assets/img/banners/{$page['slug']}.jpg") : url('assets/img/banners/DEFAULT.jpg');
?>
<section class="hero">
    <img class="hero__image" src="<?= htmlspecialchars($bannerSrc) ?>" alt="" role="presentation">
</section>
