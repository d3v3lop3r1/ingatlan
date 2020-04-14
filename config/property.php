<?php
return [
    'type_id'=>[
        'hu'=>[
            1=>'Eladó',
            2=>'Kiadó'
        ],
        'de'=>[
            1=>'Kaufen',
            2=>'Mieten'
        ]
    ],

    'list_type'=>[
        'hu'=>[
            1=>'Lakás',
            2=>'Ház',
            3=>'Nyaraló',
            4=>'Garázs',
            5=>'Iroda',
            6=>'Ipari',
            7=>'Raktár',
            8=>'Üzlethelyiség',
            9=>'Telek-föld',
            10=>'Vendéglátás',
            11=>'Egyéb'
        ],
        'de'=>[
            1=>'Wohnung',
            2=>'Haus',
            3=>'Ferienobjekt',
            4=>'Garage',
            5=>'Büro',
            6=>'Industrieobjekte',
            7=>'Lager',
            8=>'Verkaufslokal',
            9=>'Grundstück-Land',
            10=>'Gastgewerbe-Hotellerie',
            11=>'Sonstige Immobilien'
        ]
    ],

    'subtype'=>[
        'hu'=>[
            0=>'nem releváns',
            1=>'Tégla',
            2=>'Panel',
            3=>'Csúsztatott zsalus',
            4=>'Családi ház',
            5=>'Ikerház',
            6=>'Sorház',
            7=>'Házrész',
            8=>'Tanya',
            9=>'Könnyűszerkezetes',
            10=>'Zártkert',
            11=>'Szántóföld',
            12=>'Pince',
            13=>'Közöshasználatú',
            14=>'Egyéb'
        ],
        'de'=>[
            0=>'nicht relevant',
            1=>'Steinbau',
            2=>'Plattenbau',
            3=>'Hochhaus',
            4=>'Einfamilienhaus',
            5=>'Doppelhaus',
            6=>'Reihenhaus',
            7=>'Haushälfte',
            8=>'Bauernhof,Gartenanlage',
            9=>'Leichtbau',
            10=>'Geschlossener-Garten',
            11=>'Ackerland,Landgut',
            12=>'Weinberg-Weinkeller',
            13=>'Geteilter-Nutzung',
            14=>'Sonstige'
        ]

    ],

    'region'=>[
        'hu'=>[
            1=>'Bács-Kiskun',
            2=>'Baranya',
            3=>'Békés',
            4=>'Borsod-Abaúj-Zemplén',
            5=>'Csongrád',
            6=>'Fejér',
            7=>'Győr-Moson-Sopron',
            8=>'Hajdú-Bihar',
            9=>'Jász-Nagykun-Szolnok',
            10=>'Komárom-Esztergom',
            11=>'Nógrád',
            12=>'Pest',
            13=>'Somogy',
            14=>'Szabolcs-Szatmár-Bereg',
            15=>'Tolna',
            16=>'Vas',
            17=>'Veszprém',
            18=>'Zala'
        ],
        'de'=>[
            1=>'Bács-Kiskun',
            2=>'Baranya',
            3=>'Békés',
            4=>'Borsod-Abaúj-Zemplén',
            5=>'Csongrád',
            6=>'Fejér',
            7=>'Győr-Moson-Sopron',
            8=>'Hajdú-Bihar',
            9=>'Jász-Nagykun-Szolnok',
            10=>'Komárom-Esztergom',
            11=>'Nógrád',
            12=>'Pest',
            13=>'Somogy',
            14=>'Szabolcs-Szatmár-Bereg',
            15=>'Tolna',
            16=>'Vas',
            17=>'Veszprém',
            18=>'Zala'
        ]
    ],

    'floors'=>[
        'hu'=>[
            0=>'nem releváns',
            1=>'szuterén',
            2=>'földszinti',
            3=>'félemeleti',
            4=>'1. emeleti',
            5=>'2. emeleti',
            6=>'3. emeleti',
            7=>'4. emeleti',
            8=>'5. emeleti',
            9=>'6. emeleti',
            10=>'7. emeleti',
            11=>'8. emeleti',
            12=>'9. emeleti',
            13=>'10. emeleti',
            14=>'10 felett'
        ],
        'de'=>[
            0=>'nicht relevant',
            1=>'Souterrain',
            2=>'Erdgeschoss',
            3=>'Hochparterre',
            4=>'1. Stock',
            5=>'2. Stock',
            6=>'3. Stock',
            7=>'4. Stock',
            8=>'5. Stock',
            9=>'6. Stock',
            10=>'7. Stock',
            11=>'8. Stock',
            12=>'9. Stock',
            13=>'10. Stock',
            14=>'über 10 Etagen'
        ]
    ],

    'condition'=>[
        'hu'=>[
            0=>'nem releváns',
            1=>'kitűnő állapotú',
            2=>'új építésű',
            3=>'újszerű',
            4=>'felújított',
            5=>'részben felújítva',
            6=>'jó állapotú',
            7=>'közepes állapotú',
            8=>'felújítandó',
            9=>'jelenleg lakhatatlan'
        ],
        'de'=>[
            0=>'nicht relevant',
            1=>'sehr guter Zustand',
            2=>'Neubau',
            3=>'neuartig',
            4=>'erneuert-renoviert',
            5=>'teilweise renoviert',
            6=>'guter Allgemeinzustand',
            7=>'dem Altersentsprechend',
            8=>'Renovierungsbedürftig',
            9=>'aktuell unbewohnbar'
        ]
    ],

    'heating'=>[
        'hu'=>[
            0=>'nem releváns',
            1=>'gáz(cirko)',
            2=>'gáz(konvektor)',
            3=>'gáz(héra)',
            4=>'távfűtés',
            5=>'távfűtés egyedi méréssel',
            6=>'elektromos',
            7=>'házközponti',
            8=>'házközponti egyedi méréssel',
            9=>'fan-coil',
            10=>'geotermikus',
            11=>'cserépkályha',
            12=>'kandalló',
            13=>'központi és kandalló',
            14=>'egyéb'
        ],
        'de'=>[
            0=>'nicht relevant',
            1=>'zierkulierende Heizgas',
            2=>'Gas Konvektor-Heizung',
            3=>'Kachelofen mit Héra Gasbetrieb',
            4=>'Fernheizung',
            5=>'Fernheizung mit Einzelzähler',
            6=>'elektrische Heizung',
            7=>'hauseigener Zentralheizung',
            8=>'Zentralheizung mit Einzelzähler',
            9=>'Gebläsekonvektorheizung',
            10=>'Fan Coil Klimagerät',
            11=>'Kachelofen',
            12=>'Kamin',
            13=>'Zentralheizung und Kamin',
            14=>'sonstige'
        ]
    ],

    'parking'=>[
        'hu'=>[
            0=>'nem releváns',
            1=>'garázs - az árban',
            2=>'garázs - megvehető',
            3=>'kültéri - az árban',
            4=>'kültéri - megvehető',
            5=>'utcán - ingyenes',
            6=>'utcán - fizetős',
            7=>'teremgarázs - az árban',
            8=>'teremgarázs - megevhető',
            9=>'parkolás az udvarban'
        ],
        'de'=>[
            0=>'nicht relevant',
            1=>'Garage - im Preis',
            2=>'Garage - nicht im Preis',
            3=>'Parkplatz - im Preis',
            4=>'Parkplatz - nicht im Preis',
            5=>'Parken vor dem Haus - Gratis',
            6=>'Parken vor dem Haus - kostenpflichtig',
            7=>'Stellplatz unter Dach - im Preis',
            8=>'Stellplatz unter Dacht- nicht im Preis',
            9=>'Stellplatz auf dem Hof'
        ]
    ],

    'comfort'=>[
        'hu'=>[
            0=>'nem releváns',
            1=>'luxus',
            2=>'duplakomfortos',
            3=>'összkömfortos',
            4=>'komfortos',
            5=>'félkomfortos',
            6=>'komfort nélküli'
        ],
        'de'=>[
            0=>'nicht relevant',
            1=>'luxuriös',
            2=>'doppeltkomfort',
            3=>'mit allem Komfort',
            4=>'komfortabel',
            5=>'halbkomfortable',
            6=>'ohne Komfort'
        ]
    ],

    'room_height'=>[
        'hu'=>[
            0=>'nem releváns',
            1=>'3m-nél alacsonyabb',
            2=>'3m-nél magasabb'
        ],
        'de'=>[
            0=>'nicht relevant',
            1=>'bis 3m Deckenhöhe',
            2=>'über 3m Deckenhöhe'
        ]
    ],
    'filter'=>[
        'hu'=>[
            1=>'Dátum szerint legfrissebb',
            2=>'Dátum szerint legrégebbi',
            3=>'Ár szerint legdrágább',
            4=>'Ár szerint legolcsóbb',
            5=>'Méret szerint legnagyobb',
            6=>'Méret szerint legkisebb'
        ],
        'de'=>[
            1=>'Neueste Inserat zuerst',
            2=>'Älteste Inserat zuerst',
            3=>'Preise aufsteigend',
            4=>'Preise absteigend',
            5=>'Ab größte Wohnfläche',
            6=>'Ab kleinste Wohnfläche'
        ]
    ]
]
?>
