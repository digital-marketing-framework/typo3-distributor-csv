<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Digital Marketing Framwork - Distributor - CSV',
    'description' => 'Save form data to a CSV file',
    'category' => 'be',
    'author' => 'Meelis Karulin',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '2.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'dmf_distributor_core' => '2.0.0-2.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
