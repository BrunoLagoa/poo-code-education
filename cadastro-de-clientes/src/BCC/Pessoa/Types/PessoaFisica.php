<?php

namespace BCC\Pessoa\Types;

use BCC\Pessoa\PessoaAbstract;
use BCC\Pessoa\Interfaces\PFInterFace;

class PessoaFisica extends PessoaAbstract implements PFInterFace
{
    private $cpf;
    private $estrela;
    private $enderecoCobranca;

    public function __construct($nome, $idade, $endereco, $cidade, $estado, $telefone, $cpf, $estrela, $enderecoCobranca=null)
    {
        parent::__construct($nome, $idade, $endereco, $cidade, $estado, $telefone, "Pessoa Física");
        $this->setCPF($cpf);
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

    public function setCPF($valor)
    {
        $this->cpf = $valor;
        return $this;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

}