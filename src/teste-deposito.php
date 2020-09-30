<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        'Vinicius Dias',
        new CPF('123.456.789-10'),
        new Endereco('cidade', 'bairro', 'rua', 'numero')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo, seu ráquer perigoso!" . PHP_EOL;
}
