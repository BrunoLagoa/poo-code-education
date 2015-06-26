<?php

require_once('Pessoa.php');
require_once('PessoaInterFace.php');

class PessoaFisica extends Pessoa implements PessoaInterFace
{
    private $rg;
    private $estrela;
    private $enderecoCobranca;

    public function __construct($nome, $idade, $endereco, $cidade, $estado, $telefone, $rg, $estrela, $enderecoCobranca=null)
    {
        parent::__construct($nome, $idade, $endereco, $cidade, $estado, $telefone, "Pessoa Física");
        $this->setCodigo($rg);
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

    public function setCodigo($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    public function getCodigo()
    {
        return $this->rg;
    }

}