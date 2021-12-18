<?php

use config\AdminController;

class HomeController extends AdminController{
    public function index(){
        $this->tpl = "home";
    }
}