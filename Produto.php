<?php

class Produto
{
    private $nome;
    private $descricao;
    private $valor;
    private $estoque;

    public function iniciaProcesso()
    {
        echo "----- Iniciando processo -----";
    }

    public function finalizaProcesso()
    {
        echo "----- Finaliza processo -----";
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        $this->iniciaProcesso();
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * @param mixed $estoque
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
        return $this;
    }

    /*
    public function __construct($nome, $descricao, $valor, $estoque)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->estoque = $estoque;

    }
    */



    private function baixaEstoque()
    {
        $this->estoque = $this->estoque - 1;
    }
}