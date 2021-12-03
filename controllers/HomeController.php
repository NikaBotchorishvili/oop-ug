<?php

use config\Controller;

class HomeController extends Controller{

    public function index(){
        $this->tpl = "home";
    }
}