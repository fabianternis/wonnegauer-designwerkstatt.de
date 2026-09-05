<div class="page-aktuell">
    <header class="page-header">
        <h2>Aktuelle Mitteilungen</h2>
        <p>Neuigkeiten, Ausstellungen und Öffnungszeiten aus der Wonnegauer Designwerkstatt.</p>
    </header>

    <div class="grid">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <article class="card">
                <p class="aktuell-card-text">
                    <?= nl2br(htmlspecialchars($item['text'])) ?>
                </p>
                <?php if (!empty($item['link'])): ?>
                    <a href="<?= htmlspecialchars($item['link']['href']) ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="aktuell-card-link">
                        <span><?= htmlspecialchars($item['link']['label']) ?></span>
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="margin-left: 0.35rem; display: inline; vertical-align: middle;">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>
</div>
