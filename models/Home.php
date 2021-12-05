<?php 

use config\Database;

class Home extends Database{
    
    public function getMenu(){
        $query = "SELECT * FROM menu ORDER BY ord asc";

        return $this->execute($query);
    }
}