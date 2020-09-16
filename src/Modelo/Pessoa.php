<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\CPF;

abstract class Pessoa
{
    use AcessoPropriedades;
    
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    final protected function validaNome($nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres' . PHP_EOL;
            exit();
        }
    }
}
