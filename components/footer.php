<footer class="site-footer">
    <div class="container">
        <nav class="footer-nav" aria-label="Footer-Navigation">
            <ul>
                <li><a href="<?= url('impressum') ?>">Impressum</a></li>
                <li><a href="<?= url('kontakt') ?>">Kontakt</a></li>
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
