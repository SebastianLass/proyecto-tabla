<?php
class Conexion{
    private $dbUser; 
    private $dbPwd;
    private $dbHost;
    private $dbName;
    private $conn=null;

    public function __construct($dbuser, $dbpwd, $dbhost, $dbname){
        $this->dbUser=$dbuser; 
        $this->dbPwd=$dbpwd;
        $this->dbHost=$dbhost;
        $this->dbName=$dbname;
    }

    public function Conectarse(){
        try{
            $dsn = "mysql:host={$this->dbHost};dbname={$this->dbName};charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
            
        }catch(PDOException $e){ // Corregir PDOExeption a PDOException
            echo "error de conexion!" . $e->getMessage();
            exit;
        }
    }

    public function desconectar(){
        $this->conn = null;
    }

}
