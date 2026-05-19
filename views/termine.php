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
                    <div class="flex-between mb-md">
                        <h2 class="text-4xl mb-0"><?= htmlspecialchars($termin['titel']) ?></h2>
                        <time class="termin-datum text-secondary fw-bold" datetime="<?= htmlspecialchars($termin['datum']) ?>">
                            <?= htmlspecialchars(date('d.m.Y', strtotime($termin['datum']))) ?>
                        </time>
                    </div>
                    <p class="text-muted mb-md">
                        <?= htmlspecialchars($termin['beschreibung']) ?>
                    </p>
                    <p class="text-md fw-medium">
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="inline-middle mr-xs">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <?= htmlspecialchars($termin['ort']) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center text-muted">Aktuell sind keine Termine eingetragen.</p>
    <?php endif; ?>
</div>
