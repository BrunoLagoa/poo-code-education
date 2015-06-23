<?php

//require_once "Pessoa.php";
//$pessoa1 = new Pessoa("Bruno",30);
//$pessoa2 = new Pessoa("Cesar",20);
//
//echo $pessoa1->correr(50);

require_once "Produto.php";
require_once "Tenis.php";

$tenis = new Tenis();

if($tenis instanceof Produto){
    echo "E um tipo tenis";
}else{
    echo "Nao e um tipo tenis";
}