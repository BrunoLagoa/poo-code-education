<?php

namespace SON\Conta\Types;

class Conta extends \SON\Conta\ContaAbstract
{
    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }
}