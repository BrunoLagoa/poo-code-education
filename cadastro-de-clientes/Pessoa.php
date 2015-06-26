<?php

abstract class Pessoa {

    protected $nome;
    protected $idade;
    protected $endereco;
    protected $cidade;
    protected $estado;
    protected $telefone;
    protected $tipo;

    public function __construct($nome, $idade, $endereco, $cidade, $estado, $telefone, $tipo)
    {
        $this->setNome($nome)
            ->setIdade($idade)
            ->setEndereco($endereco)
            ->setCidade($cidade)
            ->setEstado($estado)
            ->setTelefone($telefone)
            ->setTipo($tipo);
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }


    public function getCidade()
    {
        return $this->cidade;
    }


    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }


    public function getEstado()
    {
        return $this->estado;
    }


    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }
}