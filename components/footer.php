<footer class="site-footer">
    <div class="container">
        <nav class="footer-nav" aria-label="Footer-Navigation">
            <ul>
                <li><a href="<?= url('impressum') ?>">Impressum</a></li>
                <li><a href="<?= url('impressum') ?>#datenschutz">Datenschutz</a></li>
                <li><a href="<?= url('kontakt') ?>">Kontakt</a></li>
                <li><button type="button" id="open-cookie-settings" class="footer-nav__btn">Cookie-Einstellungen</button></li>
                <li>
                    <button type="button" id="print-page-btn" class="footer-nav__btn" title="Seite drucken" aria-label="Seite drucken">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16" aria-hidden="true" style="vertical-align: middle; margin-right: 4px;">
                          <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                          <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                        </svg>
                        <span>Drucken</span>
                    </button>
                </li>
            </ul>
        </nav>
        
        <p class="site-footer__contact">Plenzer 6, 67592 Flörsheim-Dalsheim · Telefon: <a href="tel:+4962435649" style="text-decoration: underline;">06243 / 56 49</a></p>
        <p style="margin-top: 1rem;">Webdesign und Webentwicklung: <a href="https://xpsystems.eu" target="_blank" rel="noopener noreferrer" style="text-decoration: underline;">xpsystems.eu</a> &amp; <a href="https://ternis-edv.de" target="_blank" rel="noopener noreferrer" style="text-decoration: underline;">ternis-edv.de</a> (<a href="https://ternis.dev" target="_blank" rel="noopener noreferrer" style="text-decoration: underline;">ternis.dev</a>)</p>
        
        <p class="site-footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?> · Alle Rechte vorbehalten</p>
    </div>

    <div style="margin-top: 2rem; width: 100%;">
        <img src="<?= url('assets/img/banners/TOP.jpg') ?>" alt="Wonnegauer Designwerkstatt Impression" style="width: 100%; display: block; object-fit: cover;" loading="lazy">
    </div>
</footer>
