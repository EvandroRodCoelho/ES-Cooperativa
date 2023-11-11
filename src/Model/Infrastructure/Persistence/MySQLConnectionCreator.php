<?php

namespace grupofatec\escooperativa\Model\Infrastructure\Persistence;

use PDO;

class MySQLConnectionCreator
{
    private static string $host = 'localhost';
    private static string $dbName = 'cooperativa';
    private static string $user = 'root';
    private static string $password = 'senha';

    public static function createConnection(): PDO
    {
        $connectionConfig = "mysql:host=" . self::$host . ';dbname=' . self::$dbName;
        $pdo = new PDO($connectionConfig, self::$user, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}