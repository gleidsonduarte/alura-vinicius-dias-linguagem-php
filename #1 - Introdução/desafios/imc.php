<?php

$altura = 1.87;
$peso = 114;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo 'Abaixo';
} else if ($imc < 24.9) {
    echo 'Dentro';
} else {
    echo 'Acima';
}

echo " do recomendado.";
    