<?php

namespace SON\Conta\Types;

use \SON\Conta\ContaAbstract as ContaAbstrata;

class ContaPremium extends ContaAbstrata
{
    public function __construct()
    {
        $this->saldo += 10;
    }

    protected function calculaDeposito($valor)
    {
        return $valor += 20;
    }
}