<?php

namespace config;

use PDO;
use Exception;

class Database{

    protected $host = DB_HOST;
    protected $username = DB_USER;
    protected $password = DB_PASS;
    protected $dbName = DB_NAME;

    public $pdo;
    
    public function __construct(){
        $this->connect();
    }

    public function connect(){

        try{

            $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->username, $this->password);
        
        }catch(Exception $e){

            print_r($e->getMessage());
            
        }
    }

    public function getData($tableName){
        $data = [];

        $query = "SELECT * FROM " . $tableName;

        $sql = $this->pdo->prepare($query);
        $sql->execute();

        while($row = $sql->fetch()){
            $data[] = $row;
        }
        return $data;
    }

    public function getById($tableName, $id){
        $data = [];

        $query = "SELECT * FROM ". $tableName . " WHERE id = " . $id;

        $sql = $this->pdo->prepare($query);
        $sql->execute();

        while($row = $sql->fetch()){
           $data = $row;
        }
        return $data;
    }


    public function getSingleData($tableName){
        $data = [];

        $query = "SELECT * FROM ". $tableName;

        $sql = $this->pdo->prepare($query);
        $sql->execute();

        while($row = $sql->fetch()){
           $data = $row;
        }
        return $data;
    }

    public function run($query){
        $sql = $this->pdo->prepare($query);
        $sql->execute();
    }

    public function execute($query){
        $data = [];

        $sql = $this->pdo->prepare($query);
        $sql->execute();

        while($row = $sql->fetch()){
            $data[] = $row;
        }

        return $data;
    }

    public function deleteById($tableName, $id){
        $query = "DELETE FROM " . $tableName . " WHERE id = " . $id;

        $this->run($query);
    }
}