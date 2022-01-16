<?php

use config\Model;

class News extends Model{

    public function getAllNewsItems(){
        return $this->getData('news');
    }

    public function insertNewsItem($data){

        $fileName = '';

        if(isset($_FILES) && isset($_FILES['image'])){
            $expName = explode('.' , $_FILES['image']['name']);
            $extension = array_pop($expName);
            $orig_name = implode(".", $expName);
            $fileName = $orig_name . "-" . time() . '.' . $extension;
            $tmp_name = $_FILES['image']['tmp_name'];
   
            move_uploaded_file($tmp_name, ROOT_URL."/assets/uploads/" . $fileName);   
        }

        $title = $data['title'];
        $short_text = $data['short_text'];
        $text = $data['text'];

        $query = "INSERT INTO news
                    SET title='" . $title . "',
                        short_text='" . $short_text . "',
                        text='" . $text . "',
                        image='" . $fileName . "'";

        $this->run($query);
    }
}