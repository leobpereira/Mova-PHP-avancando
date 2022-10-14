<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Leonardo',
        'saldo' => 25
    ],

    '123-456-789-11' => [
        'titular' => 'Maria',
        'saldo' => 10
    ],

    '123-456-789-12' => [
        'titular' => 'Lucas',
        'saldo' => 15
    ]
];

$contasCorrentes['123-456-789-13'] = [
    'titular' => 'Jade',
    'saldo' => 10000
];


for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}