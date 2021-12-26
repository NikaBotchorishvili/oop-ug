<?php

use config\Model;

class Services extends Model{

    public function getAllServices(){
        return $this->getData('services');
    
    }

    public function insertData($data){
        $query = "INSERT INTO services SET name = '" . $data['name'] . "', text = '" . $data['text'] . "'";

        $this->run($query);
    }

    public function updateData($data){
        $query = "UPDATE services SET name = '" . $data['name'] . "', text = '" . $data['text'] . "' WHERE id = '" . $data['id'] . "'";
        $this->run($query);
    }

    public function deleteService(){
        $query = "DELETE FROM services WHERE id = " . $_GET['id'];

        $this->run($query);
    }
}