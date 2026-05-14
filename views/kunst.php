<div class="page-kunst">
    <header class="page-header">
        <h1>Kunst</h1>
    </header>

    <div class="editorial-list">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <article class="editorial-item">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <?php foreach ($item['bilder'] as $bild): ?>
                            <img src="<?= htmlspecialchars(url($bild)) ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <p style="font-family: var(--font-heading); font-size: 1.25rem; font-style: italic;">
                            <?= nl2br(htmlspecialchars($item['text'])) ?>
                        </p>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
