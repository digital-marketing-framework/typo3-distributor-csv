<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Distributor - CSV',
    'description' => 'Save form data to a CSV file',
    'category' => 'be',
    'author' => 'Meelis Karulin',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'dmf_distributor_core' => '3.0.0-3.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
