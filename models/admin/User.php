<?php

use config\Model;

class User extends Model{
    
    public function getUser($username, $password){
        $user = $username;
        $pass = md5($password);

        $query = "SELECT * FROM users WHERE username = '" . $user . "' AND password = '" . $pass . "'";
        $data = $this->execute($query);

        return $data? $data[0]['id']: null;
    }
}