<?php

require __DIR__ . '/vendor/autoload.php';

use App\Classe\ContaCorrente;
use App\Classe\ContaPoupanca;

/*$conta = new ContaBancaria(
    "Banco Inter",
    "Maicon Santos",
    "82665-9",
    "45488-96",
    0
);*/

$contaCorrente = new ContaCorrente("","","","",0);
$contaPoupanca = new ContaPoupanca("","","","",0);

$contaCorrente->depositar(1800);
$contaCorrente->sacar(800);
echo '<br />';
echo $contaCorrente->obterSaldo();
echo '<br />';
$contaPoupanca->depositar(1800);
$contaPoupanca->sacar(800);
echo '<br />';
echo $contaPoupanca->obterSaldo();
