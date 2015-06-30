<?php

namespace BCC\Databases;


class Conexao {

    private $conn;

    private $host;

    public function __construct($host)
    {
        $this->host = $host;
    }

    public function connect()
    {
        try {
            $this->conn = new \PDO("{$this->host}");
            //echo "Conexao Realizada com sucesso";
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $this->conn;
    }

    public function disconnect()
    {
        $this->conn = null;
    }
}

//$host = "sqlite:database.sqlite";
//$db = new Conexao('sqlite:database.sqlite');
//$db->connect();