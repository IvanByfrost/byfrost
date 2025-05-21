<?php

class BaseModel
{
    protected $db;
    public function __construct()
    {
        $this->db = Database::connect();
    }
    /* Función para seleccionar */
    protected function select($sql, $params = [])
    {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } 
        catch (PDOException $e) {
            error_log('Error de base de datos en execute(): ' . $e->getMessage(). "SQL: " .$sql. " Params: " . json_encode($params));
            throw new PDOException("Error al ejecutar la consulta SELECT");
        }
    }

    /* Obtiene un único registro de la base de datos como un array asociativo. */
    protected function fetchOne($sql, $params = []) {
        $stmt = $this->select($sql, $params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    protected function fetchAll($sql, $params = []) {
        $stmt = $this->select($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtiene todos los registros
    }

    protected function lastInsertId() {
        return $this->db->lastInsertId();
    }

    /* Función para insertar */
    protected function execute($sql, $params = []){
        try {
            $stmt = $this->db->prepare($sql, $params);
            return $stmt->execute($params); // Devuelve true/false según el éxito de la ejecución
        } catch(PDOException $e) {
            error_log('Error de base de datos en execute(): ' . $e->getMessage(). "SQL: " .$sql. " Params: " . json_encode($params));
            throw new PDOException("Error al ejecutar la consulta de modificación (INSERT, UPDATE, DELETE)");
        }
    }

}
