<div class="page-design">
    <header class="page-header">
        <h1>Design</h1>
        <p>Designarbeiten und Projekte – Grafikdesign, Raumgestaltung und Produktdesign.</p>
    </header>

    <div class="grid">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <article class="card">
                <div class="card__images" style="display: flex; flex-direction: column; gap: var(--space-sm); margin-bottom: var(--space-md);">
                    <?php foreach ($item['bilder'] as $bild): ?>
                        <img src="<?= htmlspecialchars(url($bild)) ?>" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                    <?php endforeach; ?>
                </div>
                <div class="card__content">
                    <p style="font-size: 0.95rem; line-height: 1.6; color: var(--clr-text-muted);">
                        <?= nl2br(htmlspecialchars($item['text'])) ?>
                    </p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
