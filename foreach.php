<?php

$contasCorrentes = [
    '123456789' => [
        'titular' => 'Leonardo',
        'saldo' => 25
    ],
    '987654321' => [
        'titular' => 'Maria',
        'saldo' => 10
    ],
    '888555222' => [
        'titular' => 'Lucas',
        'saldo' => 15
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}