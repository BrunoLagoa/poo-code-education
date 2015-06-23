<?php

class Conta
{
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return true;
    }

    public function sacar($valor)
    {
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            return true;
        }

        return false;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}