<?php

namespace BCC\Fixtures;

use BCC\Databases\CrudDatabese;

class Fixture {

    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }


    public function createTables()
    {
        try{
            $this->db->exec("
                CREATE TABLE IF NOT EXISTS clientes (
                id INT NOT NULL AUTO_INCREMENT,
                nome VARCHAR(255) NULL,
                idade VARCHAR(45) NULL,
                endereco VARCHAR(45) NULL,
                enderecoCobranca INT NULL,
                cidade VARCHAR(45) NULL,
                estado VARCHAR(45) NULL,
                telefone VARCHAR(45) NULL,
                tipo VARCHAR(45) NULL,
                grauImportancia VARCHAR(45) NULL,
                cpf VARCHAR(45) NULL,
                cnpj VARCHAR(45) NULL,
                PRIMARY KEY ('id'))
            ");
        }
        catch(\PDOException $e){
            die('Erro: '. $e->getMessage());
        }
    }

    public function dropTables()
    {
        try{
            $this->db->exec("DROP TABLE clientes");
        }
        catch(\PDOException $e){
            die('Erro: '. $e->getMessage());
        }
    }

    public function insert(){
        $com = new CrudDatabese($this->db);

        $pessoa1 = new \BCC\Pessoa\Types\PessoaFisica('Bruno Castro',30,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
        $com->persist($pessoa1);
        $com->flush();

        $pessoa2 = new \BCC\Pessoa\Types\PessoaFisica('Danilo Oliveira',18,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
        $com->persist($pessoa2);
        $com->flush();

        $pessoa3  = new \BCC\Pessoa\Types\PessoaJuridica('Cesar Duarte',33,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);
        $com->persist($pessoa3);
        $com->flush();

        $pessoa4  = new \BCC\Pessoa\Types\PessoaJuridica('Carla Magalhães',15,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);
        $com->persist($pessoa4);
        $com->flush();

    }
}