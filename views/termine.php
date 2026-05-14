<div class="page-termine">
    <header class="page-header">
        <h1>Termine</h1>
        <p>Veranstaltungen, Führungen und Ausstellungen.</p>
    </header>

    <?php $termine = $page['termine'] ?? []; ?>

    <?php if (!empty($termine)): ?>
        <div class="grid">
            <?php foreach ($termine as $termin): ?>
                <article class="card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--space-md);">
                        <h2 style="font-size: 1.5rem; margin-bottom: 0;"><?= htmlspecialchars($termin['titel']) ?></h2>
                        <time class="termin-datum" datetime="<?= htmlspecialchars($termin['datum']) ?>" style="color: var(--clr-secondary); font-weight: bold;">
                            <?= htmlspecialchars(date('d.m.Y', strtotime($termin['datum']))) ?>
                        </time>
                    </div>
                    <p style="color: var(--clr-text-muted); margin-bottom: var(--space-md);">
                        <?= htmlspecialchars($termin['beschreibung']) ?>
                    </p>
                    <p style="font-size: 0.9rem; font-weight: var(--fw-medium);">
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: inline; vertical-align: middle; margin-right: var(--space-xs);">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <?= htmlspecialchars($termin['ort']) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p style="text-align: center; color: var(--clr-text-muted);">Aktuell sind keine Termine eingetragen.</p>
    <?php endif; ?>
</div>
