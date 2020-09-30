<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;
use InvalidArgumentException;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

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
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new InvalidArgumentException();
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
