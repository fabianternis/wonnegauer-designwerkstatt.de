<footer class="site-footer">
    <div class="container site-footer__inner">
        <div class="site-footer__section">
            <h4>Über uns</h4>
            <p><?= htmlspecialchars($config['site_name']) ?></p>
            <p>Kunst · Kultur · Design · Rheinhessen</p>
        </div>
        <div class="site-footer__section">
            <h4>Kontakt</h4>
            <address style="font-style: normal;">
                Plenzer 6<br>
                67592 Flörsheim-Dalsheim<br>
                Telefon: <a href="tel:+4962435649">06243 / 56 49</a>
            </address>
        </div>
        <div class="site-footer__section">
            <h4>Rechtliches</h4>
            <nav class="footer-nav" aria-label="Footer-Navigation">
                <ul style="list-style: none;">
                    <li>
                        <a href="<?= url('impressum') ?>"
                           <?= is_active('impressum') ? 'aria-current="page"' : '' ?>>Impressum</a>
                    </li>
                    <li>
                        <a href="<?= url('kontakt') ?>"
                           <?= is_active('kontakt') ? 'aria-current="page"' : '' ?>>Kontakt</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="margin-top: var(--space-xl); border-top: 1px solid var(--clr-border); padding-top: var(--space-lg);">
        <p class="site-footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?></p>
    </div>
</footer>
