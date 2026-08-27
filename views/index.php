<div class="page-index">

    <section class="home-section">
        <div class="content-split" style="align-items: center;">
            <div class="img-card-container">
                <div class="img-card">
                    <img src="<?= url('assets/img/index/1.jpg') ?>" alt="Wonnegauer Designwerkstatt – Atelier und Skulpturen in Flörsheim-Dalsheim" data-lightbox="true" data-lightbox-group="home">
                </div>
            </div>
            <div>
                <h2>Willkommen bei der Wonnegauer Designwerkstatt</h2>
                <p>Wir, Brigitte und Wolfgang Ternis, laden Sie ein, die Verbindung von Design, Kunst und Kultur in der malerischen Kulisse von Flörsheim-Dalsheim zu entdecken.</p>
                <p>An unserem Standort im Wonnegau fördern wir Kreativität und Lebensqualität durch eigenes Schaffen und inspirierende Begegnungen.</p>
                <a href="<?= url('wir') ?>" class="cta-link">
                    <span>Mehr über uns</span>
                    <svg class="cta-link__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="home-section">
        <div class="content-split" style="align-items: center;">
            <div style="order: 2;">
                <div class="img-card-container">
                    <div class="img-card">
                        <img src="<?= url('assets/img/index/lyon.JPG') ?>" alt="Gästeführungen und Tandem-Radwanderungen durch Rheinhessen" data-lightbox="true" data-lightbox-group="home">
                    </div>
                </div>
            </div>
            <div style="order: 1;">
                <h2>Gästeführungen &amp; Radwanderungen</h2>
                <p>Entdecken Sie die Schönheit Rheinhessens und des Wonnegaus auf ganz besondere Weise. Wir bieten fachkundige Führungen zu Fuß oder mit dem Rad an.</p>
                <a href="<?= url('termine') ?>" class="cta-link">
                    <span>Termine &amp; Führungen</span>
                    <svg class="cta-link__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="home-section" style="text-align: center;">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2>Aktuelles &amp; Termine</h2>
            <p>Bleiben Sie informiert über unsere neuesten Ausstellungen, Veranstaltungen und geführten Touren durch die Region.</p>
            <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                <a href="<?= url('aktuell') ?>" class="cta-link">
                    <span>Aktuelles</span>
                    <svg class="cta-link__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="<?= url('termine') ?>" class="cta-link">
                    <span>Alle Termine</span>
                    <svg class="cta-link__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="home-section">
        <h2 style="text-align: center; margin-bottom: 3rem;">Einblicke in die Kunst</h2>
        <div class="grid">
            <div class="img-card">
                <img src="<?= url('assets/img/kunst/kunst1.jpg') ?>" alt="Acrylbilder von Wolfgang Ternis – Das gelbe Dach, Gehen und Kommen" data-lightbox="true" data-lightbox-group="home-kunst">
            </div>
            <div class="img-card">
                <img src="<?= url('assets/img/kunst/unendlich.jpg') ?>" alt="Skulptur Einfach Unendlich – Holzplastik aus Fassdauben" data-lightbox="true" data-lightbox-group="home-kunst">
            </div>
            <div class="img-card">
                <img src="<?= url('assets/img/kunst/kunst2.jpg') ?>" alt="Acryl-Gemälde: Pure Energie und Jahreszeiten im Wandel" data-lightbox="true" data-lightbox-group="home-kunst">
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="<?= url('kunst') ?>" class="cta-link">
                <span>Mehr Kunstwerke ansehen</span>
                <svg class="cta-link__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </section>

    <section class="home-section" style="background-color: #f9f9f9; padding: clamp(3rem, 6vw, 6rem) 1rem; border-radius: 4px;">
        <h2 style="text-align: center; margin-bottom: 3rem;">Designprojekte</h2>
        <div class="content-split" style="justify-content: center; gap: clamp(2rem, 4vw, 4rem);">
            <div class="img-card" style="flex: 0 1 400px; max-width: 100%;">
                <img src="<?= url('assets/img/design/einefueralle.jpg') ?>" alt="Designprojekt: Eine für Alle – 360° Rundum-Uhr" data-lightbox="true" data-lightbox-group="home-design">
            </div>
            <div class="img-card" style="flex: 0 1 400px; max-width: 100%;">
                <img src="<?= url('assets/img/design/leuchte1.jpg') ?>" alt="Designprojekt: Stehleuchte mit Plexiglaszylinder" data-lightbox="true" data-lightbox-group="home-design">
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="<?= url('design') ?>" class="cta-link">
                <span>Zu den Designprojekten</span>
                <svg class="cta-link__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </section>

    <section class="home-section">
        <div class="content-split" style="align-items: center;">
            <div class="img-card-container">
                <div class="img-card">
                    <img src="<?= url('assets/img/kultur/1.jpg') ?>" alt="Kulturelles Engagement: Tandem-Fahrt nach Garons" data-lightbox="true" data-lightbox-group="home-kultur">
                </div>
            </div>
            <div>
                <h2>Kulturelles Engagement</h2>
                <p>Kultur ist für uns mehr als nur ein Begriff – sie ist gelebte Leidenschaft. Wir engagieren uns in regionalen Projekten und fördern den kulturellen Austausch.</p>
                <p>Von Partnerschaften mit unseren Nachbarn in Frankreich bis hin zu lokalen Kunstpfaden – entdecken Sie unser vielfältiges Engagement.</p>
                <a href="<?= url('kultur') ?>" class="cta-link">
                    <span>Mehr erfahren</span>
                    <svg class="cta-link__icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</div>
