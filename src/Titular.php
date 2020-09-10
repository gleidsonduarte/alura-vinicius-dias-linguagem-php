<?php

class Titular
{
    private $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres' . PHP_EOL;
            exit();
        }
    }

}