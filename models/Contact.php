<?php

use config\Database;

class Contact extends Database{
    
    public function getMenu(){
        $query = "SELECT * FROM menu ORDER BY ord asc";

        return $this->execute($query);
    }
}