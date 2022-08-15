<?php

namespace App;

use App\Interface\IDadosContaBancaria;
use App\Interface\IOperacoesContaBancaria;

abstract class ContaBancaria implements IDadosContaBancaria, IOperacoesContaBancaria
{
    private string $banco = "Banco Inter";
    private string $nomeTitular = "Maicon Santos";
    private string $numeroAgencia = "82665-9";
    private string $numeroConta = "45488-96";
    private float $saldo = 0;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        string $saldo,
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function exibeDadosDaConta(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }

    /**
     * Get the value of banco
     */ 
    public function getBanco(): string
    {
        return $this->banco;
    }

    /**
     * Set the value of banco
     *
     * @return self
     */ 
    public function setBanco(string $banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get the value of nomeTitular
     */ 
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    /**
     * Set the value of nomeTitular
     *
     * @return self
     */ 
    public function setNomeTitular(string $nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;

        return $this;
    }

    /**
     * Get the value of numeroAgencia
     */ 
    public function getnumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    /**
     * Set the value of numeroAgencia
     *
     * @return self
     */ 
    public function setnumeroAgencia(string $numeroAgencia)
    {
        $this->numeroAgencia = $numeroAgencia;

        return $this;
    }

    /**
     * Get the value of numeroConta
     */ 
    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    /**
     * Set the value of numeroConta
     *
     * @return self
     */ 
    public function setNumeroConta(string $numeroConta)
    {
        $this->numeroConta = $numeroConta;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return self
     */ 
    public function setSaldo(float $saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }
    /*****************************
     * Métodos funcionais
     * */
    public function depositar(float $valor): string{
        $this->saldo += $valor;
        return "Depósito de R$ " .  number_format($valor, 2, ',', '') . "realizado"; 
    }

    public function sacar(float $valor): string{
        $this->saldo -= $valor;
        return "Saque de R$ " .  number_format($valor, 2, ',', '') . "realizado"; 
    }

    public abstract function obterSaldo(): string;

}
