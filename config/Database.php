<?php

namespace config;

use PDO;
use Exception;

class Database{

    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbName = "oop-ug";

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

        $query = "SELECT * FROM ". $tableName;

        $sql = $this->pdo->prepare($query);
        $sql->execute();

        while($row = $sql->fetch()){
           $data = $row;
        }
        return $data;
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
}