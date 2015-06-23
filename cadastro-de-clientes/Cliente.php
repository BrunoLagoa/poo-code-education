<?php

class Cliente
{

    public $nome;
    public $cpf;
    public $endereco;
    public $cidade;
    public $estado;
    public $telefone;

    public function ordemCliente($records, $field, $reverse=false)
    {
        $hash = array();

        foreach($records as $record)
        {
            $hash[$record[$field]] = $record;
        }

        ($reverse)? krsort($hash) : ksort($hash);

        $records = array();

        foreach($hash as $record)
        {
            $records []= $record;
        }

        return $records;
    }
}