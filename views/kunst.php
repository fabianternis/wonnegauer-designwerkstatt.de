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
                        <p class="quote-text">
                            <?= nl2br(htmlspecialchars($item['text'])) ?>
                        </p>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
