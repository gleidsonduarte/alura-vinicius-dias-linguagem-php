<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$umDiretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador = new Autenticador();
$autenticador->tentaLogin($umDiretor, '1234');