<footer class="site-footer">
    <div class="container">
        <nav class="footer-nav" aria-label="Footer-Navigation">
            <ul>
                <li><a href="<?= url('impressum') ?>">Impressum</a></li>
                <li><a href="<?= url('impressum') ?>#datenschutz">Datenschutz</a></li>
                <li><a href="<?= url('kontakt') ?>">Kontakt</a></li>
                <li><a href="#" id="open-cookie-settings">Cookie-Einstellungen</a></li>
            </ul>
        </nav>
        
        <p>Plenzer 6, 67592 Flörsheim-Dalsheim · Telefon: 06243 / 56 49</p>
        <p class="mt-md">Webentwicklign und design von <a href="https://xpsystems.eu" target="_blank" class="text-underline">xpsysetme.eu</a> & <a href="https://ternis-edv.de" target="_blank" class="text-underline">ternis-edv.de</a></p>
        
        <p class="site-footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?></p>

    </div>

    <div class="mt-xl w-100">
        <img src="<?= url('assets/img/banners/TOP.jpg') ?>" alt="Wonnegauer Designwerkstatt" class="w-100 d-block object-cover">
    </div>
</footer>
