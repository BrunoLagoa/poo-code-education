<?php
require_once "Conta.php";

$conta = new Conta();
$conta->depositar(100);
$conta->sacar(50);

echo $conta->getSaldo();
