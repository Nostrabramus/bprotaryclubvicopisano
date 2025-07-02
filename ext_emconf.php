<?php

/**
 * Extension Manager/Repository config file for ext "bprotaryclubvicopisano".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'BPRotaryClubVicopisano',
    'description' => 'Bootstrap Package Child for Rotary Club Vicopisano',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Nostrabramus\\Bprotaryclubvicopisano\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Abramo Tesoro',
    'author_email' => 'abramotesoro@gmail.com',
    'author_company' => 'Nostrabramus',
    'version' => '1.0.0',
];
