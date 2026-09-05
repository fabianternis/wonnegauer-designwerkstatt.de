<div class="page-datenschutz">
    <header class="page-header">
        <h2>Datenschutzerklärung</h2>
        <p>Informationen über die Verarbeitung Ihrer personenbezogenen Daten gemäß Datenschutz-Grundverordnung (DSGVO).</p>
    </header>

    <div class="grid">
        <section class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">1. Verantwortliche Stelle</h3>
            <p>Verantwortlich für die Datenverarbeitung auf dieser Website im Sinne der DSGVO ist:</p>
            <address style="font-style: normal; line-height: 1.8; margin-top: 1rem;">
                Wolfgang Ternis<br>
                Plenzer 6<br>
                67592 Flörsheim-Dalsheim<br>
                <br>
                Telefon: <?= protected_phone('06243 / 56 49', '+4962435649', null, '', 'text-decoration: underline; font-weight: 600;') ?><br>
                E-Mail: <?= protected_email('wdw@ternis.dev', null, '', 'text-decoration: underline; font-weight: 600;') ?><br>
                Legal-Kontakt: <?= protected_email('rechtliches@ternismail.de', null, '', 'text-decoration: underline; font-weight: 600;') ?><br>
                Web: <a href="https://www.wonnegauer-designwerkstatt.de" style="text-decoration: underline; font-weight: 600;">www.wonnegauer-designwerkstatt.de</a>
            </address>
        </section>

        <section class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">2. Datenschutz auf einen Blick</h3>
            <div style="line-height: 1.8;">
                <p>Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>
                <p style="margin-top: 1rem;">
                    Die Nutzung unserer Website ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis.
                </p>
            </div>
        </section>
    </div>

    <section class="section" style="margin-top: var(--space-xl);">
        <div class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">3. Datenerfassung auf unserer Website</h3>
            
            <h4 style="font-size: 1.2rem; margin-top: var(--space-md);">Server-Log-Dateien</h4>
            <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in sogenannten Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
            <ul style="margin: 0.5rem 0 1rem 1.5rem; line-height: 1.8;">
                <li>Browsertyp und Browserversion</li>
                <li>Verwendetes Betriebssystem</li>
                <li>Referrer URL (die zuvor besuchte Seite)</li>
                <li>Hostname des zugreifenden Rechners</li>
                <li>Uhrzeit der Serveranfrage</li>
                <li>IP-Adresse</li>
            </ul>
            <p>Diese Daten sind nicht bestimmten Personen zuordenbar. Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen. Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. f DSGVO, der die Verarbeitung von Daten zur Wahrung berechtigter Interessen des Websitebetreibers an einem technisch fehlerfreien Betrieb und der Sicherheit gestattet.</p>

            <h4 style="font-size: 1.2rem; margin-top: var(--space-lg);">Cookies</h4>
            <p>Unsere Website verwendet Cookies. Das sind kleine Textdateien, die Ihr Webbrowser auf Ihrem Endgerät speichert. Wir setzen technisch notwendige Cookies ein (z.B. zur Speicherung Ihrer Datenschutzeinstellungen). Diese werden auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO bzw. § 25 Abs. 2 TDDDG gespeichert.</p>
            <p>Darüber hinausgehende optionale Dienste (wie externe Google Fonts) werden nur nach Ihrer ausdrücklichen Einwilligung aktiviert.</p>
            <div style="margin-top: var(--space-md);">
                <button type="button" id="trigger-cookie-settings" class="btn btn--secondary trigger-cookie-settings" style="font-size: 0.85rem;">Cookie-Einstellungen anpassen</button>
            </div>
        </div>
    </section>

    <section class="section" style="margin-top: var(--space-xl);">
        <div class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">4. Externe Dienste (Google Fonts)</h3>
            <p>Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten Web Fonts von Google. Beim Aufruf einer Seite lädt Ihr Browser die benötigten Web Fonts in ihren Browsercache, um Texte und Schriftarten korrekt anzuzeigen.</p>
            <p><strong>Hinweis:</strong> Die Nutzung von Google Fonts erfolgt nur, wenn Sie über unseren Cookie-Banner oder die Einstellungen ausdrücklich zugestimmt haben (Art. 6 Abs. 1 lit. a DSGVO). Durch die Zustimmung wird eine Verbindung zu den Servern von Google hergestellt. Dabei kann Google erfahren, dass über Ihre IP-Adresse unsere Website aufgerufen wurde.</p>
            <p>Wenn Sie der Nutzung nicht zustimmen, werden Standard-Schriftarten Ihres Betriebssystems verwendet, um Ihre Privatsphäre zu schützen.</p>
        </div>
    </section>

    <section class="section" style="margin-top: var(--space-xl);">
        <div class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">5. Cloudflare Turnstile (Spam- und Bot-Schutz)</h3>
            <p>Auf unserer Kontaktseite setzen wir den Dienst <strong>Cloudflare Turnstile</strong> ein, betrieben von der Cloudflare, Inc., 101 Townsend St, San Francisco, CA 94107, USA.</p>
            <p style="margin-top: 0.5rem;">Turnstile dient der Prüfung, ob Interaktionen auf unserer Website durch menschliche Besucher oder durch automatisierte Schadprogramme (Bots, Scraper) vorgenommen werden. Hierdurch schützen wir unsere Kontaktangaben (E-Mail und Telefon) sowie Übertragungen vor unerwünschtem Spam und automatisiertem Harvesting.</p>
            <p style="margin-top: 0.5rem;">Hierzu analysiert Turnstile bestimmte technische Merkmale des Endgeräts (u.a. IP-Adresse, Header-Informationen und Interaktionssignale). Turnstile setzt dabei keine persistenten Werbe- oder Tracking-Cookies.</p>
            <p style="margin-top: 0.5rem;">Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO. Unser berechtigtes Interesse liegt in der Abwehr von Spam-Angriffen und dem Schutz unserer Kommunikationskanäle vor automatisiertem Auslesen.</p>
        </div>
    </section>

    <section class="section" style="margin-top: var(--space-xl);">
        <div class="card">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--space-md);">6. Ihre Rechte</h3>
            <p>Sie haben als betroffene Person jederzeit im Rahmen der gesetzlichen Bestimmungen der DSGVO folgende Rechte:</p>
            <ul style="margin: 0.5rem 0 1rem 1.5rem; line-height: 1.8;">
                <li><strong>Auskunft (Art. 15 DSGVO):</strong> Recht auf unentgeltliche Auskunft über Herkunft, Empfänger und Zweck Ihrer gespeicherten personenbezogenen Daten.</li>
                <li><strong>Berichtigung (Art. 16 DSGVO):</strong> Recht auf unverzügliche Berichtigung unrichtiger Daten oder Vervollständigung.</li>
                <li><strong>Löschung (Art. 17 DSGVO):</strong> Recht auf Löschung Ihrer bei uns gespeicherten personenbezogenen Daten, sofern keine gesetzlichen Aufbewahrungspflichten entgegenstehen.</li>
                <li><strong>Einschränkung der Verarbeitung (Art. 18 DSGVO):</strong> Recht, die Einschränkung der Datenverarbeitung zu verlangen.</li>
                <li><strong>Datenübertragbarkeit (Art. 20 DSGVO):</strong> Recht, Daten in einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten.</li>
                <li><strong>Widerruf (Art. 7 Abs. 3 DSGVO):</strong> Recht, eine erteilte Einwilligung zur Datenverarbeitung jederzeit für die Zukunft zu widerrufen.</li>
                <li><strong>Beschwerderecht (Art. 77 DSGVO):</strong> Recht auf Beschwerde bei einer zuständigen Datenschutz-Aufsichtsbehörde.</li>
            </ul>
            <p style="margin-top: 1rem;">Hierzu sowie zu weiteren Fragen zum Thema Datenschutz können Sie sich jederzeit an die oben angegebene Adresse oder an <?= protected_email('rechtliches@ternismail.de', null, '', 'text-decoration: underline; font-weight: 600;') ?> wenden.</p>
        </div>
    </section>
</div>
