<?php

use config\Model;

class Services extends Model{

    public function getAllServices(){
        return $this->getData('services');
    
    }

    public function insertService($data){
        $query = "INSERT INTO services SET name = '" . $data['name'] . "', text = '" . $data['text'] . "'";

        $this->run($query);
    }

    public function updateService($data){
        $query = "UPDATE services SET name = '" . $data['name'] . "', text = '" . $data['text'] . "' WHERE id = '" . $data['id'] . "'";
        $this->run($query);
    }
}