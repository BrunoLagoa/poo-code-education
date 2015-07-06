<?php

require_once('autoload.php');

use BCC\Databases\Crud;
use BCC\Databases\Connect;
use BCC\Pessoa\Types\PessoaFisica;


function criarDb() {
    $dsn     = 'mysql:host=localhost';
    $user    = 'root';
    $pass    = '';
    //$options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
    $dbname  = 'curso_code_education';
    $table   = 'clientes';

    try {
        $pdo = new PDO($dsn, $user, $pass); //$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
        $pdo->query("use $dbname");
        print("O banco de dados {$dbname} foi criado com sucesso!<br>");
        $tabl ="CREATE table $table(
        id INT( 10 ) AUTO_INCREMENT NOT NULL PRIMARY KEY,
        nome VARCHAR( 250 ) NOT NULL,
        idade VARCHAR( 250 ) NOT NULL,
        endereco VARCHAR( 250 ) NOT NULL,
        enderecoCobranca VARCHAR( 250 ) NOT NULL,
        cidade VARCHAR( 250 ) NOT NULL,
        estado VARCHAR( 250 ) NOT NULL,
        telefone VARCHAR( 250 ) NOT NULL,
        tipo VARCHAR( 250 ) NOT NULL,
        cpf VARCHAR( 250 ) NOT NULL,
        cnpj VARCHAR( 250 ) NOT NULL,
        grauImportancia VARCHAR( 250 ) NOT NULL);";
        $pdo->exec($tabl);
        print("A tabela {$table} foi criada com sucesso!<br>");

    } catch (PDOException $e) {
        echo "ERROR: Não foi possível cadastrar dados no banco!";
        die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
    }
    return $pdo;
}
criarDb();

$pessoa1 = new BCC\Pessoa\Types\PessoaFisica('Bruno Castro',30,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
//$insert = new Crud(Connect::getDb());
//$insert->persist($pessoa1);
//$insert->flush();

////////////////////////////////////////////////////////////////////////////

$pessoa2 = new BCC\Pessoa\Types\PessoaFisica('Danilo Oliveira',18,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
//$insert = new Crud(Connect::getDb());
//$insert->persist($pessoa2);
//$insert->flush();

////////////////////////////////////////////////////////////////////////////

$pessoa3  = new BCC\Pessoa\Types\PessoaJuridica('Cesar Duarte',33,'Rua piaui','Lagoa Santa','MG',3188604212,'10256256/0001-18',5);
//$insert = new Crud(Connect::getDb());
//$insert->persist($pessoa3);
//$insert->flush();


////////////////////////////////////////////////////////////////////////////

$pessoa4  = new BCC\Pessoa\Types\PessoaFisica('Carla Magalhães',15,'Rua piaui','Lagoa Santa','MG',3188604212,'MG1566192',5);
$insert = new Crud(Connect::getDb());
$insert->persist($pessoa1);
$insert->persist($pessoa2);
$insert->persist($pessoa3);
$insert->persist($pessoa4);
$insert->flush();

////////////////////////////////////////////////////////////////////////////