<?php

$conta1 = [
    'titular' => 'Gleidson',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Camila',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];

for ($index = 0; $index < count($contasCorrentes); $index++) { 
    echo $contasCorrentes[$index]['titular'] . PHP_EOL;
}
