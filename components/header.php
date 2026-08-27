<?php
    $slug = $page['slug'] ?? 'index';
    $bannerFile = dirname(__DIR__) . "/public/assets/img/banners/{$slug}.jpg";
    $bannerSrc  = file_exists($bannerFile) ? url("assets/img/banners/{$slug}.jpg") : url('assets/img/banners/DEFAULT.jpg');
    $pageTitle  = $page['title'] ?? 'Wonnegauer Designwerkstatt';
?>
<section class="hero" aria-label="Seiten-Banner">
    <div class="container hero__container">
        <img class="hero__image" src="<?= htmlspecialchars($bannerSrc) ?>" alt="<?= htmlspecialchars($pageTitle) ?>" width="1920" height="600" fetchpriority="high">
        <div class="hero__overlay">
            <h1 class="hero__title"><?= htmlspecialchars($pageTitle) ?></h1>
        </div>
    </div>
</section>

<header class="site-header">
    <div class="container site-header__inner">
        <a class="site-header__brand" href="<?= url() ?>" aria-label="Wonnegauer Designwerkstatt Startseite">
            <img src="<?= url('assets/img/logo1.jpg') ?>" alt="<?= htmlspecialchars($config['site_name']) ?>" class="site-header__logo" width="52" height="52">
            <span class="site-header__title">
                <span class="site-header__title-part">Wonnegauer</span>
                <span class="site-header__title-part">Designwerkstatt</span>
            </span>
        </a>

        <nav class="main-nav" id="main-nav" aria-label="Hauptnavigation">
            <ul class="main-nav__list">
                <li class="main-nav__item<?= is_active('index') ? ' main-nav__item--active active' : '' ?>">
                    <a href="<?= url() ?>" class="main-nav__link<?= is_active('index') ? ' main-nav__link--active active' : '' ?>"<?= is_active('index') ? ' aria-current="page"' : '' ?>>Start</a>
                </li>
                <?php foreach ($config['nav'] as $navSlug): ?>
                    <?php $navPage = $config['pages'][$navSlug] ?? null; ?>
                    <?php if ($navPage): ?>
                        <li class="main-nav__item<?= is_active($navSlug) ? ' main-nav__item--active active' : '' ?>">
                            <a href="<?= url($navSlug) ?>"
                               class="main-nav__link<?= is_active($navSlug) ? ' main-nav__link--active active' : '' ?>"<?= is_active($navSlug) ? ' aria-current="page"' : '' ?>>
                                <?= htmlspecialchars($navPage['title']) ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>

        <button type="button" class="nav-toggle" aria-label="Navigation öffnen" aria-expanded="false" aria-controls="main-nav">
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
        </button>
    </div>
</header>
