<div class="page-links">
    <header class="page-header">
        <h1>Links</h1>
        <p>Interessante Seiten, Kooperationen und Empfehlungen.</p>
    </header>

    <div class="grid">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <article class="card">
                <div style="display: flex; align-items: center; gap: var(--space-md);">
                    <?php if (!empty($item['img'])): ?>
                        <img src="<?= htmlspecialchars(url($item['img'])) ?>"
                             alt="<?= htmlspecialchars($item['titel'] ?? '') ?>"
                             style="width: 64px; height: 64px; object-fit: cover; border-radius: var(--radius);">
                    <?php else: ?>
                        <div style="width: 64px; height: 64px; background: var(--clr-bg); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; color: var(--clr-text-muted);">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                            </svg>
                        </div>
                    <?php endif; ?>
                    <div>
                        <h3 style="font-size: 1.1rem; margin-bottom: var(--space-xs);"><?= htmlspecialchars($item['titel'] ?? 'Link') ?></h3>
                        <a href="<?= htmlspecialchars($item['url']) ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           style="color: var(--clr-secondary); font-size: 0.9rem; word-break: break-all;">
                            <?= htmlspecialchars($item['url']) ?>
                        </a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</div>
