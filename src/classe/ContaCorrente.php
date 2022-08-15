<?php

namespace App\Classe;

use App\ContaBancaria;


class ContaCorrente extends ContaBancaria
{

    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

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
        return "Seu saldo é: " . number_format($this->getSaldo() - self::TAXA) . " o tipo de conta é " . self::TIPO_CONTA;
    }
}