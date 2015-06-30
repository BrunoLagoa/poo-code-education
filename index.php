<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


$conta = new SON\Conta\Types\ContaType();
$conta->depositar(10);

$bancoSantander = new SON\Banco\Santander($conta);
$bancoSantander->setConta($conta);

$bancoSantander->setNome("Santander Exempo");
$bancoSantander->getConta()->getSaldo();

