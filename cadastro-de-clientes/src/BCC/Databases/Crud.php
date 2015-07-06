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

    protected $pdo;
    protected $pessoas;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pessoas = array();
    }

    public function persist(PessoaAbstract $pessoa)
    {
        $this->pessoas[] = $pessoa;
    }

    public function flush()
    {
        foreach($this->pessoas as $pessoa) {
            $tipo = $pessoa->getTipo();
            if($tipo == "Pessoa Juridica")
            {
                $this->pdo->beginTransaction();
                $cadastrar = "INSERT INTO clientes (nome,idade,endereco,enderecoCobranca,cidade,estado,telefone,tipo,grauImportancia,cnpj) VALUES (:nome, :idade, :endereco, :enderecoCobranca, :cidade, :estado, :telefone, :tipo, :grauImportancia, :cnpj)";
                $dados = $this->pdo->prepare($cadastrar);
                $dados->execute(array(
                    "nome"          => $pessoa->getNome(),
                    "idade"         => $pessoa->getIdade(),
                    "endereco"          => $pessoa->getEndereco(),
                    "enderecoCobranca"           => $pessoa->getEnderecoCobranca(),
                    "cidade"      => $pessoa->getCidade(),
                    "estado"           => $pessoa->getEstado(),
                    "telefone"        => $pessoa->getTelefone(),
                    "tipo"        => $pessoa->getTipo(),
                    "grauImportancia"           => $pessoa->getEstrela(),
                    "cnpj"   => $pessoa->getCNPJ()
                ));
                $this->pdo->lastInsertId();
                $this->pdo->commit();
            }else{
                $this->pdo->beginTransaction();
                $cadastrar = "INSERT INTO clientes (nome,idade,endereco,enderecoCobranca,cidade,estado,telefone,tipo,grauImportancia,cpf) VALUES (:nome, :idade, :endereco, :enderecoCobranca, :cidade, :estado, :telefone, :tipo, :grauImportancia, :cpf)";
                $dados = $this->pdo->prepare($cadastrar);
                $dados->execute(array(
                    "nome"          => $pessoa->getNome(),
                    "idade"         => $pessoa->getIdade(),
                    "endereco"          => $pessoa->getEndereco(),
                    "enderecoCobranca"           => $pessoa->getEnderecoCobranca(),
                    "cidade"      => $pessoa->getCidade(),
                    "estado"           => $pessoa->getEstado(),
                    "telefone"        => $pessoa->getTelefone(),
                    "tipo"        => $pessoa->getTipo(),
                    "grauImportancia"           => $pessoa->getEstrela(),
                    "cpf"   => $pessoa->getCPF()
                ));
                $this->pdo->lastInsertId();
                $this->pdo->commit();
            }
        }
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

