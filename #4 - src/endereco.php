<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'Bairro Qualquer', 'Minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua aí', '50');

$umEndereco->bairro = "Teste __set";
echo $umEndereco->bairro . PHP_EOL;

echo $umEndereco;
echo $outroEndereco;