<?php

class AdminPage{

    public $pageName;

    public function __construct($request){

        if(Session::get('user_id') == NULL  ){
            //  if Session With Key user_id Doesn't Exist pageName Would Have Value Of Login So Login Page 
            //  Proceeds To Load
            $this->pageName = "login";
            $this->getController();
        }else{
            $this->pageName = isset($request['page']) && !empty($request['page'])? $request['page']: "home";

            $this->getModel();
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                //  If Request Method Is POST Then Controller Will Be Loaded Which Will Call An Action Function.
                $this->getPostMethod($_POST['action']);
            }else{
                $this->getController();
            }
        }
    }

    public function getPostMethod($action){
        $controllerName = $this->getControllerName();
        $controllerPath = $this->getControllerPath();

        require_once $controllerPath;

        $controller = new $controllerName($this->pageName);

        $controller->$action($_POST);
    }

    public function getController(){
        $controllerName = $this->getControllerName();
        $controllerPath = $this->getControllerPath();

        require_once $controllerPath;

        $controller = new $controllerName($_GET);

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
        return "../models/admin/" . $this->getModelName() . ".php";
    }

    public function getModelName(){
        return ucfirst($this->pageName);
    }
}