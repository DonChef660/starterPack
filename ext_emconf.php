<?php

/**
 * Extension Manager/Repository config file for ext "terminal8starter".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Terminal8Starter',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Terminal8\\Terminal8starter\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Fehmi Raqipi',
    'author_email' => 'fehmi.raqipi@terminal8.ch',
    'author_company' => 'Terminal8',
    'version' => '1.0.0',
];
