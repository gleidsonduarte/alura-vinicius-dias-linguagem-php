<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo 'Valor precisa ser positivo';
        }

        $this->saldo += $valorADepositar;
    }

    
    public function recuperaCpfTitular()
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNomeTitular()
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas()
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
