<div class="page-kunst">
    <div class="editorial-list">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <article class="editorial-item">
                <?php
                    $bilderCount = count($item['bilder'] ?? []);
                    $isThreeCol = ($bilderCount === 2);
                ?>
                <div class="content-split editorial-split <?= $isThreeCol ? 'editorial-split--three-col' : '' ?>">
                    <?php if ($isThreeCol): ?>
                        <div class="img-card">
                            <img src="<?= htmlspecialchars(url($item['bilder'][0])) ?>" alt="" data-lightbox="true" data-lightbox-group="kunst">
                        </div>
                        <div class="editorial-description">
                            <p>
                                <?= nl2br(htmlspecialchars($item['text'])) ?>
                            </p>
                        </div>
                        <div class="img-card">
                            <img src="<?= htmlspecialchars(url($item['bilder'][1])) ?>" alt="" data-lightbox="true" data-lightbox-group="kunst">
                        </div>
                    <?php else: ?>
                        <div class="img-card-container">
                            <?php foreach ($item['bilder'] as $bild): ?>
                                <div class="img-card">
                                    <img src="<?= htmlspecialchars(url($bild)) ?>" alt="" data-lightbox="true" data-lightbox-group="kunst">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="editorial-description">
                            <p>
                                <?= nl2br(htmlspecialchars($item['text'])) ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
