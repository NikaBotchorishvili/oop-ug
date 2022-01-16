<?php

use config\AdminController;

class MenuController extends AdminController{

    public function index(){
        $menu = new Menu();

        $this->data['menu'] = $menu->getAllMenuItems();
        $this->tpl = "menu/index";
    }

    public function create(){
        $this->tpl = "menu/create";
    }

    public function store($data){
        $menu = new Menu();

        $menu->insertMenuItem($data);

        header("Location: " . HOST . "admin/?page=menu");
    }

    public function edit(){
        $menu = new Menu();

        $this->tpl = "menu/edit";

        $this->data['menu'] = $menu->getById('menu', $_GET['id']);
    }

    public function update($data){
        $menu = new Menu();

        $menu->updateMenuItem($data);
        
        header("Location: " . HOST . "admin/?page=menu");
    }

    public function delete($data){

        $menu = new Menu();

        $menu->deleteById('menu', $data['id']);
        
        echo 1;
    }
}