<div class="page-links">
    <header class="page-header" style="text-align: center; margin-bottom: var(--space-xl);">
        <h1 style="font-size: clamp(2.5rem, 8vw, 4rem); margin-bottom: 0.5rem;">Links</h1>
        <p style="font-size: 1.1rem; color: var(--clr-muted);">Interessante Seiten, Kooperationen und Empfehlungen aus der Region und darüber hinaus.</p>
    </header>

    <div class="img-card-container">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <?php 
                $domain = parse_url($item['url'], PHP_URL_HOST);
                $faviconUrl = "https://www.google.com/s2/favicons?domain={$domain}&sz=128";
            ?>
            <article class="link-item">
                <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="link-item__card img-card">
                    <div class="link-item__content">
                        <div class="link-item__icon">
                            <img src="<?= $faviconUrl ?>" 
                                 alt="" 
                                 onerror="this.parentElement.innerHTML='<svg viewBox=\'0 0 24 24\' width=\'32\' height=\'32\' stroke=\'currentColor\' stroke-width=\'1.5\' fill=\'none\'><path d=\'M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71\'></path><path d=\'M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71\'></path></svg>';"
                                 style="width: 48px; height: 48px; object-fit: contain;">
                        </div>
                        <div class="link-item__text">
                            <h3 class="link-item__title"><?= htmlspecialchars($item['titel'] ?? 'Link') ?></h3>
                            <span class="link-item__url"><?= htmlspecialchars($domain) ?></span>
                        </div>
                        <div class="link-item__arrow">
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
