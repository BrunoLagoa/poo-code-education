<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


$x = new SON\Conta\Types\ContaType();
$x->depositar(10);
echo $x->getSaldo();

$bancoSantander = new SON\Banco\Santander();
$bancoSantander->setNome("Santander Exempo");
$bancoSantander->getConta()->depositar(10);

