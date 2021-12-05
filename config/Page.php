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
        require $controllerPath;

        //  Create A Controller Object and Render View.
        $controller = new $controllerName($this->pageName);
        $controller->renderView();
    }
    
    public function getModel(){
        //  Define Model Path.
        $modelPath = $this->getModelPath();

        // Load Particular Model.
        require_once $modelPath;
    }

    public function getControllerPath(){
        //  Returns Controller Path Such As : controller/HomeController.php
        return "controllers/". $this->getControllerName(). ".php";
    }

    public function getControllerName(){
        //  Returns A Controller Name Such As : HomeController
        return ucfirst($this->pageName). "Controller";
    }

    public function getModelPath(){
        // Returns A Model Path Suck As : models/Home.php
        return "models/" . $this->getModelName() . ".php";
    }

    public function getModelName(){
        //  Return A Model Name Such As : Home
        return ucfirst($this->pageName);
    }
}