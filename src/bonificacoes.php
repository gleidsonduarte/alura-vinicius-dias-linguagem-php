<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;

$umDesenvolvedor = new Desenvolvedor(
    'Gleidson Duarte',
    new CPF('777.777.777-77'),
    1000
);

$umEditorVideo = new EditorVideo(
    'Anderson',
    new CPF('123.456.789-10'),
    3500
);

$umDesenvolvedor->sobeDeNivel();

$umaGerente = new Gerente(
    'Camila',
    new CPF('987.654.321-10'),
    3000
);

$umaDiretora = new Diretor(
    'Beatriz',
    new CPF('123.654.789-10'),
    5000
);

$contralador = new ControladorDeBonificacoes();
$contralador->adicionaBonificacaoDe($umDesenvolvedor);
$contralador->adicionaBonificacaoDe($umEditorVideo);
$contralador->adicionaBonificacaoDe($umaGerente);
$contralador->adicionaBonificacaoDe($umaDiretora);

echo $contralador->recuperaTotal();