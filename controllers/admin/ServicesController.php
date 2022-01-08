<?php

use config\AdminController;

class ServicesController extends AdminController{

    public function index(){
        $services = new Services();
        
        $this->data['services'] = $services->getAllServices();
        $this->tpl = "services/index";
    }

    public function create(){
        $this->tpl = "services/create";
    }

    public function store($data){
        $services = new Services();

        $services->insertService($data);

        header("Location: " . HOST . "admin/?page=services");
    }

    public function edit(){
        $services = new Services();

        $this->tpl = "services/edit";

        $this->data['service'] = $services->getById('services', $_GET['id']);
    }

    public function update($data){
        $services = new Services();

        $services->updateService($data);
        
        header("Location: " . HOST . "admin/?page=services");
    }

    public function delete($data){

        $services = new Services();

        $services->deleteById('services', $data['id']);
        
        echo 1;
    }
}