<?php

namespace App\Classe;

use App\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{

    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

    public function ConstrutorSemArgumento(){}

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAngencia,
        string $numeroConta,
        string $saldo
    ) {
        parent::__construct($banco, $nomeTitular, $numeroAngencia, $numeroConta, $saldo);
    }

    public function obterSaldo(): string
    {
        return "Seu saldo é: " . number_format($this->getSaldo() + ($this->getSaldo() * 0.03)) . " o tipo de conta é " . self::TIPO_CONTA;
    }
}