<?php




$x = new SON\Conta\Types\ContaType();
$x->despositar(10);
echo $x->getSaldo();