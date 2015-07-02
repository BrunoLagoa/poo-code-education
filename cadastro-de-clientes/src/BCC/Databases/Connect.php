<?php

namespace BCC\Databases;

abstract class Connect
{
    private static $dsn = 'mysql:host=localhost;dbname=curso_code_education';
    private static $user = 'root';
    private static $password = '';
    //private static $options = [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ];

    private static function connection() 
    {
        try {
            $pdo = new \PDO(self::$dsn, self::$user, self::$password); //self::$options);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível conectar ao banco de dados ";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
    }
    
    public static function getDb()
    {
        return self::connection();
    }
}
