<footer class="site-footer">
    <div class="container">
        <nav class="footer-nav" aria-label="Footer-Navigation">
            <ul>
                <li><a href="<?= url('impressum') ?>">Impressum</a></li>
                <li><a href="<?= url('impressum') ?>#datenschutz">Datenschutz</a></li>
                <li><a href="<?= url('kontakt') ?>">Kontakt</a></li>
            </ul>
        </nav>
        
        <p>Plenzer 6, 67592 Flörsheim-Dalsheim · Telefon: 06243 / 56 49</p>
        <p class="mt-1">Webentwicklung und design von <a href="https://xpsystems.eu" target="_blank" class="underline">xpsystems.eu</a> & <a href="https://ternis-edv.de" target="_blank" class="underline">ternis-edv.de</a></p>
        
        <p class="site-footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?></p>

    </div>

    <div class="footer-banner-container">
        <img src="<?= url('assets/img/banners/TOP.jpg') ?>" alt="Wonnegauer Designwerkstatt" class="footer-banner-img">
    </div>
</footer>
