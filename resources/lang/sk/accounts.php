<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'edit' => [
        'title_compact' => 'nastavenia',
        'username' => 'používateľské meno',

        'avatar' => [
            'title' => 'Avatar',
            'rules' => 'Prosím uistite sa, že váš avatar sedí s :link.<br/>To znamená, že musí byť <strong>primeraný pre každý vek</strong>. To je žiadna nudita, vulgarizmy alebo sugestívny obsah.',
            'rules_link' => 'pravidlá komunity',
        ],

        'email' => [
            'new' => 'nový email',
            'new_confirmation' => 'potvrdenie emailu',
            'title' => 'Email',
            'locked' => [
                '_' => '',
                'accounts' => '',
            ],
        ],

        'legacy_api' => [
            'api' => '',
            'irc' => '',
            'title' => '',
        ],

        'password' => [
            'current' => 'aktuálne heslo',
            'new' => 'nové heslo',
            'new_confirmation' => 'potvrdenie hesla',
            'title' => 'Heslo',
        ],

        'profile' => [
            'country' => '',
            'title' => 'Profil',

            'country_change' => [
                '_' => "",
                'update_link' => '',
            ],

            'user' => [
                'user_discord' => '',
                'user_from' => 'súčasná poloha',
                'user_interests' => 'záujmy',
                'user_occ' => 'povolanie',
                'user_twitter' => '',
                'user_website' => 'webstránka',
            ],
        ],

        'signature' => [
            'title' => 'Podpis',
            'update' => 'aktualizovať',
        ],
    ],

    'github_user' => [
        'info' => "",
        'link' => '',
        'title' => '',
        'unlink' => '',

        'error' => [
            'already_linked' => '',
            'no_contribution' => '',
            'unverified_email' => '',
        ],
    ],

    'notifications' => [
        'beatmapset_discussion_qualified_problem' => 'dostávať notifikácie pre nové problémy na kvalifikovaných beatmapách pre následujúce módy',
        'beatmapset_disqualify' => 'prijímať upozornenia, keď sú beatmapy diskvalifikované z týchto módov',
        'comment_reply' => 'prijímať upozornenia pre odpovede na vaše komentáre',
        'title' => 'Oznámenia',
        'topic_auto_subscribe' => 'automaticky zapnúť notifikácie pre nové témy fóra, ktoré vytvoríte',

        'options' => [
            '_' => 'možnosti doručenia',
            'beatmap_owner_change' => 'obtiažnosť hosťa',
            'beatmapset:modding' => 'módovanie beatmáp',
            'channel_message' => 'správy súkromného chatu',
            'comment_new' => 'nové komentáre
',
            'forum_topic_reply' => 'odpoveď na tému',
            'mail' => 'pošta',
            'mapping' => 'tvorca beatmapy',
            'push' => 'push',
            'user_achievement_unlock' => 'nová medaila odomknutá',
        ],
    ],

    'oauth' => [
        'authorized_clients' => 'autorizované klienty',
        'own_clients' => 'vlastné klienty',
        'title' => 'OAuth',
    ],

    'options' => [
        'beatmapset_show_nsfw' => 'skryť varovania pre explicitný obsah v beatmapách',
        'beatmapset_title_show_original' => 'zobraziť metadáta beatmapy v originálnom jazyku',
        'title' => 'Možnosti',

        'beatmapset_download' => [
            '_' => 'predvolený typ sťahovania beatmáp',
            'all' => 's videom, ak je dostupné',
            'direct' => 'otvoriť v osu!direct',
            'no_video' => 'bez videa',
        ],
    ],

    'playstyles' => [
        'keyboard' => 'klávesnica',
        'mouse' => 'myš',
        'tablet' => 'tablet',
        'title' => 'Štýly hrania',
        'touch' => 'dotyk',
    ],

    'privacy' => [
        'friends_only' => 'blokovať súkromné správy od osôb mimo vášho zoznamu priateľov',
        'hide_online' => 'skryť online status',
        'title' => 'Súkromie',
    ],

    'security' => [
        'current_session' => 'aktuálne',
        'end_session' => 'Koniec relácie',
        'end_session_confirmation' => 'Toto okamžite ukončí reláciu na vybranom zariadení. Ste si istí?',
        'last_active' => 'Naposledy aktívny:',
        'title' => 'Zabezpečenie',
        'web_sessions' => 'webové relácie',
    ],

    'update_email' => [
        'update' => 'aktualizovať',
    ],

    'update_password' => [
        'update' => 'aktualizovať',
    ],

    'verification_completed' => [
        'text' => 'Túto kartu/okno už môžete zatvoriť',
        'title' => 'Overenie bolo dokončené',
    ],

    'verification_invalid' => [
        'title' => 'Link vypršal alebo je neplatný',
    ],
];
