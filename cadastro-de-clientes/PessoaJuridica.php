<?php

require_once('Pessoa.php');
require_once('PessoaInterFace.php');

class PessoaJuridica extends Pessoa implements PessoaInterFace
{
    private $cnpj;
    private $estrela;
    private $enderecoCobranca;

    public function __construct($nome, $idade, $endereco, $cidade, $estado, $telefone, $cnpj, $estrela, $enderecoCobranca=null)
    {
        parent::__construct($nome, $idade, $endereco, $cidade, $estado, $telefone, "Pessoa Jurídica");
        $this->setCodigo($cnpj);
        $this->setEstrela($estrela);

        if($enderecoCobranca == null)
        {
            $this->enderecoCobranca = $endereco;
        }else{
            $this->enderecoCobranca = $enderecoCobranca;
        }

    }

    public function setEstrela($valor)
    {
        $this->estrela = $valor;
        return $this;
    }

    public function getEstrela()
    {
        return $this->estrela;
    }

    public function setEnderecoCobranca($valor)
    {
        $this->enderecoCobranca = $valor;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function setCodigo($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCodigo()
    {
        return $this->cnpj;
    }

}