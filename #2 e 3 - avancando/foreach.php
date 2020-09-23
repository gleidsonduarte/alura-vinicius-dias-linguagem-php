<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Gleidson',
        'saldo' => 1000
    ],
    12345648911 => [
        'titular' => 'Camila',
        'saldo' => 10000
    ],
    12325678910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $key => $value) {
    echo "Chave: $key " . PHP_EOL;
    echo 'Valor titular: ' . $value['titular'] . PHP_EOL;
    echo 'Valor saldo: ' . $value['saldo'] . PHP_EOL;
    echo PHP_EOL;
}