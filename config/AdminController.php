<?php

namespace config;

abstract Class AdminController{
    public $tpl;

    public $data = [];

    public $action;

    public function __construct($request){
        $this->action = isset($request['action']) && !empty($request['action']) ? $request['action']: "index";
    }

    abstract public function index();

    public function renderView(){
        $this->{$this->action}();

        require_once "../views/admin/layout.php";
    }
}