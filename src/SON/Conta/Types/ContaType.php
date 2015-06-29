<?php

namespace SON\Conta\Types;

use \SON\Conta\ContaAbstract as ContaAbstrata;

class ContaType extends ContaAbstrata
{
    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }
}