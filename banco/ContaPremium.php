<?php

class ContaPremium extends Conta
{
    public function __construct()
    {
        $this->saldo += 10;
    }
}