<?php

class Pessoa
{

    public $nome;
    public $idade;

    public function correr()
    {
        echo $this->nome . " correu!";
    }

}

$pessoa1 = new pessoa();
$pessoa1->nome = "Bruno";
$pessoa1->idade = 30;

$pessoa2 = new pessoa();
$pessoa2->nome = "Cesar";
$pessoa2->idade = 20;

echo $pessoa1->correr();