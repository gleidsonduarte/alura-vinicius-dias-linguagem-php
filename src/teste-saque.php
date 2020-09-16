<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaCorrente(
    new Titular(
        'Vinicius Dias',
        new CPF('123.456.789-10'),
        new Endereco('Petrópolis', 'Bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;
