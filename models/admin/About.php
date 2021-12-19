<?php

use config\Model;

class About extends Model{

    public function updateAboutData($data){
        $query = "UPDATE about SET title = '" . $data['title'] ."', text = '" . $data['text'] . "' WHERE id = 1";

        $this->run($query);
    }
}