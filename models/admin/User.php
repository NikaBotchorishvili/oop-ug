<?php

use config\Model;

class User extends Model{
    
    public function getUser($username, $password){
        
        
        $query = "SELECT * FROM users WHERE username = '" . $username . "' && password = '" . $password . "'";

        $data = $this->execute($query);

        return $data[0]['id'];
    }
}