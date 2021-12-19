<?php

namespace config;

class Model extends Database{

    public function getMenu(){
        $query = "SELECT * FROM menu ORDER BY ord asc";
    
        return $this->execute($query);
    }

    public function getAboutData(){
        return $this->getSingleData('about');
    }
}