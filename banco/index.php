<?php
require_once('ContaAbstract.php');
require_once "ContaType.php";
require_once "ContaPremiumType.php";

$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(50);

echo $conta->getSaldo();
