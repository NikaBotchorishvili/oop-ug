<?php

use config\Database;

class About extends Database{
    
    public function getMenu(){
        $query = "SELECT * FROM menu ORDER BY ord asc";
    
        return $this->execute($query);
    }
}