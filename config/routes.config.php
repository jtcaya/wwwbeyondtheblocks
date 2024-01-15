<?php

$baseConfig['routes'] = [
    [
        'GET',
        '/',
        'index',
    ],
    [
        'GET',
        '/index[/{action}]',
        'index',
    ],
    [
        ['GET', 'POST'],
        '/products[/{action}[/{id:[0-9]+}]]',
        'products',
    ],
];