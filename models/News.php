<?php

use config\Model;

class News extends Model{

    public function getAllNewsItems(){
        return $this->getData('news');
    }
}