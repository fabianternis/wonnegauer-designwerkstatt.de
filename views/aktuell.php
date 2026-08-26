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
                        <?= htmlspecialchars($item['link']['label']) ?> &rarr;
                    </a>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>
</div>
