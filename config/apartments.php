<?php

return $apartments = [
	[
        "user_id" => 1,
        "id" =>1,
		"title" => "Appartamento vista Cattedrale",
		"rooms" => 20,
		"beds" => 10,
		"bathrooms" => 5,
		"sqm" => 50,
		"address" => "Via Vittorio Emanuele, 90134 Palermo, Italia",
		"latitude" => 38.11392,
		"longitude" => 13.35709,
		"image" => '/images/Palermo.jpg',
		"image_original_name" => 'Palermo.jpg',
		"visible" => true,
        "services" => [1,2,3,4,5,6,7,8,9,10],
        "sponsorships" => 1,
        "messages-text" =>
        [
            'Ciao! Sono interessato all\'appartamento, è possibile sapere il prezzo?',
            'Quanto costa?',
            'La vista è sul mare?'
        ],
        "messages-email" =>
        [
            'Interessato@gmail.com',
            'john@gmail.com',
            'snow@gmail.com',
        ]
    ],
    [
        "user_id" => 2,
        "id" =>2,
		"title" => "Appartamento in centro",
		"rooms" => 12,
		"beds" => 5,
		"bathrooms" => 3,
		"sqm" => 50,
		"address" => "Via dei Piccardi 8 Trieste",
		"latitude" => 45.64739,
		"longitude" => 13.78669,
		"image" => '/images/Trieste.jpg',
		"image_original_name" => 'Trieste.jpg',
		"visible" => true,
        "services" => [3,7,9],
        "sponsorships" => 3,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'JohnCena@gmail.com',
            'VinDiesel@gmail.com',
            'SilvioBerlusconi@gmail.com',
        ]
    ],
    [
        "user_id" => 2,
        "id" =>3,
		"title" => "Appartamento in centro Milano",
		"rooms" => 4,
		"beds" => 2,
		"bathrooms" => 3,
		"sqm" => 150,
		"address" => "Via Buonarroti 5 Milano",
		"latitude" => 45.54578,
		"longitude" => 8.94989,
		"image" => '/images/Buonarroti.jpg',
		"image_original_name" => 'Buonarroti.jpg',
		"visible" => true,
        "services" => [2,4],
        "sponsorships" => 2,
        "messages-text" =>
        [
            'Ciao, mi sapresti dire se si possono portare i cani?',
            'Quanto costa?',
            'Per caso è presente l\'ascensore?'
        ],
        "messages-email" =>
        [
            'GiulioRossi@gmail.com',
            'MarioVerdi@gmail.com',
            'PaoloForte@gmail.com',
        ]
    ],
    [
        "user_id" => 2,
        "id" =>4,
		"title" => "Appartamento fuori Bologna",
		"rooms" => 10,
		"beds" => 7,
		"bathrooms" => 2,
		"sqm" => 120,
		"address" => "Via dei Lamponi 22 Bologna",
		"latitude" => 44.47548,
		"longitude" => 11.37035,
		"image" => '/images/Lamponi.jpg',
		"image_original_name" => 'Lamponi.jpg',
		"visible" => true,
        "services" => [1,4,5],
        "sponsorships" => 1,
        "messages-text" =>
        [
            'Ciao, per caso è presente un parcheggio privato?',
            'Quanto costa?',
            'Ci sono dei supermercati nei paraggi?'
        ],
        "messages-email" =>
        [
            'CarloGianni@gmail.com',
            'PietroTornaindietro@gmail.com',
            'MarcoMarchi@gmail.com',
        ]
    ],
    [
        "user_id" => 2,
        "id" =>5,
		"title" => "Appartamento fuori Viterbo",
		"rooms" => 6,
		"beds" => 2,
		"bathrooms" => 1,
		"sqm" => 70,
		"address" => "Via Roma 20 Viterbo",
		"latitude" => 42.48722,
		"longitude" => 12.25073,
		"image" => '/images/Viterbo.jpg',
		"image_original_name" => 'Viterbo.jpg',
		"visible" => true,
        "services" => [3,5,8],
        "sponsorships" => 2,
        "messages-text" =>
        [
            'Ciao, mi sapresti dire se è presente internet in casa?',
            'Quanto costa?',
            'Quanto silenzio trovo in appartamento?'
        ],
        "messages-email" =>
        [
            'FabioFazio@gmail.com',
            'LucianaLitizzetto@gmail.com',
            'PaoloBrosio@gmail.com',
        ]
    ],
    [
        "user_id" => 1,
        "id" =>6,
		"title" => "Appartamento in periferia",
		"rooms" => 4,
		"beds" => 2,
		"bathrooms" => 1,
		"sqm" => 20,
		"address" => "via Cesare Battisti 13 Bagheria",
		"latitude" => 38.0754,
		"longitude" => 13.50444,
		"image" => '/images/Bagheria.jpg',
		"image_original_name" => 'Bagheria.jpg',
		"visible" => true,
        "services" => [1,4,8],
        "sponsorships" => 2,
        "messages-text" =>
        [
            'Hey, potrei ricevere maggiori informazioni su quest\'appartamento?',
            'Quest\'appartamento è vicino alla stazione?',
            'Quanto dista il centro a piedi?',
            'La colazione è compresa?'
        ],
        "messages-email" =>
        [
            'Pincopallo@gmail.com',
            'utenteImportante@gmail.com',
            'Renzi@gmail.com',
            'pagliaccio@gmail.com'
        ]
    ],
    [
        "user_id" => 1,
        "id" =>7,
		"title" => "Appartamento vista mare",
		"rooms" => 20,
		"beds" => 5,
		"bathrooms" => 5,
		"sqm" => 150,
		"address" => "Largo Trizzanò, 90017 Santa Flavia PA",
		"latitude" => 38.08965,
		"longitude" => 13.53865,
		"image" => '/images/Porticello.jpg',
		"image_original_name" => 'Porticello.jpg',
		"visible" => true,
        "services" => [1,2,5,7,9],
        "sponsorships" => 3,
        "messages-text" =>
        [
            'Soggiornare al Lido vicino è gratuito?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?',
            'La colazione è inclusa?',
            'Ci sono delle zanzariere',
        ],
        "messages-email" =>
        [
            'curioso23@gmail.com',
            'esagerato50@gmail.com',
            'helloSpank@gmail.com',
            'cyborg40@gmail.com',
            'sonoio@gmail.com',
        ]
    ],
    [
        "user_id" => 1,
        "id" =>8,
		"title" => "Appartamento vicino al porto",
		"rooms" => 5,
		"beds" => 2,
		"bathrooms" => 1,
		"sqm" => 60,
		"address" => "Piazza Europa, 95129 Catania CT",
		"latitude" => 37.51639,
		"longitude" => 15.10534,
		"image" => '/images/Catania.jpg',
		"image_original_name" => 'Catania.jpg',
		"visible" => true,
        "services" => [1,4,5,6],
        "sponsorships" => 2,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'TizioCaio@gmail.com',
            'Sempronio@gmail.com',
            'PaoloMaldini@gmail.com',
        ]
    ],
    [
        "user_id" => 3,
        "id" =>9,
		"title" => "Appartamento a Udine",
		"rooms" => 4,
		"beds" => 2,
		"bathrooms" => 3,
		"sqm" => 80,
		"address" => "Viale Trieste 23 Udine",
		"latitude" => 46.0675,
		"longitude" => 13.24455,
		"image" => '/images/Udine.jpg',
		"image_original_name" => 'Udine.jpg',
		"visible" => true,
        "services" => [5,7,8],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'SalePepe@gmail.com',
            'MozzaRella@gmail.com',
            'CacioPepe@gmail.com',
        ]
    ],
    [
        "user_id" => 3,
        "id" =>10,
		"title" => "Appartamento a Marano",
		"rooms" => 6,
		"beds" => 4,
		"bathrooms" => 2,
		"sqm" => 160,
		"address" => "Via Adda 63 Marano di Napoli",
		"latitude" => 40.90289,
		"longitude" => 14.17808,
		"image" => '/images/Maranp.jpg',
		"image_original_name" => 'Marano.jpg',
		"visible" => true,
        "services" => [1,9],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'PaoloBitta@gmail.com',
            'AldoBrando@gmail.com',
            'PaoloBonolis@gmail.com',
        ]
    ],
    [
        "user_id" => 3,
        "id" =>11,
		"title" => "Appartamento a Senigallia",
		"rooms" => 6,
		"beds" => 5,
		"bathrooms" => 3,
		"sqm" => 90,
		"address" => "Via Marche 32 Senigallia",
		"latitude" => 43.70733,
		"longitude" => 13.21841,
		"image" => '/images/Senigallia.jpg',
		"image_original_name" => 'Senigallia.jpg',
		"visible" => true,
        "services" => [3,4,7],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'JavierZanetti@gmail.com',
            'ChristianDeSica@gmail.com',
            'MariaDeFilippi@gmail.com',
        ]
    ],
    [
        "user_id" => 3,
        "id" =>12,
		"title" => "Via Roma 45 Pavia",
		"rooms" => 7,
		"beds" => 3,
		"bathrooms" => 3,
		"sqm" => 95,
		"address" => "Piazza Europa, 95129 Catania CT",
		"latitude" => 45.02653,
		"longitude" => 9.27227,
		"image" => '/images/Pavia.jpg',
		"image_original_name" => 'Pavia.jpg',
		"visible" => true,
        "services" => [6,7,8],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'MarioRossi@gmail.com',
            'GiulioGiulia@gmail.com',
            'FedericoSecondo@gmail.com',
        ]
    ],
    [
        "user_id" => 4,
        "id" =>13,
		"title" => "Appartamento vicino al porto",
		"rooms" => 2,
		"beds" => 1,
		"bathrooms" => 1,
		"sqm" => 40,
		"address" => "Via Trieste 30 Pescara",
		"latitude" => 42.38762,
		"longitude" => 14.09574,
		"image" => '/images/Pescara.jpg',
		"image_original_name" => 'Pescara.jpg',
		"visible" => true,
        "services" => [3,5,6],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'MauroCostanzo@gmail.com',
            'SaraSalli@gmail.com',
            'CarloCarli@gmail.com',
        ]
    ],
    [
        "user_id" => 4,
        "id" =>14,
		"title" => "Appartamento vicino al porto",
		"rooms" => 5,
		"beds" => 3,
		"bathrooms" => 10,
		"sqm" => 130,
		"address" => "Via Milano 20 Grosseto",
		"latitude" => 42.96887,
		"longitude" => 11.03455,
		"image" => '/images/Grosseto.jpg',
		"image_original_name" => 'Grosseto.jpg',
		"visible" => true,
        "services" => [3,8],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'VeronicaPrimo@gmail.com',
            'AliceMeraviglia@gmail.com',
            'AntonioCassano@gmail.com',
        ]
    ],
    [
        "user_id" => 4,
        "id" =>15,
		"title" => "Appartamento al centro di Napoli",
		"rooms" => 8,
		"beds" => 4,
		"bathrooms" => 4,
		"sqm" => 80,
		"address" => "Via Nazionale, 93, 80143 Napoli NA",
		"latitude" => 40.85617,
		"longitude" => 14.27406,
		"image" => '/images/Napoli.jpg',
		"image_original_name" => 'Napoli.jpg',
		"visible" => true,
        "services" => [1,8,9,10],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'piripillo@gmail.com',
            'sempreulisse@gmail.com',
            'ulisse@gmail.com',
        ]
    ],
    [
        "user_id" => 4,
        "id" =>16,
		"title" => "Appartamento Vittorio Emanuele",
		"rooms" => 26,
		"beds" => 5,
		"bathrooms" => 5,
		"sqm" => 300,
		"address" => "Via Tiburtina, 135, 00185 Roma RM",
		"latitude" => 41.89902,
		"longitude" => 12.51532,
		"image" => '/images/Roma.jpg',
		"image_original_name" => 'Roma.jpg',
		"visible" => true,
        "services" => [4,5,6,7,10],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, quali sono le attrazioni turistiche da visitare qui vicino?',
            'È possibile sapere se la colazione è inclusa?',
            'Ho visto questo annuncio un mese fa ed adesso ho deciso di prenotare! Quanto costa?'
        ],
        "messages-email" =>
        [
            'stereo@gmail.com',
            'danceFloor@gmail.com',
            'TakemeToTheRavelon@gmail.com',
        ]
    ],
    [
        "user_id" => 5,
        "id" =>17,
		"title" => "Appartamento San Marino",
		"rooms" => 5,
		"beds" => 2,
		"bathrooms" => 1,
		"sqm" => 60,
		"address" => "Via Cinque Febbraio, 47899, San Marino",
		"latitude" => 43.96165,
		"longitude" => 12.47108,
		"image" => '/images/SanMarino.jpg',
		"image_original_name" => 'SanMarino.jpg',
		"visible" => true,
        "services" => [3,4,8,9],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'pallina@gmail.com',
            'pallapalla@gmail.com',
            'ornitorinco@gmail.com',
        ]
    ],
    [
        "user_id" => 5,
        "id" =>18,
		"title" => "Appartamento Tra le acque",
		"rooms" => 7,
		"beds" => 3,
		"bathrooms" => 8,
		"sqm" => 80,
		"address" => "30100 Venezia VE",
		"latitude" => 45.4477,
		"longitude" => 12.34502,
		"image" => '/images/Venezia.jpg',
		"image_original_name" => 'Venezia.jpg',
		"visible" => true,
        "services" => [1,4,5,6,7,10],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Il Wifi è gratis?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'porpo@gmail.com',
            'elohim@gmail.com',
            'carciofo@gmail.com',
        ]
    ],
    [
        "user_id" => 5,
        "id" =>19,
		"title" => "Appartamento Padova",
		"rooms" => 15,
		"beds" => 7,
		"bathrooms" => 1,
		"sqm" => 100,
		"address" => "Via Guglielmo Oberdan, 6, 35122 Padova PD",
		"latitude" => 45.40749,
		"longitude" => 11.8767,
		"image" => '/images/Padova.jpg',
		"image_original_name" => 'Padova.jpg',
		"visible" => true,
        "services" => [6,7,8,9,10],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'eracapito@gmail.com',
            'ercapito@gmail.com',
            'haicapito@gmail.com',
        ]
    ],
    [
        "user_id" => 5,
        "id" =>20,
		"title" => "Appartamento vicino al porto",
		"rooms" => 5,
		"beds" => 2,
		"bathrooms" => 1,
		"sqm" => 60,
		"address" => "Via Tullio Buelli, 26, 24035 Curno BG",
		"latitude" => 45.69233,
		"longitude" => 9.6072,
		"image" => '/images/Bergamo.jpg',
		"image_original_name" => 'Bergamo.jpg',
		"visible" => true,
        "services" => [1,4,5,6],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'urcaurca@gmail.com',
            'queryfattamale@gmail.com',
            'sonoilmasterbackend@gmail.com',
        ]
    ],
    [
        "user_id" => 1,
        "id" =>21,
		"title" => "Appartamento Roccapalumba",
		"rooms" => 8,
		"beds" => 3,
		"bathrooms" => 2,
		"sqm" => 100,
		"address" => "Via Case Vecchie, 2, 90020 Roccapalumba PA",
		"latitude" => 37.79831,
		"longitude" => 13.63413,
		"image" => '/images/Roccapalumba.jpg',
		"image_original_name" => 'Roccapalumba.jpg',
		"visible" => true,
        "services" => [1,4,5,2],
        "sponsorships" => 0,
        "messages-text" =>
        [
            'Ciao, mi serviva un alloggio per impegni lavorativi. Dovrei soggiornare 3 notti. È disponibile?',
            'Quanto costa?',
            'Quanto dista il centro a piedi?'
        ],
        "messages-email" =>
        [
            'giruir@gmail.com',
            'ghiro@gmail.com',
            'polkipiski@gmail.com',
        ]
    ]
];
