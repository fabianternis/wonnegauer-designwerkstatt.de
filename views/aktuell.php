<div class="page-aktuell">
    <header class="page-header">
        <h1>Aktuell</h1>
        <p>Neuigkeiten und aktuelle Informationen aus der Wonnegauer Designwerkstatt.</p>
    </header>

    <div class="grid">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <div class="card">
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
            </div>
        <?php endforeach; ?>
    </div>
</div>
