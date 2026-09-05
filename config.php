<?php

return [
    'site_name'        => env('SITE_NAME', 'Wonnegauer Designwerkstatt'),
    'base_url'         => env('BASE_URL', ''),
    'canonical_domain' => env('CANONICAL_DOMAIN', 'https://www.wonnegauer-designwerkstatt.de'),

    'contact_form_enabled' => (bool) env('CONTACT_FORM_ENABLED', true),

    'turnstile' => [
        'enabled'    => (bool) env('TURNSTILE_ENABLED', true),
        'site_key'   => (string) env('TURNSTILE_SITE_KEY', '1x00000000000000000000AA'),
        'secret_key' => (string) env('TURNSTILE_SECRET_KEY', '1x0000000000000000000000000000000AA'),
    ],

    'pages' => [
        'index' => [
            'title'       => 'Willkommen',
            'description' => 'Wonnegauer Designwerkstatt – Brigitte und Wolfgang Ternis aus Flörsheim-Dalsheim. Kunst, Kultur, Design und Gästeführungen in Rheinhessen.',
            'view'        => 'index',
        ],
        'aktuell' => [
            'title'       => 'Aktuell',
            'description' => 'Aktuelle Neuigkeiten, Ausstellungen und Öffnungszeiten der Wonnegauer Designwerkstatt in Flörsheim-Dalsheim.',
            'view'        => 'aktuell',
            'background_color' => 'rgb(255, 255, 204)',
            'items'       => [
                [
                    'text' => 'Öffnungszeiten nach Vereinbarung, oder einfach mal klingeln – wenn wir da sind, sind wir für Sie da.',
                ],
                [
                    'text' => 'Ausstellung „Orange" im Verbandsgemeinde Museum in Gimbsheim.',
                    'link' => ['href' => 'https://www.museum-vg-eich.de', 'label' => 'www.museum-vg-eich.de'],
                ],
            ],
        ],
        'termine' => [
            'title'            => 'Termine',
            'description'      => 'Kommende Veranstaltungen, Atelierführungen und Radwanderungen der Wonnegauer Designwerkstatt.',
            'view'             => 'termine',
            'background_color' => 'rgb(194, 232, 195)',
            'termine'     => [
                [
                    'datum'       => '99-99-99',
                    'titel'       => 'Beispiel',
                    'beschreibung'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi maiores quia quasi iusto accusamus eveniet tempora, libero quam quaerat architecto, omnis nihil officia repudiandae maxime ad debitis. Culpa, velit! Nisi.',
                    'ort'         => 'Ort Platzhalter',
                ],
            ],
        ],
        'kunst' => [
            'title'       => 'Kunst',
            'description' => 'Kunstwerke und Projekte von Wolfgang Ternis – Acrylbilder, Plastiken und Installationen aus der Wonnegauer Designwerkstatt.',
            'view'        => 'kunst',
            'items'       => [
                [
                    'bilder' => ['assets/img/kunst/empfangskomitee_bahnhof.jpg'],
                    'text'   => '"Empfangskomitee" – Als aktiver Mensch versuche ich Einflüsse und Strömungen in mein Handeln einzubeziehen. In der Öffentlichkeit wurde und wird intensiv über die Willkommenskultur in Deutschland debattiert. Dieser Willkommensgedanke und die Partnerschaft mit Garons haben mich inspiriert, die schon länger als „Begrüßer" eingesetzten Faßdauben in einem Objekt zu vereinen, um als „Empfangskomitee" die Offenheit und Freundlichkeit von Flörsheim-Dalsheim zu symbolisieren. Die drei Fassdauben haben sich zu einer Dreiergruppe zusammengefunden und stehen seit dem 25. März 2015 auf der Grünfläche gegenüber des Bahnhofs als das „Empfangskomitee" bereit, um mit ihren am oberen Ende eingefrässten, lachenden Gesichtern stellvertretend für die Flörsheim-Dalsheimer, unsere Partnergemeinde Garons und alle vorbeikommenden Besucher mit heiterer Offenheit zu grüßen.',
                ],
                [
                    'bilder' => ['assets/img/kunst/atelier_2013.jpg'],
                    'text'   => 'Unser Atelier wurde im Sommer 2013 eröffnet.',
                ],
                [
                    'bilder' => ['assets/img/kunst/unendlich.jpg'],
                    'text'   => 'Einfach Unendlich',
                ],
                [
                    'bilder' => ['assets/img/kunst/kunst1.jpg'],
                    'text'   => "„Das gelbe Dach\"\n„Gehen und Kommen, Woher und Wohin?\"\n„Verdichten und Expandieren\"\n„Licht am Ende des Tunnels\"",
                ],
                [
                    'bilder' => ['assets/img/kunst/kunst2.jpg'],
                    'text'   => "Bild links: Jahreszeiten – auch diese verändern sich.\nBild rechts: Pure Energie; Sonne und die noch brodelnde Erde, mittendrin das Leben.",
                ],
                [
                    'bilder' => ['assets/img/kunst/bühne_dgh.jpg'],
                    'text'   => '„Bühnenbild „Annabelle und die Wunschkugel"',
                ],
                [
                    'bilder' => ['assets/img/kunst/SchemaDenken.JPG'],
                    'text'   => "Schema - Denken\nJeder hat bestimmte Denkschemata, die nebeneinander funktionieren,die sich aber auch vermischen können.",
                ],
                [
                    'bilder' => ['assets/img/kunst/EMPFANGSKOMITEE.JPG'],
                    'text'   => "Begrüßer, in Gruppen oder als Einzelobjekte",
                ],
                [
                    'bilder' => ['assets/img/kunst/das_wichtige.JPG'],
                    'text'   => "Bilder zum Zyklus “Das Wichtige”\nErde, Himmel, Sonne und was daraus entsteht",
                ],
                [
                    'bilder' => ['assets/img/kunst/die_erde_brennt_1.JPG', 'assets/img/kunst/die_erde_brennt_2.JPG'],
                    'text'   => "„Die Erde brennt\"\nDer Hochglanzlack steht für den Glamour in der Welt, das matte Acryl für das reale Leben. Die Erde brennt in allen Bereichen – in Wirtschaft, Ökologie und Gesellschaft.",
                ],
            ],
        ],
        'kultur' => [
            'title'       => 'Kultur',
            'description' => 'Kulturelles Engagement der Wonnegauer Designwerkstatt – Veranstaltungen, Kooperationen und regionale Kulturprojekte in Rheinhessen.',
            'view'        => 'kultur',
        ],
        'design' => [
            'title'       => 'Design',
            'description' => 'Designarbeiten und Projekte aus der Wonnegauer Designwerkstatt – Grafikdesign, Raumgestaltung und Produktdesign.',
            'view'        => 'design',
            'items'       => [
                [
                    'bilder' => ['assets/img/design/einefueralle.jpg'],
                    'text'   => '„Eine für Alle, die 360° Rundum-Uhr" – Veröffentlichung in der Zeitschrift „Möbel Design"',
                ],
                [
                    'bilder' => ['assets/img/design/rundum_md2.jpg'],
                    'text'   => '„Eine für Alle" – Veröffentlichung in der Zeitschrift „Uhren & Schmuck"',
                ],
                [
                    'bilder' => ['assets/img/design/leuchte1.jpg', 'assets/img/design/leuchte2.jpg'],
                    'text'   => '„Stehleuchte" – Plexiglaszylinder mit Halogenstrahler und unterschiedlichen Spiegeln zur Umlenkung des Lichtstrahls',
                    'layout' => 'two-col', // two images side by side on desktop
                ],
            ],
        ],
        'wir' => [
            'title'       => 'Wir',
            'description' => 'Brigitte und Wolfgang Ternis – Dipl.-Designer aus Flörsheim-Dalsheim, Gründer der Wonnegauer Designwerkstatt.',
            'view'        => 'wir',
        ],
        'links' => [
            'title'       => 'Links',
            'description' => 'Empfehlenswerte Links zu Kunst, Kultur, Design und Tourismus in Rheinhessen und der Region.',
            'view'        => 'links',
            'items'       => [
                [
                    'url'   => 'https://www.museum-vg-eich.de',
                    'titel' => 'Museum VG Eich – Verbandsgemeinde Museum Gimbsheim',
                ],
                [
                    'url'   => 'https://www.vg-monsheim.de',
                    'titel' => 'Verbandsgemeinde Monsheim',
                ],
                [
                    'url'   => 'https://www.rheinhessen.de',
                    'titel' => 'Rheinhessen Tourismus',
                ],
                [
                    'url'   => 'https://www.garons.fr',
                    'titel' => 'Gemeinde Garons (Partnergemeinde)',
                ],
                [
                    'url'   => 'https://www.fabianternis.de',
                    'titel' => 'Fabian Ternis – Webentwickler',
                ],
                [
                    'url'   => 'https://www.xpsystems.de',
                    'titel' => 'xpsystems – Webentwicklung',
                ],
                // [
                //     'url'   => 'https://www.fabianternis.dev',
                //     'titel' => 'Fabian Ternis – Webentwickler',
                // ],
                [
                    'url'   => 'https://www.ternis.de',
                    'titel' => 'ternis.dev - Webentwicklung',
                ],
            ],
        ],
        'kontakt' => [
            'title'       => 'Kontakt',
            'description' => 'Kontakt zur Wonnegauer Designwerkstatt – Adresse, Telefon und E-Mail von Brigitte und Wolfgang Ternis in Flörsheim-Dalsheim.',
            'view'        => 'kontakt',
        ],
        'impressum' => [
            'title'       => 'Impressum',
            'description' => 'Impressum der Wonnegauer Designwerkstatt – Angaben gemäß § 5 TMG.',
            'view'        => 'impressum',
        ],
        'datenschutz' => [
            'title'       => 'Datenschutz',
            'description' => 'Datenschutzerklärung der Wonnegauer Designwerkstatt – Informationen zur Verarbeitung personenbezogener Daten nach DSGVO.',
            'view'        => 'datenschutz',
        ],
    ],

    'nav' => ['aktuell', 'termine', 'kunst', 'kultur', 'design', 'wir', 'links', 'kontakt'],
];
