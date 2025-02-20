<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'header' => [
        'small' => 'Compite de más formas que solo presionando círculos.',
        'large' => 'Concursos de la comunidad',
    ],

    'index' => [
        'nav_title' => 'listado',
    ],

    'judge' => [
        'hide_judged' => '',
        'nav_title' => '',
        'no_current_vote' => '',
        'update' => '',
        'validation' => [
            'missing_score' => '',
            'contest_vote_judged' => '',
        ],
        'voted' => '',
    ],

    'judge_results' => [
        '_' => '',
        'creator' => '',
        'score' => '',
        'total_score' => '',
    ],

    'voting' => [
        'judge_link' => '',
        'judged_notice' => '',
        'login_required' => 'Inicie sesión para votar.',
        'over' => 'Las votaciones para este concurso ya han terminado',
        'show_voted_only' => 'Mostrar votado',

        'best_of' => [
            'none_played' => "¡No parece que hayas jugado a ningún mapa que califique para este concurso!",
        ],

        'button' => [
            'add' => 'Votar',
            'remove' => 'Quitar voto',
            'used_up' => 'Ya has usado todos tus votos',
        ],

        'progress' => [
            '_' => ':used / :max votos usados',
        ],

        'requirement' => [
            'playlist_beatmapsets' => [
                'incomplete_play' => 'Debe jugar todos los mapas en las listas de juego especificadas antes de votar',
            ],
        ],
    ],

    'entry' => [
        '_' => 'entrada',
        'login_required' => 'Inicie sesión para participar en el concurso.',
        'silenced_or_restricted' => 'No puede participar en los concursos mientras esté restringido o silenciado.',
        'preparation' => 'Estamos preparando este concurso actualmente. Por favor, ¡Espera pacientemente!',
        'drop_here' => 'Suelta tu entrada aquí',
        'download' => 'Descargar archivo .osz',

        'wrong_type' => [
            'art' => 'Solo se aceptan archivos .jpg y .png en este concurso.',
            'beatmap' => 'Solo se aceptan archivos .osu en este concurso.',
            'music' => 'Solo se aceptan archivos .mp3 en este concurso.',
        ],

        'wrong_dimensions' => 'Las entradas para este concurso deben ser :widthx:height',
        'too_big' => 'Las entradas para este concurso solo pueden ser de hasta :limit.',
    ],

    'beatmaps' => [
        'download' => 'Descargar entrada',
    ],

    'vote' => [
        'list' => 'votos',
        'count' => ':count_delimited voto|:count_delimited votos',
        'points' => ':count_delimited punto|:count_delimited puntos',
    ],

    'dates' => [
        'ended' => 'Finalizó el :date',
        'ended_no_date' => 'Finalizado',

        'starts' => [
            '_' => 'Comienza :date',
            'soon' => 'pronto™',
        ],
    ],

    'states' => [
        'entry' => 'Entrada abierta',
        'voting' => 'Votación Iniciada',
        'results' => 'Resultados',
    ],
];
