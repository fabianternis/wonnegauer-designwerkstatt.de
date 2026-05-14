<?php
    $bannerFile = dirname(__DIR__) . "/public/assets/img/banners/{$page['slug']}.jpg";
    $bannerSrc  = file_exists($bannerFile) ? url("assets/img/banners/{$page['slug']}.jpg") : url('assets/img/banners/DEFAULT.jpg');
?>
<section class="hero">
    <div class="container hero__container">
        <img class="hero__image" src="<?= htmlspecialchars($bannerSrc) ?>" alt="" role="presentation">
        <div class="hero__overlay">
            <h1 class="hero__title"><?= htmlspecialchars($page['title'] ?? '') ?></h1>
        </div>
    </div>
</section>

<header class="site-header">
    <div class="container site-header__inner">
        <a class="site-header__brand" href="<?= url() ?>">
            <img src="<?= url('assets/img/logo1.jpg') ?>" alt="<?= htmlspecialchars($config['site_name']) ?>" class="site-header__logo">
            <span class="site-header__title"><?= htmlspecialchars($config['site_name']) ?></span>
        </a>

        <nav class="main-nav" id="main-nav" aria-label="Hauptnavigation">
            <ul class="main-nav__list">
                <li class="main-nav__item">
                    <a href="<?= url() ?>" class="main-nav__link<?= is_active('index') ? ' main-nav__link--active' : '' ?>">Start</a>
                </li>
                <?php foreach ($config['nav'] as $slug): ?>
                    <?php $navPage = $config['pages'][$slug] ?? null; ?>
                    <?php if ($navPage): ?>
                        <li class="main-nav__item">
                            <a href="<?= url($slug) ?>"
                               class="main-nav__link<?= is_active($slug) ? ' main-nav__link--active' : '' ?>">
                                <?= htmlspecialchars($navPage['title']) ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>

        <button class="nav-toggle" aria-label="Navigation öffnen" aria-expanded="false" aria-controls="main-nav">
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
        </button>
    </div>
</header>
