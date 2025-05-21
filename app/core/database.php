<?php

class Database {
    /*Función para conectar a la base de datos*/
    public static function connect()
    {
        $connection = new PDO(SGBD, USER, PASSWORD);
        $connection->exec("SET CHARACTER SET utf8");
        return $connection;
    }
    /*Función para consultas simples*/
    protected static function executeSimpleQuery($query)
    {
        $sql = self::connect();
        $response = $sql->prepare($query);
        $response->execute();
        return $response;
    }
}