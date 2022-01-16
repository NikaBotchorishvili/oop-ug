<?php

use config\Model;

class Menu extends Model{

    public function getAllMenuItems(){
        return $this->getData('menu');
    
    }

    public function insertMenuItem($data){
        $name = $data['name'];
        $path = $data['path'];
        $ord = $data['order'];

        $query = "INSERT INTO menu SET name = '" . $name . "', path = '" . $path . "', ord = '" . $ord . "'";

        $this->run($query);
    }

    public function updateMenuItem($data){
        $name = $data['name'];
        $path = $data['path'];
        $ord = $data['order'];
        $id = $data['id'];

        $query = "UPDATE menu SET name = '" . $name . "', path = '" . $path . "', ord = '" . $ord ."'
                                WHERE id = '" . $id . "'";
        $this->run($query);
    }
}