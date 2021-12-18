<?php

namespace config;

abstract Class AdminController{
    public $tpl;

    public $data = [];

    abstract public function index();

    public function renderView(){
        $this->index();

        require_once "../views/admin/layout.php";
    }
}