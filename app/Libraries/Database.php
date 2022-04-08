<?php

class Database {

    private $host = 'localhost';
    private  $db   = 'integracao';
    private $user = 'root';
    private $pass = '';
    private $port = "3306";
    private $charset = 'utf8mb4';
    private $stmt;

    public function __construct(){
     

            $options = [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $dsn = 'mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->db;
            try {
               $this-> pdo = new \PDO($dsn, $this->user, $this->pass, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
                echo "Não foi possivel conectar !";
            }



    }


    public function query($sql){
        $this-> stmt = $this->pdo->prepare($sql);

    }


    public function bind($parametro, $valor, $tipo = null){

        if(is_null($tipo)){
            switch (true){
                case is_int($valor):
                    $tipo = \PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = \PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = \PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = \PDO::PARAM_STR;
            }
        }
            $this->stmt->bindValue($parametro, $valor, $tipo);
        
    }

       public function executa(){
            return $this->stmt->execute();
        }

        public function resultado(){
            $this->executa();
            return $this->stmt->fetch();
        }
    
        public function resultadoAll(){
                $this->executa();
                return $this->stmt->fetchAll();
        }

        public function rowCount(){
            return $this->stmt->rowCount();
        }

        public function lastInsertId(){
            return $this->pdo->lastInsertId();
        }


}






?>