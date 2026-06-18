<footer class="site-footer">
    <div class="container">
        <nav class="footer-nav" aria-label="Footer-Navigation">
            <ul>
                <li><a href="<?= url('impressum') ?>">Impressum</a></li>
                <li><a href="<?= url('impressum') ?>#datenschutz">Datenschutz</a></li>
                <li><a href="<?= url('kontakt') ?>">Kontakt</a></li>
                <li><a href="#" id="open-cookie-settings">Cookie-Einstellungen</a></li>
                <li><a href="#" id="print-page-btn" title="Seite drucken">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16" style="vertical-align: middle; margin-right: 4px;">
                      <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                      <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                    </svg>Drucken
                </a></li>
            </ul>
        </nav>
        
        <p>Plenzer 6, 67592 Flörsheim-Dalsheim · Telefon: 06243 / 56 49</p>
        <p style="margin-top: 1rem;">Webentwicklign und design von <a href="https://xpsystems.eu" target="_blank" style="text-decoration: underline;">xpsysetme.eu</a> & <a href="https://ternis-edv.de" target="_blank" style="text-decoration: underline;">ternis-edv.de</a></p>
        
        <p class="site-footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?></p>

    </div>

    <div style="margin-top: 2rem; width: 100%;">
        <img src="<?= url('assets/img/banners/TOP.jpg') ?>" alt="Wonnegauer Designwerkstatt" style="width: 100%; display: block; object-fit: cover;">
    </div>
</footer>
