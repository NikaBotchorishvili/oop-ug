<?php

class AdminPage{

    public $pageName;

    public function __construct($request){

        if(Session::get('user_id') == NULL  ){
            $this->pageName = "login";
        }else{
            $this->pageName = isset($request['page']) && !empty($request['page'])? $request['page']: "home";

            $this->getModel();
        }

        $this->getController();
    }

    public function getController(){
        $controllerName = $this->getControllerName();
        $controllerPath = $this->getControllerPath();

        require_once $controllerPath;

        $controller = new $controllerName;

        $controller->renderView();
    }

    public function getModel(){
        $modelPath = $this->getModelPath();

        require_once $modelPath;
    }

    public function getControllerPath(){
        return "../controllers/admin/" . $this->getControllerName() . ".php";
    }

    public function getControllerName(){
        return ucfirst($this->pageName) . "Controller";
    }

    public function getModelPath(){
        return "../models/" . $this->getModelName() . ".php";
    }

    public function getModelName(){
        return ucfirst($this->pageName);
    }
}