<?php

declare(strict_types=1);

require_once 'autoload.php';

$correntistaECompras = [
    'Giovanni',
    'João',
    12,
    'Maria',
    25,
    'Luis',
    'Luisa',
    '12'
];

ArrayUtils::remover(12, $correntistaECompras);

echo '<pre>';
var_dump($correntistaECompras);
echo '</pre>';
