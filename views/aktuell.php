<div class="page-aktuell">
    <header class="page-header">
        <h1>Aktuell</h1>
        <p>Neuigkeiten und aktuelle Informationen aus der Wonnegauer Designwerkstatt.</p>
    </header>

    <div class="grid">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <div class="card">
                <p style="font-size: 1.1rem; margin-bottom: var(--space-md);">
                    <?= nl2br(htmlspecialchars($item['text'])) ?>
                </p>
                <?php if (!empty($item['link'])): ?>
                    <a href="<?= htmlspecialchars($item['link']['href']) ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="main-nav__link"
                       style="color: var(--clr-secondary); font-weight: bold;">
                        <?= htmlspecialchars($item['link']['label']) ?> &rarr;
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
