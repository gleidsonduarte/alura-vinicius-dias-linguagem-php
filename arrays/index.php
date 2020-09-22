<?php

require_once 'Calculadora.php';

$notas = [9, 3, 10, 5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média é: $media";
} else {
    echo 'Não foi possível calcular a média';
}