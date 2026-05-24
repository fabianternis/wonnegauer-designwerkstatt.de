<div class="page-kunst">
    <div class="editorial-list">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <article class="editorial-item">
                <div class="responsive-grid">
                    <div class="img-card-container">
                        <?php foreach ($item['bilder'] as $bild): ?>
                            <div class="img-card">
                                <img src="<?= htmlspecialchars(url($bild)) ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <p style="font-family: var(--font-heading); font-size: 1.4rem; font-style: italic; line-height: 1.4;">
                            <?= nl2br(htmlspecialchars($item['text'])) ?>
                        </p>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
