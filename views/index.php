<div class="page-index">

    <section class="home-section">
        <div class="responsive-grid" style="align-items: center;">
            <div class="img-card-container">
                <div class="img-card">
                    <img src="<?= url('assets/img/index/1.jpg') ?>" alt="Wonnegauer Designwerkstatt">
                </div>
            </div>
            <div>
                <h2>Willkommen in der Designwerkstatt</h2>
                <p>Wir, Brigitte und Wolfgang Ternis, laden Sie ein, die Verbindung von Design, Kunst und Kultur in der malerischen Kulisse von Flörsheim-Dalsheim zu entdecken.</p>
                <p>An unserem Standort im Wonnegau fördern wir Kreativität und Lebensqualität durch eigenes Schaffen und inspirierende Begegnungen.</p>
                <a href="<?= url('wir') ?>" class="cta-link">Mehr über uns <span>&rarr;</span></a>
            </div>
        </div>
    </section>

    <section class="home-section">
        <div class="responsive-grid" style="align-items: center;">
            <div style="order: 2;">
                <div class="img-card-container">
                    <div class="img-card">
                        <img src="<?= url('assets/img/index/lyon.JPG') ?>" alt="Gästeführungen">
                    </div>
                </div>
            </div>
            <div style="order: 1;">
                <h2>Gästeführungen & Radwanderungen</h2>
                <p>Entdecken Sie die Schönheit Rheinhessens und des Wonnegaus auf ganz besondere Weise. Wir bieten fachkundige Führungen zu Fuß oder mit dem Rad an.</p>
                <a href="<?= url('termine') ?>" class="cta-link">Termine & Führungen <span>&rarr;</span></a>
            </div>
        </div>
    </section>

    <section class="home-section" style="text-align: center;">
        <div class="container" style="max-width: 800px;">
            <h2>Aktuelles & Termine</h2>
            <p>Bleiben Sie informiert über unsere neuesten Ausstellungen, Veranstaltungen und geführten Touren durch die Region.</p>
            <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                <a href="<?= url('aktuell') ?>" class="cta-link">Aktuelles <span>&rarr;</span></a>
                <a href="<?= url('termine') ?>" class="cta-link">Alle Termine <span>&rarr;</span></a>
            </div>
        </div>
    </section>

</div>
