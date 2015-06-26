<?php

class Conta
{
    protected $saldo;

    public final function depositar($valor)
    {
        $this->saldo += $this->calculoDeposito($valor);
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

    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }
}