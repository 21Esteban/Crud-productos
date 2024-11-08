<?php
class Conexion {
    private $conn;

    public function __construct() {
        $config = include('config.php');
        try {
            $this->conn = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['pass']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conectado a base de datos";
        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            echo "Connection failed. Please try again later.";
        }
    }
    
    public function getConn() {
        return $this->conn;
    }
    
    public function closeConnection() {
        $this->conn = null;
    }


}
?>