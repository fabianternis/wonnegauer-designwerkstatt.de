<div class="page-links">
    <header class="page-header">
        <h2>Empfehlenswerte Links</h2>
        <p>Interessante Seiten, Kooperationen und Empfehlungen aus der Region und darüber hinaus.</p>
    </header>

    <div class="img-card-container">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <?php 
                $domain = parse_url($item['url'], PHP_URL_HOST);
                $localFavicon = "assets/img/favicons/{$domain}.png";
                $faviconExists = file_exists(dirname(__DIR__) . "/public/" . $localFavicon);
                $linkTitle = $item['titel'] ?? 'Empfehlung';
            ?>
            <article class="link-item">
                <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="link-item__card img-card" aria-label="<?= htmlspecialchars($linkTitle) ?> (öffnet in neuem Tab)">
                    <div class="link-item__content">
                        <div class="link-item__icon">
                            <?php if ($faviconExists): ?>
                                <img src="<?= url($localFavicon) ?>" 
                                     alt="Logo <?= htmlspecialchars($domain) ?>" 
                                     width="48"
                                     height="48"
                                     loading="lazy"
                                     style="width: 48px; height: 48px; object-fit: contain;">
                            <?php else: ?>
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="1.5" fill="none" aria-hidden="true">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                </svg>
                            <?php endif; ?>
                        </div>
                        <div class="link-item__text">
                            <h3 class="link-item__title"><?= htmlspecialchars($linkTitle) ?></h3>
                            <span class="link-item__url"><?= htmlspecialchars($domain) ?></span>
                        </div>
                        <div class="link-item__arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </div>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</div>
