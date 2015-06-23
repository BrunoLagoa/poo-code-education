<?php

require_once "Pessoa.php";

$pessoa1 = new Pessoa("Bruno",30);

$pessoa2 = new Pessoa("Cesar",20);

echo $pessoa1->correr(50);

require_once "Produto.php";

$produto1 = new Tenis();