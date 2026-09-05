<div class="page-kunst">
    <div class="editorial-list">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <?php
                $itemText = $item['text'] ?? '';
                $cleanAlt = !empty($itemText) ? mb_substr(trim(preg_replace('/\s+/', ' ', strip_tags($itemText))), 0, 120) : 'Kunstwerk von Wolfgang Ternis';
                $bilderCount = count($item['bilder'] ?? []);
                $isThreeCol = ($bilderCount === 2);
            ?>
            <article class="editorial-item">
                <div class="content-split editorial-split <?= $isThreeCol ? 'editorial-split--three-col' : '' ?>">
                    <?php if ($isThreeCol): ?>
                        <div class="img-card">
                            <img src="<?= htmlspecialchars(url($item['bilder'][0])) ?>" alt="<?= htmlspecialchars($cleanAlt) ?> – Teil 1" data-lightbox="true" data-lightbox-group="kunst" loading="lazy">
                        </div>
                        <div class="editorial-description">
                            <p>
                                <?= nl2br(htmlspecialchars($itemText)) ?>
                            </p>
                        </div>
                        <div class="img-card">
                            <img src="<?= htmlspecialchars(url($item['bilder'][1])) ?>" alt="<?= htmlspecialchars($cleanAlt) ?> – Teil 2" data-lightbox="true" data-lightbox-group="kunst" loading="lazy">
                        </div>
                    <?php else: ?>
                        <div class="img-card-container">
                            <?php foreach ($item['bilder'] as $index => $bild): ?>
                                <div class="img-card">
                                    <img src="<?= htmlspecialchars(url($bild)) ?>" alt="<?= htmlspecialchars($cleanAlt . ($bilderCount > 1 ? ' (' . ($index + 1) . ')' : '')) ?>" data-lightbox="true" data-lightbox-group="kunst" loading="lazy">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="editorial-description">
                            <p>
                                <?= nl2br(htmlspecialchars($itemText)) ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
