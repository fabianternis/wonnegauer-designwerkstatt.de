<header class="site-header">
    <div class="container">
        <a class="site-header__logo" href="<?= url() ?>">
            <img src="<?= url('assets/img/logo1.jpg') ?>" alt="<?= htmlspecialchars($config['site_name']) ?>">
            <span class="site-header__title"><?= htmlspecialchars($config['site_name']) ?></span>
        </a>

        <nav class="main-nav" aria-label="Hauptnavigation">
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
    </div>
</header>

<?php
    $bannerFile = dirname(__DIR__) . "/public/assets/img/banners/{$page['slug']}.jpg";
    $bannerSrc  = file_exists($bannerFile) ? url("assets/img/banners/{$page['slug']}.jpg") : url('assets/img/banners/DEFAULT.jpg');
?>
<section class="hero">
    <div class="container">
        <img class="hero__image" src="<?= htmlspecialchars($bannerSrc) ?>" alt="" role="presentation">
    </div>
</section>
