<?php 

namespace config;

class Controller{

    public $pageName;

    //  Value Of $tpl Is Changed Based on Which Controllers index() Method We're Calling.
    public $tpl;

    //  Array With The data Returned From models.
    public $data = [];

    public function __construct($pageName){
        $this->pageName = $pageName;
    }

    public function renderView(){
    
        $this->index();

        include "views/layout.php";
    }

}