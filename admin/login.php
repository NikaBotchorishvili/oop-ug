<?php

require_once "../helpers/Session.php";
require_once "../config/Database.php";
require_once "../config/Model.php";
require_once "../models/admin/User.php";

Session::start();

$userModel = new User();

$id = $userModel->getUser($_POST['username'], $_POST['password']);

if($id){
    Session::set('user_id', $id);
    //  Sets A $_SESSION Of user_id Key With Value Of $id

    header("Location: /oop-ug/admin");
}else{
    header("Location: /oop-ug/admin/?u=0");
    //  u=0 Is A $_GET Parameter For Error Handling. u Is Short For user. Error Handling Is Happening In
    //  views/admin/login.php
}