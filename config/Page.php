<?php 

class Page{
    public $pageName;

    public function __construct($request){
        //  Assigns Value To $pageName. The Value Is Coming From index.php And The Passed Value Is $_GET.
        $this->pageName = isset($request['page']) && !empty($request['page'])? $request['page']: "home";
    }

    public function getController(){
        //  Define Controller Path And Name Variable.
        $controllerPath = $this->getControllerPath();
        $controllerName = $this->getControllerName();

        //  Load Particular Controller.
        require_once $controllerPath;

        //  Create A Controller Object and Render View.
        $page = new $controllerName($this->pageName);
        $page->renderView();
    }

    public function getControllerPath(){
        //  Returns Controller Path Such as : controller/HomeController.php
        return "controllers/". $this->getControllerName(). ".php";
    }

    public function getControllerName(){
        //  Returns A Controller Name Such as : HomeController.
        return ucfirst($this->pageName). "Controller";
    }
}