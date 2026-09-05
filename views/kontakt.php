<div class="page-kontakt">
    <header class="page-header">
        <h2>Kontakt &amp; Anfahrt</h2>
        <p>Wir freuen uns auf Ihre Nachricht oder Ihren Besuch im Atelier.</p>
    </header>

    <div class="grid">
        <article class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">Wonnegauer Designwerkstatt</h3>
            <address style="font-style: normal; line-height: 2;">
                Plenzer 6<br>
                67592 Flörsheim-Dalsheim<br>
                <br>
                <strong>Telefon:</strong> <?= protected_phone('06243 / 56 49', '+4962435649', null, '', 'text-decoration: underline; font-weight: 600;') ?><br>
                <strong>E-Mail:</strong> <?= protected_email('lettre-bwm@t-online.de', null, '', 'text-decoration: underline; font-weight: 600;') ?><br>
                <strong>E-Mail:</strong> <?= protected_email('designwerkstatt@ternis.eu', null, '', 'text-decoration: underline; font-weight: 600;') ?>
            </address>
        </article>

        <article class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">Webmaster</h3>
            <p style="line-height: 2;">
                <strong>Fabian Ternis</strong><br>
                Webentwicklung<br>
                <a href="https://ternis.dev" target="_blank" rel="noopener noreferrer" style="text-decoration: underline; font-weight: 600;">ternis.dev</a> / <a href="https://ternis-edv.de" target="_blank" rel="noopener noreferrer" style="text-decoration: underline; font-weight: 600;">ternis-edv.de</a> von <a href="https://www.fabianternis.de" target="_blank" rel="noopener noreferrer" style="text-decoration: underline; font-weight: 600;">www.fabianternis.de</a><br>
                <strong>E-Mail:</strong> <?= protected_email('fabian@ternismail.de', null, '', 'text-decoration: underline; font-weight: 600;') ?> / <?= protected_email('contact@ternis.dev', null, '', 'text-decoration: underline; font-weight: 600;') ?>
            </p>
        </article>
    </div>

    <?php if (contact_form_enabled()): ?>
    <!-- Quick Message Form (Turnstile Protected) -->
    <section class="card" style="margin-top: var(--space-xl);" id="kontaktformular">
        <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">Nachricht schreiben</h3>
        <p style="margin-bottom: var(--space-md); color: var(--clr-muted);">
            Haben Sie Fragen zu Werken, Ausstellungen oder Atelier-Terminen? Senden Sie uns gerne eine Nachricht:
        </p>
        <form id="contact-form" class="contact-form" action="#" method="post">
            <div class="form-group">
                <label for="form-name">Ihr Name *</label>
                <input type="text" id="form-name" name="name" required class="form-control" placeholder="Vor- und Nachname">
            </div>
            <div class="form-group" style="margin-top: 1rem;">
                <label for="form-email">Ihre E-Mail-Adresse *</label>
                <input type="email" id="form-email" name="email" required class="form-control" placeholder="ihre-adresse@beispiel.de">
            </div>
            <div class="form-group" style="margin-top: 1rem;">
                <label for="form-message">Ihre Nachricht *</label>
                <textarea id="form-message" name="message" rows="5" required class="form-control" placeholder="Ihre Mitteilung an Wolfgang &amp; Brigitte Ternis..."></textarea>
            </div>
            
            <?php if (turnstile_enabled()): ?>
            <div class="turnstile-wrapper" style="margin-top: 1.25rem;">
                <div class="cf-turnstile" data-sitekey="<?= e(turnstile_site_key()) ?>" data-theme="light"></div>
            </div>
            <?php endif; ?>

            <div style="margin-top: 1.25rem;">
                <button type="submit" id="contact-submit-btn" class="btn btn--primary">Nachricht vorbereiten</button>
            </div>
            <div id="form-feedback" class="form-feedback" style="display:none; margin-top: 1rem;"></div>
        </form>
    </section>
    <?php endif; ?>
</div>
