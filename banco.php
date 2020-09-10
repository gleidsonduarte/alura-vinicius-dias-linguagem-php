<?php

require_once 'src/CPF.php';
require_once 'src/Titular.php';
require_once 'src/Conta.php';

$cpfGleidson = new CPF('123.456.789-10');

$gleidson = new Titular(
    $cpfGleidson,
    'Gleidson Duarte'
);

$primeiraConta = new Conta($gleidson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$cpfCamila = new CPF('123.456.789-11');

$camila = new Titular(
    $cpfCamila,
    'Camila Oliveira'
);

$primeiraConta = new Conta($camila);

new Conta(
    new Titular(
        new CPF('123.456.789-12'),
        'João Mascarenhas'
    )
);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;