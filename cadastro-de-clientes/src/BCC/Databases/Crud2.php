<?php

namespace BCC\Databases;

use BCC\Databases\Abstracts\DataBasesAbstract;
use BCC\Pessoa\PessoaAbstract;
use BCC\Pessoa\Types\PessoaFisica;
use BCC\Pessoa\Types\PessoaJuridica;


/**
 * Class Crud
 * Classe responsável por fazer o CRUD com PDO ao banco de dados
 * @package src\BCC\Databases
 * @var PDO
 */
class Crud //extends DataBasesAbstract
{
    private $connect;

    public function __construct(\PDO $connect) {
        $connect instanceof \PDO;
        $this->connect = $connect;
    }

    public function persist(PessoaFisica $clientes)
    {
        try{
            $this->connect->beginTransaction();
            $cadastrar = "INSERT INTO clientes (nome,idade,endereco,enderecoCobranca,cidade,estado,telefone,tipo,grauImportancia,cpf) VALUES (:nome, :idade, :endereco, :enderecoCobranca, :cidade, :estado, :telefone, :tipo, :grauImportancia, :cpf)";
            $dados = $this->connect->prepare($cadastrar);
            $dados->execute(array(
                "nome"          => $clientes->getNome(),
                "idade"         => $clientes->getIdade(),
                "endereco"          => $clientes->getEndereco(),
                "enderecoCobranca"           => $clientes->getEnderecoCobranca(),
                "cidade"      => $clientes->getCidade(),
                "estado"           => $clientes->getEstado(),
                "telefone"        => $clientes->getTelefone(),
                "tipo"        => $clientes->getTipo(),
                "grauImportancia"           => $clientes->getEstrela(),
                "cpf"   => $clientes->getCPF()
            ));
            $this->connect->lastInsertId();
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível cadastrar dados no banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
    }

    public function flush()
    {
        try{
            $this->connect->commit();
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível cadastrar dados no banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
        return true;
    }

    public function read()
    {

        try{
            $listar = $this->connect->prepare("SELECT * FROM  clientes");
            $listar->execute();
            $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível listar dados do banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
        return $dados;
    }


    public function update()
    {

    }

    public function delete()
    {

    }
}

