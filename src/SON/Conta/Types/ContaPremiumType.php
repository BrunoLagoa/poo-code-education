<?php

namespace SON\Conta\Types;

use \SON\Conta\ContaAbstract;

class ContaPremium extends ContaAbstract
{
    public function __construct()
    {
        $this->saldo += 10;
    }

    protected function calculoDeposito($valor)
    {

        return $valor += 20;
    }
}