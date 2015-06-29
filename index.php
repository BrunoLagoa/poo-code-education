<?php

//require_once "PessoaAbstract.php";
//$pessoa1 = new Pessoa("Bruno",30);
//$pessoa2 = new Pessoa("Cesar",20);
//
//echo $pessoa1->correr(50);

require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();

$produto
    ->setNome("Tenis Exemplo")
    ->setDescricao("Essa e a descricao do produto")
    ->setEstoque(10)
    ->setValor(1000)
;

