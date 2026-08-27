<div class="page-termine">
    <header class="page-header">
        <h2>Termine &amp; Führungen</h2>
        <p>Veranstaltungen, Atelierführungen und Radwanderungen im Wonnegau.</p>
    </header>

    <?php $termine = $page['termine'] ?? []; ?>

    <?php if (!empty($termine)): ?>
        <div class="grid">
            <?php foreach ($termine as $termin): ?>
                <?php
                    $rawDate = $termin['datum'] ?? '';
                    $timestamp = !empty($rawDate) && $rawDate !== '99-99-99' ? strtotime($rawDate) : false;
                    $formattedDate = $timestamp ? date('d.m.Y', $timestamp) : ($rawDate === '99-99-99' ? 'Nach Vereinbarung' : $rawDate);
                ?>
                <article class="card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: var(--space-md); gap: 1rem; flex-wrap: wrap;">
                        <h3 style="font-size: 1.4rem; margin-bottom: 0;"><?= htmlspecialchars($termin['titel'] ?? '') ?></h3>
                        <?php if (!empty($formattedDate)): ?>
                            <time class="termin-datum" datetime="<?= htmlspecialchars($rawDate) ?>" style="color: var(--clr-muted); font-weight: 700; white-space: nowrap;">
                                <?= htmlspecialchars($formattedDate) ?>
                            </time>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($termin['beschreibung'])): ?>
                        <p style="color: var(--clr-muted); margin-bottom: var(--space-md);">
                            <?= nl2br(htmlspecialchars($termin['beschreibung'])) ?>
                        </p>
                    <?php endif; ?>
                    <?php if (!empty($termin['ort'])): ?>
                        <p style="font-size: 0.9rem; font-weight: 600; margin-bottom: 0;">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="display: inline; vertical-align: middle; margin-right: 0.35rem;">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <?= htmlspecialchars($termin['ort']) ?>
                        </p>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p style="text-align: center; color: var(--clr-muted); padding: 3rem 0;">Aktuell sind keine Termine eingetragen. Gerne vereinbaren wir individuelle Führungen nach Absprache.</p>
    <?php endif; ?>
</div>
