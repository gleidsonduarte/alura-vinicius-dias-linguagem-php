<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;

$cpfGleidson = new CPF('123.456.789-10');
$enderecoGleidson = new Endereco('São José dos Campos', 'Vila Industrial', 'Riskala José Neme', '42');
$gleidson = new Titular('Gleidson Duarte', $cpfGleidson, $enderecoGleidson);
$primeiraConta = new Conta($gleidson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$cpfCamila = new CPF('123.456.789-11');
$enderecoCamila = new Endereco('São Paulo', 'Embu das Artes', 'São Lucas', '150');
$camila = new Titular('Camila Oliveira', $cpfCamila, $enderecoCamila);
$primeiraConta = new Conta($camila);

new Conta(
    new Titular(
        'João Mascarenhas',
        new CPF('123.456.789-12'),
        new Endereco('Teste', 'Teste', 'Teste', 'Teste')
    )
);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;
